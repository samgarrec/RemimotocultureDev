
<!DOCTYPE html>

<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta name=viewport content="width=device-width, initial-scale=1">

    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <meta name="keywords" content=""/>
    <meta name="description" content=""/>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Abel|Gloria+Hallelujah" rel="stylesheet">
    <link href="http://fonts.googleapis.com/css?family=Cookie" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Cinzel|Quicksand|Satisfy&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Amatic+SC|Liu+Jian+Mao+Cao&display=swap" rel="stylesheet">
    <!-- Latest compiled and minified CSS  Bootstrap-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css"
          integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap-theme.min.css"
          integrity="sha384-6pzBo3FDv/PJ8r2KRkGHifhEocL+1X2rVCTTkUfGk7/0pbek5mMa1upzvWbrUbOZ" crossorigin="anonymous">

    <link href="https://fonts.googleapis.com/css?family=Comfortaa&display=swap" rel="stylesheet">

    <!-- Latest compiled and minified JavaScript -->
    <link rel="stylesheet" href="assets/css/responsiveslide.css">
    <link href="assets/css/loader.css" rel="stylesheet" type="text/css" media="all"/>

    <link rel="stylesheet" href="assets/css/footer-distributed-with-address-and-phones.css">
    <link href="assets/css/style.css" rel="stylesheet" type="text/css" media="all"/>
    <link href="assets/animate.css" rel="stylesheet">
    <script src="https://unpkg.com/scrollreveal"></script>
</head>

<body>
<div class="container-fluid">

    <div class="lds-facebook" none"><div></div><div></div><div></div></div><div class="block_mock_nav"></div>
<header>
    <div class="brand_space">

        <div class="brand_name"> Rémi Motoculture</div>
        <div class="brand_slogan"> Matériel parcs<span class="white" > &</span> jardins</div>
        <div class="tel"  ><a href="tel:0297302640">0297435654</a> </div>
        <div class="adresse" >ZI du Moustoir, axe Auray/ Belz, 56950 Crac'h</div>

</div>

    <div class="icons_bar">
        <img src="assets/images/tronconneuse.png" class="icon_header">

        <img src="assets/images/tondeuse.png" class="icon_header">
        <img src="assets/images/outils.png" class="icon_header">




    </div>
    <div class="ham_menu">
    <span class="navTrigger">
                <i></i>
                <i></i>
                <i></i>
            </span>
    </div>

    <div class="right"></div>
    <nav>



        <div id="menu">
            <ul class="navigation_wrapper">
                <a href="#" title="">  <li class="navigation_item nav_1" >Accueil</li></a>
                <a href="#" title=""> <li class="navigation_item nav_2">Nos Produits</li></a>
               <a href="#" title="">  <li class="navigation_item nav_3">À propos</li></a>
                <a href="#" title=""> <li class="navigation_item nav_4">Contact et Adresse</li></a>
            </ul>
        </div>


    </nav>

