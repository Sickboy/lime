<?php

class AuthCAS extends AuthPluginBase
{

    protected $storage = 'DbStorage';
    static protected $description = 'CAS authentication plugin';
    static protected $name = 'CAS';
    protected $settings = array(
        'casAuthServer' => array(
            'type' => 'string',
            'label' => 'The servername of the CAS Server without protocol',
            'default' => 'localhost',
        ),
        'casAuthPort' => array(
            'type' => 'int',
            'label' => 'CAS Server listening Port',
            'default' => 8443,
        ),
        'casAuthUri' => array(
            'type' => 'string',
            'label' => 'Relative uri from CAS Server to cas workingdirectory',
            'default' => '/cas',
        ),
        'casVersion' => array(
            'type' => 'select',
            'label' => 'protocol version',
            'options' => array("1.0" => "CAS_VERSION_1_0", "2.0" => "CAS_VERSION_2_0", "3.0" => "CAS_VERSION_3_0", "S1" => "SAML_VERSION_1_1"),
            'default' => "2.0",
        ),
        'autoCreate' => array(
            'type' => 'select',
            'label' => 'Enable automated creation of user ?',
            'options' => array("0" => "No, don't create user automatically", "1" => "User creation on the first connection", "2" => "User creation from CAS attributes"),
            'default' => '0',
            'submitonchange' => true
        ),
        'casLoginAttr' => array(
            'type' => 'string',
            'label' => 'CAS attribute for login',
            'default' => 'uid'
        ),
        'casFullnameAttr' => array(
            'type' => 'string',
            'label' => 'CAS attribute for fullname',
            'default' => 'displayName'
        ),
        'casMailAttr' => array(
            'type' => 'string',
            'label' => 'CAS attribute for mail',
            'default' => 'mail'
        ),
        'server' => array(
            'type' => 'string',
            'label' => 'Ldap server e.g. ldap://ldap.mydomain.com or ldaps://ldap.mydomain.com'
        ),
        'ldapport' => array(
            'type' => 'string',
            'label' => 'Port number (default when omitted is 389)'
        ),
        'ldapversion' => array(
            'type' => 'select',
            'label' => 'LDAP version',
            'options' => array('2' => 'LDAPv2', '3' => 'LDAPv3'),
            'default' => '2',
            'submitonchange' => true
        ),
        'ldapoptreferrals' => array(
            'type' => 'boolean',
            'label' => 'Select true if referrals must be followed (use false for ActiveDirectory)',
            'default' => '0'
        ),
        'ldaptls' => array(
            'type' => 'boolean',
            'label' => 'Check to enable Start-TLS encryption When using LDAPv3',
            'default' => '0'
        ),
        'searchuserattribute' => array(
            'type' => 'string',
            'label' => 'Attribute to compare to the given login can be uid, cn, mail, ...'
        ),
        'usersearchbase' => array(
            'type' => 'string',
            'label' => 'Base DN for the user search operation'
        ),
        'extrauserfilter' => array(
            'type' => 'string',
            'label' => 'Optional extra LDAP filter to be ANDed to the basic (searchuserattribute=username) filter. Don\'t forget the outmost enclosing parentheses'
        ),
        'binddn' => array(
            'type' => 'string',
            'label' => 'Optional DN of the LDAP account used to search for the end-user\'s DN. An anonymous bind is performed if empty.'
        ),
        'bindpwd' => array(
            'type' => 'string',
            'label' => 'Password of the LDAP account used to search for the end-user\'s DN if previoulsy set.'
        )
    );

    public function init()
    {
        /**
         * Here you should handle subscribing to the events your plugin will handle
         */
        $this->subscribe('beforeLogin');
        $this->subscribe('newUserSession');
        $this->subscribe('beforeLogout');
    }

