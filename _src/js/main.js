/*=========================================================================================
// INICIO MAIN JS
========================================================================================= */





jQuery(function($) {
	$(document).ready(function() {

/*//$("input[type=checkbox]").css({'width':'60px', 'height':'50px'});
if( $("input[type=checkbox]").prop( "checked" ) ) {
  alert('ok');
}*/
/*
var countChecked = function() {
  var n = $( "input:checked" ).length;
  //$( ".Section-subSection-header-title" ).text( n + (n === 1 ? " is" : " are") + " checked!" );
  //alert('checked');
  if( n > 0 ) {
    $(this).closest('div._row').addClass('active');
  } else {
    $(this).closest('div._row').removeClass('active'); 
  }
};
countChecked();
 
$( "input[type=checkbox]" ).on( "click", countChecked );*/

$("input[type=checkbox]").change(function() {
    if(this.checked) {
        $(this).closest('div._row').addClass('active');
    } else {
         $(this).closest('div._row').removeClass('active'); 
    }
});


//=======================================================
//Aplica a animação no scroll mediante clique no menu
//=======================================================



    $(".u-isScrollDown").click(function(event){        
        event.preventDefault();
        
       

        $('html,body').animate({scrollTop:$(this.hash).offset().top - 0}, 1000);

          if ($(".Navigation--main").hasClass('u-isExpanded')){
            $("#MainNavigation-container, .NavigationButton.NavigationButton--main").removeClass("u-isExpanded")
            $("#MainNavigation-container, .NavigationButton.NavigationButton--main").addClass("u-isCollapsed");  
         }
        
        varHash = $(this).attr('href');

        
        /*if (location.hash == varHash) {
            $(this).addClass('u-isActive');
        } else {
            $(this).removeClass('u-isActive');
        }*/
        
        if(history.pushState) {
        
            history.pushState(null, null, varHash);
        
        }
        else {
        location.hash = '#myhash';
        window.location.hash = varHash;
        }

        
   });




$(function(){
      $.stellar({
        horizontalScrolling: false,
        verticalOffset: 40
      });
    });



// /*=========================================================================================
// // CLOSE FUNCTION
// =========================================================================================*/

	});
});



// Abre o Lightbox
function LightboxCall(iFrame) {
  //alert( "clicked" );
  jQuery('#Lightbox--container').removeClass('Lightbox--inactive');
  jQuery('#Lightbox--container').addClass('Lightbox--active');
  //$('.Lightbox-window-content').load( 'page-clean.php' );
}
//$( ".LightboxCall" ).on( "click", LightboxCall );


// Fecha o lightbox quando a tecla ESC é pressionada
function KeyUpEsc(evt) {
 
 if (evt.keyCode == 27) {
       jQuery('#Lightbox--container').removeClass('Lightbox--active');
       jQuery('#Lightbox--container').addClass('Lightbox--inactive');
       //$('.Lightbox-window-content').html( '' );
    }
}

jQuery(document).on( "keyup", KeyUpEsc );

// Mais formas de Fechar o LightBox

function LightboxClose() {
  //alert( "clicked" );
  jQuery('#Lightbox--container').removeClass('Lightbox--active');
   jQuery('#Lightbox--container').addClass('Lightbox--inactive');
   //$('.Lightbox-window-content').html( '' );
}

jQuery( ".LightboxClose" ).on( "click", LightboxClose );