</header><div class="diaporamma_container">

        <div class="text_diapo1" data-in-effect="rollIn">Une équipe à votre écoute</div>
        <div class="text_diapo2">Du matériel performant</div>


    </div>
    <div class="container_menu_card">
        <div class="carte">
            <span class="icon icon-key imgcol2"></span>

            <div class="title">
                <h2>Réparation&Entretien</h2>
                <span class="imgcol"></span>
            </div>
            <p>Pensez à réviser votre matériel régulierement
                cela permettra d'allonger sa durée de vie<br/>
                Nous controlons et assurons les réparation sure toutes les marques de matériel de jardin.
                Still,Vickin, Jhon.</p></div>
        <div class="carte">
            <span class="icon icon-key imgcol2"></span>
            <div class="title">

                <h2>Ventes Articles De Motoculture</h2>
                <span class="imgcol "></span>
            </div>
            <p>Oleo MAc, Dolmar,Stiga,Yamatsu Rémi Motoculture vous propose De nombreux produits séléctionnés pour
                leur excellente fiabilité.
                à la Vente:<br/>Tondeuse AUtoportées, Débroussailleuse, taille haies, une large gammes de produits
                est proposée pour l'entretien de votre jardin
            </p></div>

        <div class="carte">
            <span class="icon icon-key imgcol2"></span>

            <div class="title">
                <h2>Carburants et Lubrifiants</h2>
                <span class=" imgcol  "></span>
            </div>
            <p>Tout une Gamme de carburants,et lubrifiant
                pour alimenter vos Appareils et les conserver
                leurs performances</p></div>


    </div>
    <?php
    $dirMarques = scandir('assets/images/marques');
    $longueur = count($dirMarques);
    unset($dirMarques[0]);
    unset($dirMarques[1]);


    ?>

    <div class="container_main">



        <?php include('slide.html'); ?>
        <div class="container_marques">
            <h2>Réparation toutes Marques</h2>


            <?php


            foreach ($dirMarques as $file) {

                print '<a href="#" class="images_marques"><img  alt="image_logo_'.$file.'" title="image_'.$file.'" src="assets/images/marques/' . $file . '" class="img_container_marques"></a>';
            }


            ?>


        </div>

        <img src="assets/images/sep.png" class="sep" />

    </div>
    <div class="bloc_equipe">




        <h1 id="banderoleteam">Une équipe à votre écoute</h1>
        <img src="assets/images/remi.jpg" id="remi" title="photo-gérant" alt="photo-Rémi"/>
        <img src="assets/images/jean.jpg" id="jean" title="photo-gérant2" alt="photo-Jean"/>
        <p>Installés depuis 7 ans sur la zone du Moustoir, Rémi Prado et son frère Jean Lelin proposent à la vente une
            large gamme de matériels pour parcs et jardins. Les jeunes Alréens, qui travaillent dans le domaine de
            la motoculture depuis déjà 19 et 15 ans,
            proposent aujourd'hui des matériels performants pour les particuliers autant que pour les professionnels.

            « Nous travaillons notamment avec les saisonniers et nous déplaçons dans tout <strong>le pays
                d'Auray</strong> tout en pratiquant des prix très compétitifs », indique Rémi Prado qui distribue des
            marques de motoculture de renom (comme yamatsu, Makita, Dolmar ou Castel Garden).

            Dans leur vaste atelier qui jouxte le magasin du Moustoir, les spécialistes effectuent aussi <strong>l'entretien
                et les réparations toutes marques.</stong>

        </p>

    </div>
    <div  class="container_produit">
        <div class="extratitre"><p>Des machines répondant à vos besoins</p></div>
        <div class="produitsExtra"><h3>Taille Haie Professionnel Oleo Mac</h3></div>
        <div class="produitsExtra"><h3>Tracteur Tondeuse  Castelgarden</h3>



        </div>


        <?php
        /*
        spl_autoload_register(function ($class){

            require 'classes/'.$class.'.php';
        });
        $pm= new ProduitManager();

        $prod=$pm->get(3);

         */
        ?>

        <a href="#"> <div class="produitsExtra"><h3>Débroussailleuse Maruyama</h3></div></a>




        <h2>Scarificateur, Tondeuse Mulching, Taille-haie</h2>
        <span>Découvrez les produits de qualité sélectionnés
			pour un entretien optimal de votre jardin</span><br> <a href="#" class="button">Nos Produits</a>
    </div>
    <footer>

        <div class="footer-left footer-box">
            <p>Footer left</p>



        </div>

        <div class="footer-center footer-box">

            <p>Footer center</p>


        </div>

        <div class="footer-right footer-box">

            <p>footer right</p>

        </div>

    </footer>





</div>


</body>
<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
<script src="//code.jquery.com/mobile/1.5.0-alpha.1/jquery.mobile-1.5.0-alpha.1.min.js"></script>
<script src="assets/jquery.lettering.js"></script>
<script src="assets/jquery.textillate.js"></script>

<script>


    $(function() {


        $('.lds-facebook').css('display','none');
        console.log('bonjout normalement le loader à disparu' );

    })

</script>

<script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"
        integrity="sha384-aJ21OjlMXNL5UyIl/XNwTMqvzeRMZH2w8c5cRVpzpU8Y5bApTppSuUkhZXN0VxHd" crossorigin="anonymous">