    /**
     * Modified getPluginSettings since we have a select box that autosubmits
     * and we only want to show the relevant options.
     * 
     * @param boolean $getValues
     * @return array
     */
    public function getPluginSettings($getValues = true)
    {
        $aPluginSettings = parent::getPluginSettings($getValues);
        if ($getValues) 
        {
            $ldapver = $aPluginSettings['ldapversion']['current'];
            $autoCreate = $aPluginSettings['autoCreate']['current'];

            // If it is a post request, it could be an autosubmit so read posted
            // value over the saved value
            if (App()->request->isPostRequest) 
            {
                $ldapver = App()->request->getPost('ldapversion', $ldapver);
                $aPluginSettings['ldapversion']['current'] = $ldapver;
                $autoCreate = App()->request->getPost('autoCreate', $autoCreate);
                $aPluginSettings['autoCreate']['current'] = $autoCreate;
            }

            if ($autoCreate != 1)
            {
                // Don't create user. Hide unneeded ldap settings
                unset($aPluginSettings['server']);
                unset($aPluginSettings['ldapport']);
                unset($aPluginSettings['ldapversion']);
                unset($aPluginSettings['ldapoptreferrals']);
                unset($aPluginSettings['ldaptls']);
                unset($aPluginSettings['searchuserattribute']);
                unset($aPluginSettings['usersearchbase']);
                unset($aPluginSettings['extrauserfilter']);
                unset($aPluginSettings['binddn']);
                unset($aPluginSettings['bindpwd']);
            } else {
                if ($ldapver == '2')
                {
                    unset($aPluginSettings['ldaptls']);
                }
            }
            if ($autoCreate != 2)
            {
                unset($aPluginSettings['casFullnameAttr']);
                unset($aPluginSettings['casLoginAttr']);
                unset($aPluginSettings['casMailAttr']);
            }
        }

        return $aPluginSettings;
    }

    public function beforeLogin() 
    {
      if (!is_null($this->api->getRequest()->getParam('noAuthCAS')) || ($this->api->getRequest()->getIsPostRequest())) {
        # Local authentication forced through 'noAuthCAS' url parameter
        $this->getEvent()->set('default', "Authdb");
      } else {
        // configure phpCAS
        $cas_host = $this->get('casAuthServer');
        $cas_context = $this->get('casAuthUri');
        $cas_port = (int) $this->get('casAuthPort');
        $cas_version = $this->get('casVersion');
        // import phpCAS lib
        $basedir=dirname(__FILE__); 
        Yii::setPathOfAlias('myplugin', $basedir);
        Yii::import('myplugin.third_party.CAS.CAS',true);
        // Initialize phpCAS
        phpCAS::client($cas_version, $cas_host, $cas_port, $cas_context, false);
        // disable SSL validation of the CAS server
        phpCAS::setNoCasServerValidation();
        //force CAS authentication
        phpCAS::forceAuthentication();

        $this->setUsername(phpCAS::getUser());
        $oUser = $this->api->getUserByName($this->getUserName());
        if ($oUser || ((int) $this->get('autoCreate') > 0) ) 
        {
            // User authenticated and found. Cas become the authentication system
            $this->getEvent()->set('default', get_class($this));
            $this->setAuthPlugin(); // This plugin handles authentication, halt further execution of auth plugins
        } elseif ($this->get('is_default', null, null)) 
        {
            // Fall back to another authentication mecanism
            throw new CHttpException(401, 'Wrong credentials for LimeSurvey administration.');
        }
      }
    }

