



$('body').on("swipeleft", threshold = 650, swipeleftHandler);


// Callback function references the event target and adds the 'swipeleft' class to it
function swipeleftHandler(event) {

    if (window.matchMedia("(max-width: 960px)").matches) {
        $('nav').removeClass('slideRight');
        $('.navTrigger').removeClass('active');
    }

}

// Bind the swipeleftHandler callback function to the swipe event on div.box

$('body').on("swiperight", swiperightHandler);


// Callback function references the event target and adds the 'swipeleft' class to it
function swiperightHandler(event) {
    if (window.matchMedia("(max-width: 960px)").matches) {
        $('nav').addClass('slideRight');
        $('.navTrigger').addClass('active');
    }


}

/*  if (window.matchMedia("(max-height: 424px)").matches) {
      $win=$(window);
      $h=$win.height();
      alert($h);


      if($win.orientation=='landscape') {
          $('.navigation_item').css({
              paddingTop: '5px', // couleur rouge
              paddingBottom: '5px', // largeur de 300px
              fontSize: '15px',
          });


      }

  }
*/

// Bind an event to window.orientationchange that, when the device is turned,
// gets the orientation and displays it to on screen.


// You can also manually force this event to fire.


$('.navTrigger').click(function () {
    $(this).toggleClass('active');


    $('nav').toggleClass('slideRight');

    $('.navigation_item a').addClass('white');

});
$(window).on('resize', function () {
    var win = $(this); //this = window

    if (win.width() >= 960) {
        $('nav').removeClass('slideRight');
        $('.navTrigger').removeClass('active');

    }

});



$('.navigation_item a').click(function () {

    $('nav').toggleClass('slideRight');
    $('.navTrigger').removeClass('active');

});

ScrollReveal().reveal('.images_marques');


// Fonction pour coller la barre de navaigation en haut de la fenetre de navigation au scroll


$(window).scroll(function () {
    var sticky = $('header'),
        scroll = $(window).scrollTop();
    console.log('ecko');
    if (scroll >= 20) {


        $('.diaporamma_container').addClass('margin_top-container');
        sticky.addClass('fixed');
    } else {
        sticky.removeClass('fixed');
        $('.diaporamma_container').removeClass('margin_top-container');


    }
});