</script>
<script>


    $('body' ).on( "swipeleft",threshold = 650, swipeleftHandler );


    // Callback function references the event target and adds the 'swipeleft' class to it
    function swipeleftHandler( event ){

        if (window.matchMedia("(max-width: 960px)").matches) {
            $('nav').removeClass('slideRight');
            $('.navTrigger').removeClass('active');
        }

    }

    // Bind the swipeleftHandler callback function to the swipe event on div.box

    $('body' ).on( "swiperight",swiperightHandler );


    // Callback function references the event target and adds the 'swipeleft' class to it
    function swiperightHandler( event ){
        if (window.matchMedia("(max-width: 960px)").matches) {
            $('nav').addClass('slideRight');
            $('.navTrigger').addClass('active');
        }


    }

    if (window.matchMedia("(max-height: 424px)").matches) {
        $win=$(window);
        $h=$win.height();


        if($win.orientation=='landscape') {
            $('.navigation_item').css({
                paddingTop: '5px', // couleur rouge
                paddingBottom: '5px', // largeur de 300px
                fontSize: '15px',
            });


        }

    }


    // Bind an event to window.orientationchange that, when the device is turned,
    // gets the orientation and displays it to on screen.
    $( window ).on( "orientationchange", function( event ) {
        if(event.orientation=='portrait'){

            //  $( "#orientation" ).text( "This device is in " + event.orientation + " mode!" );
            $('.navigation_item').css({
                paddingTop : '15px', // couleur rouge
                paddingBottom : '15px', // largeur de 300px
                fontSize : '1em',
            });
        }
    });

    // You can also manually force this event to fire.


</script>
<script>$('.navTrigger').click(function () {
        $(this).toggleClass('active');



        $('nav').toggleClass('slideRight');

        $('.navigation_item a').addClass('white') ;

    });</script>

<script>
    $(window).on('resize', function(){
        var win = $(this); //this = window

        if (win.width() >= 960) { $('nav').removeClass('slideRight');
            $('.navTrigger').removeClass('active');

        }

    });</script>
<script src="assets/js/texteanim.js"></script>
<script src="https://unpkg.com/scrollreveal"></script>
<script>



    $('.navigation_item a').click(function () {

        $('nav').toggleClass('slideRight');
        $('.navTrigger').removeClass('active');

    });

    ScrollReveal().reveal('.images_marques');

</script>


<script>// Fonction pour coller la barre de navaigation en haut de la fenetre de navigation au scroll


    $(window).scroll(function() {
        var sticky = $('header'),
            scroll = $(window).scrollTop();
        console.log('ecko');
        if (scroll >= 20) {



            $('.diaporamma_container').addClass('margin_top-container');
            sticky.addClass('fixed');
        }
        else {
            sticky.removeClass('fixed');
            $('.diaporamma_container').removeClass('margin_top-container');





        }
    });




</script>



<script src="assets/js/responsiveSlides.js"></script>
<script>

    $(".rslides").responsiveSlides({
        auto: true,             // Boolean: Animate automatically, true or false
        speed: 500,            // Integer: Speed of the transition, in milliseconds
        timeout: 4000,          // Integer: Time between slide transitions, in milliseconds
        pager: false,           // Boolean: Show pager, true or false
        nav: false,             // Boolean: Show navigation, true or false
        random: false,          // Boolean: Randomize the order of the slides, true or false
        pause: false,           // Boolean: Pause on hover, true or false
        pauseControls: true,    // Boolean: Pause when hovering controls, true or false
        prevText: "Previous",   // String: Text for the "previous" button
        nextText: "Next",       // String: Text for the "next" button
        maxwidth: "",           // Integer: Max-width of the slideshow, in pixels
        navContainer: "",       // Selector: Where controls should be appended to, default is after the 'ul'
        manualControls: "",     // Selector: Declare custom pager navigation
        namespace: "rslides",   // String: Change the default namespace used
        before: function(){},   // Function: Before callback
        after: function(){}     // Function: After callback
    });

</script>

</html>