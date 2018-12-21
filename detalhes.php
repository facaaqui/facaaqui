<?php
session_start();
include 'Apllication/core/FacadePrincipal.php';
$mercados = $facadePrincipal->mercadoDTO()->findAllMercadoById($_GET['idMercado']);

//echo $mercados[0]->foto2;
//die();
 ?>
<!DOCTYPE html>

<html lang="zxx">

    <head>
        
        <title>Faça Aqui</title>
            <!--/tags -->
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="keywords" content="Grocery Shoppy Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
        Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
        
        
            
        <script>
            
            addEventListener("load", function () {
                  setTimeout(hideURLbar, 0);
                }, false);

                function hideURLbar() {
                    window.scrollTo(0, 1);
                    }
        </script>
        
        <!--//tags -->
        
        <link href="css1/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
        <link href="css1/style.css" rel="stylesheet" type="text/css" media="all" />
        <link href="css1/font-awesome.css" rel="stylesheet">
        <!--pop-up-box-->
        <link href="css1/popuo-box.css" rel="stylesheet" type="text/css" media="all" />
        <!--//pop-up-box-->
        <!-- price range -->
        <link rel="stylesheet" type="text/css" href="css1/jquery-ui1.css">
        <!-- flexslider -->
        <link rel="stylesheet" href="css1/flexslider.css" type="text/css" media="screen" />
        <!-- fonts -->
        <link href="//fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800" rel="stylesheet">


        <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600" rel="stylesheet">
        <link rel="stylesheet" href="fonts/beyond_the_mountains-webfont.css" type="text/css"/>
        <!-- Stylesheets -->
        <link href="plugin-frameworks/bootstrap.min.css" rel="stylesheet">
        <link href="plugin-frameworks/swiper.css" rel="stylesheet">
        <link href="fonts/ionicons.css" rel="stylesheet">
        <!--<link href="common/styles.css" rel="stylesheet"> <link rel="stylesheet" href="css/normalize.css">-->
        <link rel="stylesheet" href="css/main.css" media="screen" type="text/css">
        <link href='http://fonts.googleapis.com/css?family=Pacifico' rel='stylesheet' type='text/css'>
        <link href='http://fonts.googleapis.com/css?family=Playball' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" href="css/bootstrap.css">
        <link rel="icon" href="faviconF.ico" type="image/x-icon">
        <!--<link rel="stylesheet" href="css/style-portfolio.css">-->
        <!--<link rel="stylesheet" href="css/picto-foundry-food.css" />-->
        <!--<link rel="stylesheet" href="css/jquery-ui.css">-->
        <!--<meta name="viewport" content="width=device-width, initial-scale=1.0">-->
        <!--<link href="css/font-awesome.min.css" rel="stylesheet">-->
        <!--<link rel="icon" href="favicon-1.ico" type="image/x-icon">-->


        <style>
            
            body{
                 background: url('images/IMGS/IMG DIV SITE-19.jpg')
                }

                .corPreta{
                    color: #000!important;
                }

        </style>
        
    </head>

    <!--================================
            INICIO DOCUMENTO GERAL
    ==================================-->
    
    <body>
        
        <!-- header-bot-->
        <?php include './includes/header.php'; ?>  <br>
        
        
            <div class="header-bot">
                
                <div class="header-bot_inner_wthreeinfo_header_mid">
                    <!-- header-bot-->

                    <!-- header-bot -->
                    <div class="col-md-8 header">

                    </div>
                    
                    <div class="clearfix"></div>
                    
                </div>
                
            </div>
        
            <!-- shop locator (popup) -->
            <!-- Button trigger modal(shop-locator) -->
            <!-- Single Page -->
            
            <div class="banner-bootom-w3-agileits">
                
                <div class="container">
                    
                    <!-- tittle heading -->
                    <!-- <h3 class="tittle-w3l"><?php #echo $mercados[0]->nome ?>
                    <span class="heading-style">
                    <i></i>
                    <i></i>
                    <i></i>
                    </span>
                    </h3>-->
                    <!-- //tittle heading -->
                     
                    <div class="col-md-5 single-right-left ">       <!--  -->
                        
                        <div class="grid images_3_of_2">          <!--  -->
                            
                            <div class="flexslider">             <!--  -->
                                
                                <ul class="slides">
                                    
                                    <li style="border:2px solid red" red data-thumb="FaReservaBack/Pages/img/Colaboradores/<?php echo $mercados[0]->foto1 ?>">
                                    <div class="thumb-image">
                                    <img src="FaReservaBack/Pages/img/Colaboradores/<?php echo $mercados[0]->foto1 ?>" data-imagezoom="true" class="img-responsive" alt=""> </div>
                                    </li>
                                    
                                    <li data-thumb="FaReservaBack/Pages/img/Colaboradores/<?php echo $mercados[0]->foto2 ?>">
                                    <div class="thumb-image">
                                    <img src="FaReservaBack/Pages/img/Colaboradores/<?php echo $mercados[0]->foto2 ?>" data-imagezoom="true" class="img-responsive" alt=""> </div>
                                    </li>
                                    
                                    <li data-thumb="FaReservaBack/Pages/img/Colaboradores/<?php echo $mercados[0]->foto3 ?>">
                                    <div class="thumb-image">
                                    <img src="FaReservaBack/Pages/img/Colaboradores/<?php echo $mercados[0]->foto3 ?>" data-imagezoom="true" class="img-responsive" alt=""> </div>
                                    </li>
                                    
                                </ul>
                                
                                <div class="clearfix">         <!--  -->
                                    
                                </div>

                            </div>
                            
                        </div>
                        
                    </div>
                    
                    <div class="col-md-7 single-right-left simpleCart_shelfItem">           <!--  -->
                        
                        <h3><?php echo $mercados[0]->nome  ?></h3>
                        <span class="">Telefone:<?php echo $mercados[0]->telefone  ?></span>   <br>
                        <span class="">Email:<?php echo $mercados[0]->email  ?></span>     <hr>
                        
                    </div>
                    
                    <p class="corPreta">  </p>
                    
                    <div class="single-infoagile">           <!--  -->
                        
                        <ul>
                            
                            <li class="corPreta">
                            <?php  echo $mercados[0]->infoAdd ?><br>
                            </li>

                       </ul>
                        
                    </div>
                    
                </div>

            </div>
            
            <!-- //Single Page -->
            <!-- footer -->
            <?php include './includes/footer.php'; ?>
            <!-- //footer -->

            <!-- js-files -->
            <!-- jquery -->
            <script src="js/jquery-2.1.4.min.js"></script>
            <!-- //jquery -->

            <!-- popup modal (for signin & signup)-->
            <script src="js/jquery.magnific-popup.js"></script>
            
            <script>
                    $(document).ready(function () {
                            $('.popup-with-zoom-anim').magnificPopup({
                                    type: 'inline',
                                    fixedContentPos: false,
                                    fixedBgPos: true,
                                    overflowY: 'auto',
                                    closeBtnInside: true,
                                    preloader: false,
                                    midClick: true,
                                    removalDelay: 300,
                                    mainClass: 'my-mfp-zoom-in'
                            });

                    });
            </script>
            
            <!-- Large modal -->
            <!-- <script>
                    $('#').modal('show');
            </script> -->
            <!-- //popup modal (for signin & signup)-->

            <!-- cart-js -->
            
            <script src="js/minicart.js"></script>
            
            <script>
                    paypalm.minicartk.render(); //use only unique class names other than paypal1.minicart1.Also Replace same class name in css and minicart.min.js

                    paypalm.minicartk.cart.on('checkout', function (evt) {
                            var items = this.items(),
                                    len = items.length,
                                    total = 0,
                                    i;

                            // Count the number of each item in the cart
                            for (i = 0; i < len; i++) {
                                    total += items[i].get('quantity');
                            }

                            if (total < 3) {
                                    alert('The minimum order quantity is 3. Please add more to your shopping cart before checking out');
                                    evt.preventDefault();
                            }
                    });
            </script>
            
            <!-- //cart-js -->

            <!-- password-script -->
            
            <script>
                    window.onload = function () {
                            document.getElementById("password1").onchange = validatePassword;
                            document.getElementById("password2").onchange = validatePassword;
                    }

                    function validatePassword() {
                            var pass2 = document.getElementById("password2").value;
                            var pass1 = document.getElementById("password1").value;
                            if (pass1 != pass2)
                                    document.getElementById("password2").setCustomValidity("Passwords Don't Match");
                            else
                                    document.getElementById("password2").setCustomValidity('');
                            //empty string means no validation error
                    }
            </script>
            
            <!-- //password-script -->

            <!-- smoothscroll -->
            <script src="js/SmoothScroll.min.js"></script>
            <!-- //smoothscroll -->

            <!-- start-smooth-scrolling -->
            <script src="js/move-top.js"></script>
            <script src="js/easing.js"></script>
            
            <script>
                    jQuery(document).ready(function ($) {
                            $(".scroll").click(function (event) {
                                    event.preventDefault();

                                    $('html,body').animate({
                                            scrollTop: $(this.hash).offset().top
                                    }, 1000);
                            });
                    });
            </script>
            
            <!-- //end-smooth-scrolling -->

            <!-- smooth-scrolling-of-move-up -->
            
            <script>
                    $(document).ready(function () {
                            /*
                            var defaults = {
                                    containerID: 'toTop', // fading element id
                                    containerHoverID: 'toTopHover', // fading element hover id
                                    scrollSpeed: 1200,
                                    easingType: 'linear' 
                            };
                            */
                            $().UItoTop({
                                    easingType: 'easeOutQuart'
                            });

                    });
            </script>
            
            <!-- //smooth-scrolling-of-move-up -->

            <!-- imagezoom -->
            <script src="js/imagezoom.js"></script>
            <!-- //imagezoom -->

            <!-- FlexSlider -->
            <script src="js/jquery.flexslider.js"></script>
            
            <script>
                    // Can also be used with $(document).ready()
                    $(window).load(function () {
                            $('.flexslider').flexslider({
                                    animation: "slide",
                                    controlNav: "thumbnails"
                            });
                    });
            </script>
            
            <!-- //FlexSlider-->

            <!-- flexisel (for special offers) -->
            <script src="js/jquery.flexisel.js"></script>
            
            <script>
                    $(window).load(function () {
                            $("#flexiselDemo1").flexisel({
                                    visibleItems: 3,
                                    animationSpeed: 1000,
                                    autoPlay: true,
                                    autoPlaySpeed: 3000,
                                    pauseOnHover: true,
                                    enableResponsiveBreakpoints: true,
                                    responsiveBreakpoints: {
                                            portrait: {
                                                    changePoint: 480,
                                                    visibleItems: 1
                                            },
                                            landscape: {
                                                    changePoint: 640,
                                                    visibleItems: 2
                                            },
                                            tablet: {
                                                    changePoint: 768,
                                                    visibleItems: 2
                                            }
                                    }
                            });

                    });
            </script>
            
            <!-- //flexisel (for special offers) -->

            <!-- for bootstrap working -->
            <script src="js/bootstrap.js"></script>
            <!-- //for bootstrap working -->
            <!-- //js-files -->

    </body>

</html>

