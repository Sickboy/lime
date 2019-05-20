/*
 * LimeSurvey
 * Copyright (C) 2007 The LimeSurvey Project Team / Carsten Schmitz
 * All rights reserved.
 * License: GNU/GPL License v2 or later, see LICENSE.php
 * LimeSurvey is free software. This version may have been modified pursuant
 * to the GNU General Public License, and as distributed it includes or
 * is derivative of works licensed under the GNU General Public License or
 * other free or open source software licenses.
 * See COPYRIGHT.php for copyright notices and details.
 * 
 * 
 * Description: Javascript file for templates. Put JS-functions for your template here.
 *  
 * 
 * $Id:$
 */


/*
 * The function focusFirst puts the Focus on the first non-hidden element in the Survey. 
 * 
 * Normally this is the first input field (the first answer).
 */
function focusFirst(Event)
{
	
	$('#limesurvey :input:visible:enabled:first').focus();

}
/*
 * The focusFirst function is added to the eventlistener, when the page is loaded.
 * 
 * This can be used to start other functions on pageload as well. Just put it inside the 'ready' function block
 */

/* Uncomment below if you want to use the focusFirst function */
/*
$(document).ready(function(){
	focusFirst();
});
*/



function correctPNG() // correctly handle PNG transparency in Win IE 5.5 & 6.
{
   var arVersion = navigator.appVersion.split("MSIE")
   var version = parseFloat(arVersion[1])
   if ((version >= 5.5) && (version<7) && (document.body.filters)) 
   {
      for(var i=0; i<document.images.length; i++)
      {
         var img = document.images[i]
         var imgName = img.src.toUpperCase()
         if (imgName.substring(imgName.length-3, imgName.length) == "PNG")
         {
            var imgID = (img.id) ? "id='" + img.id + "' " : "";
            var imgClass = (img.className) ? "class='" + img.className + "' " : "";
            var imgTitle = (img.title) ? "title='" + img.title + "' " : "title='" + img.alt + "' ";
            var imgStyle = "display:inline-block;" + img.style.cssText;
            if (img.align == "left") imgStyle = "float:left;" + imgStyle;
            if (img.align == "right") imgStyle = "float:right;" + imgStyle;
            if (img.parentElement.href) imgStyle = "cursor:hand;" + imgStyle;
            var strNewHTML = "<span " + imgID + imgClass + imgTitle
            + " style=\"" + "width:" + img.width + "px; height:" + img.height + "px;" + imgStyle + ";"
            + "filter:progid:DXImageTransform.Microsoft.AlphaImageLoader"
            + "(src='" + img.src + "', sizingMethod='scale');\"></span>" 
            img.outerHTML = strNewHTML
            i = i-1
         }
      }
   }    
}