    public function newUserSession() 
    {
        // Do nothing if this user is not AuthCAS type
        $identity = $this->getEvent()->get('identity');
        if ($identity->plugin != 'AuthCAS') 
        {
            return;
        }

        $sUser = $this->getUserName();

        $oUser = $this->api->getUserByName($sUser);
        if (is_null($oUser)) 
        {
            if ((int) $this->get('autoCreate') === 1) 
            {
                // auto-create from LDAP
                // Get configuration settings:
                $ldapserver = $this->get('server');
                $ldapport = $this->get('ldapport');
                $ldapver = $this->get('ldapversion');
                $ldaptls = $this->get('ldaptls');
                $ldapoptreferrals = $this->get('ldapoptreferrals');
                $searchuserattribute = $this->get('searchuserattribute');
                $extrauserfilter = $this->get('extrauserfilter');
                $usersearchbase = $this->get('usersearchbase');
                $binddn = $this->get('binddn');
                $bindpwd = $this->get('bindpwd');

                $username = $sUser;

                if (empty($ldapport)) 
                {
                    $ldapport = 389;
                }

                // Try to connect
                $ldapconn = ldap_connect($ldapserver, (int) $ldapport);
                if (false == $ldapconn) 
                {
                    $this->setAuthFailure(1, gT('Could not connect to LDAP server.'));
                    return;
                }

                // using LDAP version
                if ($ldapver === null) 
                {
                    // If the version hasn't been set, default = 2
                    $ldapver = 2;
                }
                ldap_set_option($ldapconn, LDAP_OPT_PROTOCOL_VERSION, $ldapver);
                ldap_set_option($ldapconn, LDAP_OPT_REFERRALS, $ldapoptreferrals);

                if (!empty($ldaptls) && $ldaptls == '1' && $ldapver == 3 && preg_match("/^ldaps:\/\//", $ldapserver) == 0) 
                {
                    // starting TLS secure layer
                    if (!ldap_start_tls($ldapconn)) 
                    {
                        $this->setAuthFailure(100, ldap_error($ldapconn));
                        ldap_close($ldapconn); // all done? close connection
                        return;
                    }
                }

                // We first do a LDAP search from the username given
                // to find the userDN and then we procced to the bind operation
                if (empty($binddn)) 
                {
                    // There is no account defined to do the LDAP search, 
                    // let's use anonymous bind instead
                    $ldapbindsearch = @ldap_bind($ldapconn);
                } else 
                {
                    // An account is defined to do the LDAP search, let's use it
                    $ldapbindsearch = @ldap_bind($ldapconn, $binddn, $bindpwd);
                }
                if (!$ldapbindsearch) 
                {
                    $this->setAuthFailure(100, ldap_error($ldapconn));
                    ldap_close($ldapconn); // all done? close connection
                    return;
                }
                // Now prepare the search filter
                if ($extrauserfilter != "") 
                {
                    $usersearchfilter = "(&($searchuserattribute=$username)$extrauserfilter)";
                } else 
                {
                    $usersearchfilter = "($searchuserattribute=$username)";
                }
                // Search for the user
                $dnsearchres = ldap_search($ldapconn, $usersearchbase, $usersearchfilter, array($searchuserattribute, "displayname", "mail"));
                $rescount = ldap_count_entries($ldapconn, $dnsearchres);
                if ($rescount == 1) 
                {
                    $userentry = ldap_get_entries($ldapconn, $dnsearchres);
                    $userdn = $userentry[0]["dn"];

                    $oUser = new User;
                    $oUser->users_name = $username;
                    $oUser->password = hash('sha256', createPassword());
                    $oUser->full_name = $userentry[0]["displayname"][0];
                    $oUser->parent_id = 1;
                    $oUser->email = $userentry[0]["mail"][0];


                    if ($oUser->save()) 
                    {
                        if ($this->api->getConfigKey('auth_cas_autocreate_permissions'))
                        {
                           $permission = new Permission;
                           $permission->setPermissions($oUser->uid, 0, 'global', $this->api->getConfigKey('auth_cas_autocreate_permissions'), true);
                        }
                        if ($this->api->getConfigKey('auth_cas_template_list'))
                        {
                           // Add permission on the templates defined in the config file
                           foreach ($this->api->getConfigKey('auth_cas_template_list') as $template)
                           {
                              $oPermission=new Permission;
                              $oPermission->uid = $oUser->uid;
                              $oPermission->entity = 'template';
                              $oPermission->permission = trim($template);
                              $oPermission->read_p = 1;
                              $oPermission->save();
                           }
                        }

                        // read again user from newly created entry
                        $this->setAuthSuccess($oUser);

						// fire afterAutoCreate event
						$event = new PluginEvent('afterUserAutoCreate');
						$event->set('username', $username);
						App()->getPluginManager()->dispatchEvent($event);

                        return;
                    } else 
                    {
                        $this->setAuthFailure(self::ERROR_USERNAME_INVALID);
                        throw new CHttpException(401, 'User not saved : ' . $userentry[0]["mail"][0] . " / " . $userentry[0]["displayName"]);
                        return;
                    }
                } else 
                {
                    // if no entry or more than one entry returned
                    // then deny authentication
                    $this->setAuthFailure(100, ldap_error($ldapconn));
                    ldap_close($ldapconn); // all done? close connection
                    throw new CHttpException(401, 'No authorized user found for login "' . $username . '"');
                    return;
                }
            } elseif ((int) $this->get('autoCreate') === 2)
            {
                try {
                    // import phpCAS lib
                    $basedir=dirname(__FILE__); 
                    Yii::setPathOfAlias('myplugin', $basedir);
                    Yii::import('myplugin.third_party.CAS.CAS',true);
                    $cas_host = $this->get('casAuthServer');
                    $cas_context = $this->get('casAuthUri');
                    $cas_version = $this->get('casVersion');
                    $cas_port = (int) $this->get('casAuthPort');
                    // Initialize phpCAS
                    //phpCAS::client($cas_version, $cas_host, $cas_port, $cas_context, false);
                    // disable SSL validation of the CAS server
                    //phpCAS::setNoCasServerValidation();
                    $cas_fullname = phpCAS::getAttribute($this->get('casFullnameAttr'));
                    $cas_login = phpCAS::getAttribute($this->get('casLoginAttr'));
                    $cas_mail = phpCAS::getAttribute($this->get('casMailAttr'));
                } catch (Exception $e)
                {
                    $this->setAuthFailure(self::ERROR_USERNAME_INVALID);
                    throw new CHttpException(401, 'Cas attributes not found for "' . $username . '"');
                    return;
                }
                $oUser = new User;
                $oUser->users_name = phpCAS::getUser();
                $oUser->password = hash('sha256', createPassword());
                $oUser->full_name = $cas_fullname;
                $oUser->parent_id = 1;
                $oUser->email = $cas_mail;
                if ($oUser->save())
                {
                    if ($this->api->getConfigKey('auth_cas_autocreate_permissions'))
                    {
                        $permission = new Permission;
                        $permission->setPermissions($oUser->uid, 0, 'global', $this->api->getConfigKey('auth_cas_autocreate_permissions'), true);
                    }
                    $this->setAuthSuccess($oUser);

					// fire afterAutoCreate event
					$event = new PluginEvent('afterUserAutoCreate');
					$event->set('username', $oUser->users_name);
					App()->getPluginManager()->dispatchEvent($event);

                    return;
                } else
                {
                    $this->setAuthFailure(self::ERROR_USERNAME_INVALID);
                    throw new CHttpException(401, 'User not saved : ' . $sUser .' / ' . $cas_mail . ' / ' . $cas_fullname);
                    return;
                }
            }
        } else 
        {
            $this->setAuthSuccess($oUser);
            return;
        }
    }

    public function beforeLogout() 
    {
        // configure phpCAS
        $cas_host = $this->get('casAuthServer');
        $cas_context = $this->get('casAuthUri');
        $cas_version = $this->get('casVersion');
        $cas_port = (int) $this->get('casAuthPort');
        // import phpCAS lib
        $basedir=dirname(__FILE__); 
        Yii::setPathOfAlias('myplugin', $basedir);
        Yii::import('myplugin.third_party.CAS.CAS',true);
        // Initialize phpCAS
        phpCAS::client($cas_version, $cas_host, $cas_port, $cas_context, false);
        // disable SSL validation of the CAS server
        phpCAS::setNoCasServerValidation();
        // logout from CAS
        
        phpCAS::logout(array('url'=>'https://'.$_SERVER['SERVER_NAME'].'/v3/'));
    }

}
