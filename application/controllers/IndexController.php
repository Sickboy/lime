<?php


class IndexController extends LSYii_Controller
{

    function actionindex()
    {
        if (Yii::app()->user->id != NULL)
            {
                header("Location: ".$this->createUrl('admin/')."");
                die();
            }

        echo '<nav class="navbar navbar-xs bg-light" style="margin-top: -50px;"  >
        <a class="navbar-brand" href="#">System Badań Ankietowych</a>
      </nav>';

        echo '<div class="container-fluid welcome">
        <div class="row text-center">';

        echo '<br><br><link href="https://getbootstrap.com/docs/4.0/examples/sticky-footer/sticky-footer.css" rel="stylesheet">';
        echo '<a href="'.$this->createUrl('admin/').'" class="btn btn-default btn-lg"><i class="fa fa-sign-in"></i>&nbspLogowanie UMK</a><br>
            <a href="#modalLoginGuest" data-toggle="modal" class="btn btn-default btn-lg"><i class="fa fa-sign-in"></i>&nbspLogowanie Gości</a>';
        
        echo '<div id="modalLoginGuest" class="modal fade" role="dialog">
                <div class="modal-dialog">
                    <!-- Modal content-->
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                <div class="h3 modal-title">Logowanie gości</div>
                            </div>
                        <div class="modal-body">';
                            echo CHtml::form(array('admin/authentication/sa/login'), 'post', array('id'=>'loginform', 'name'=>'loginform'));
                            echo "<input type='hidden' name='action' value='login' /><input type='hidden' id='width' name='width' value='' /> ";
                            echo CHtml::tag('span', array(), "<label for='user'>".gT("Username")."</label>".CHtml::textField('user', '', array('size'=>40, 'maxlength'=>40, 'class'=>"form-control")))."<br>";
                            echo CHtml::tag('span', array(), "<label for='password'>".gT("Password")."</label>".CHtml::passwordField('password', '', array('size'=>40, 'maxlength'=>40, 'class'=>"form-control")))."<br>";
                            echo "<center><button type='submit' class='btn btn-default' name='login_submit' value='login'>".gT('Log in')."</button></center><br />";
                            echo "<a href='".$this->createUrl('admin/authentication/sa/forgotpassword')."'>".gT("Forgot your password?")."</a>";
        echo '          </div>
                    </div>
                </div>
            </div></div>';
            echo "<div class='row ' >
            <div style='margin-left: 25; margin-right: 25;'>
            <br><u><b>Logując się akceptujesz regulamin korzystania z systemu:</b></u><br>
            <ol>
            <li>Z systemu badań ankietowych może korzystać każda osoba posiadająca konto na serwerach UMK.</li>
            <li>Administrator systemu odpowiada za techniczne działanie systemu ankietowego. </li>
            <li>Każdy użytkownik logujący się i korzystający z systemu ankietowego odpowiada merytorycznie za stworzoną przez siebie zawartość, w tym:</li>
            <ul><li>treść ankiet i pytań do nich dołączonych,</li>
            <li>tokeny  dodane do ankiet oraz dane w nich zawarte (np. imię, nazwisko, adres email respondentów),</li>
            <li>wysyłane wiadomości e-mail za pośrednictwem systemu ankietowego.</li>
            </ul>
            <li>Administrator może pomóc w tworzeniu ankiety na prośbę innego użytkownika systemu, jednak odpowiedzialność za jej zawartość (pkt.3) pozostaje w gestii innego użytkownika systemu, który wnioskuje o pomoc.</li>
            <li>Wszystkie czynności użytkownika w systemie są logowane i zapisywane. </li></ol>
            W razie problemów lub pytań proszę kontaktować się poprzez email lub telefonicznie: 
            <ul><li><a href='mailto:ankiety@umk.pl'>ankiety@umk.pl</a></li>
            <li>56 611 4969</li>
            </ul><br><br><br>
            </div></div>";
        
        echo '<footer class="footer text-center">';
            echo "<a href='mailto:ankiety@umk.pl'>".gT("Pomoc techniczna")."</a>";
        echo  '</footer>';


        
        //echo Yii::app()->user->id;

        $oSurvey = Survey::model()->findByPk(1);
        $aSurveyInfo['include_content'] = 'optin';
        $aSurveyInfo['optin_message'] = 'aaa';
        Yii::app()->twigRenderer->renderTemplateFromFile(
            "layout_index.twig",
            array(
                'aSurveyInfo' => $aSurveyInfo
            ),
            false
        );  
        
    }


}