$(document).ready(function(){

$('.answer-item').click(function(e){
	if ($(e.target).hasClass('answer-item')){
		if ( $(e.target).find('input').hasClass('checkbox')){
			 $(e.target).find('input').click();

		}
		$(e.target).find('input').click();
		
	}
	console.log("E",$(e),$(e.target),$(e.target).hasClass('answer-item'));
	
})
   
    var wwidth = ($(window).width()*0.2);
  
//$('body').css('background-position',($(window).width()/2) + 'px center');
 $('body').css("background-size",($(window).width()));
      //$('body').css("background-position",($(window).width())*80%+"px 0px");
      $('body').css("background-position",wwidth+"px 50px");
    $(window).resize(function(){
       //console.log("resize",$(window).width()); 
       wwidth = ($(window).width()*0.2);
    
      $('body').css("background-size",($(window).width()));
      //$('body').css("background-position",($(window).width())*80%+"px 0px");
      $('body').css("background-position",wwidth+"px 50px");
      
    });
setTimeout(
  function() 
  {
    var barw = $('#progressbar').attr('aria-valuenow');
    $('#umk-bar').css('width',barw+'%');
    $('#umk-bar p').html(barw+'%');
  }, 1);


$('textarea,.numeric input,.date input,.text-short input').attr('placeholder','Tekst w tym okienku.');
$('#ui-datepicker-div').addClass('umk-customui');
$('#moveprevbtn,#movenextbtn,#movesubmitbtn').attr('class','');
$('#moveprevbtn,#movenextbtn,#movesubmitbtn').find('.ui-button-icon-primary').attr('class','');
//console.log();


$('.radio-list .radio-item').click(function(e){
  
   $(e.target).find('input').attr('checked','checked');
});
$('.checkbox-list .checkbox-item, .checkbox-text-list .checkbox-text-item').click(function(e){
 
  if ($(e.target).find('input').attr('checked')){
      $(e.target).find('input').attr('checked',false);
  }else{
      $(e.target).find('input').attr('checked','checked');
  }
  
});

/*question array-flexible*/

$('.umk-question-wrapper').each(function(index,e){
 
  var helpheight = $(e).find('.umk-question-help').height();
  $(e).css('min-height',helpheight+10);
    if ($(e).find('.col-responses').length && $(e).attr('class').indexOf('array-flexible-duel-scale') == -1){
        
         if ($(e).attr('class').indexOf('array-10-pt') > 0 || $(e).attr('class').indexOf('array-5-pt') >0){
             $(e).find('.array1 th:first').replaceWith('<td>&nbsp</td>');
         }
        var childrenlength = $(e).find('.col-responses').children().length;
        
       
        var firstwidth= "40%";
        var restwidth = (60/($(e).find('.col-responses').children().length - 1)) + "%";
        $(e).find('.col-responses').children().each(function(il,el){
         
            $(el).attr('width',restwidth);
        });
        $(e).find('.col-responses').children().first().attr('width',firstwidth);
    
    //console.log($(e).find('.umk-question-answer table thead tr td').html());
    $(e).find('.umk-question-answer table thead tr td').html($(e).find('.umk-question-help').html().replace(/<img[^>]*>/g,""));
    //console.log($(e).find('.umk-question-help').html().replace(/<img[^>]*>/g,""));
    }else if ($(e).find('.col-responses').length && $(e).attr('class').indexOf('array-flexible-duel-scale')>0){
      
        
        $(e).find('.array1 th:first').replaceWith('<td>&nbsp</td>');
         $(e).find('.umk-question-answer table thead tr td:first').html($(e).find('.umk-question-help').html().replace(/<img[^>]*>/g,""));
         var iclass=1;
         $(e).find('.umk-question-answer table thead tr td:first').nextUntil('.header_separator').each(function(il2,el2){
                     $(el2).addClass('umk-dual-array'+((il2%6)+1));
                   
                    
         });
         $(e).find('.umk-question-answer table thead tr td.header_separator:first').nextUntil('.header_separator').each(function(il2,el2){
                     $(el2).addClass('umk-dual-array'+((il2%6)+1));
                   
                    
         });
         
         $(e).find('.umk-question-answer table tbody').children('tr').each(function(i6,e6){
             
             $(e6).find('.answertext').nextUntil('.dual_scale_separator').each(function(i5,e5){
                
                 $(e5).addClass('umk-dual-array'+((i5%6)+1));
             });
             $(e6).find('.dual_scale_separator:first').nextUntil('.dual_scale_separator').each(function(i5,e5){
                
                 $(e5).addClass('umk-dual-array'+((i5%6)+1));
             });
         });
//         $(e).children('.umk-question-answer table tbody tr th:first').each(function(e3){
//                     console.log($(e3).html());
//         });
//                 .each(function(el2){
//            console.log($(el2).html()); 
//         });
//         $(e).find('.umk-question-answer table tbody tr th:first').nextUntil('.dual_scale_separator').each(function(il2,el2){
//                     $(el2).addClass('umk-dual-array'+((il2%6)+1));
//                   
//                    
//         });
         
         
    }

});




});
