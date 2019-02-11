<?php
session_start();
include '../Apllication/core/FacadePrincipal.php';
$mercados = $facadePrincipal->mercadoDTO()->findAllMercadoById($_GET['idMercado']);

 ?>





<!DOCTYPE html>


<html lang="en">


<head>

     <title>Detalhes</title>

    <meta charset="UTF-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0"> 
	<meta name="description" content="Pesquisas Compras e Vendas" />
	<meta name="keywords" content="Pesquisas Compras e Vendas" />
	<meta name="Consulvision" content="" />


    <!-- style geral -->
    <link rel="stylesheet" href="faca_styles/css/facastyle.css">
    <!-- icons -->    
    <link rel="stylesheet" href="fonts/css/all.css">
    <!-- animations -->
    <link rel="stylesheet" href="faca_styles/css/animate.css">
   

</head>





<body class="bg-blue">


    
	
    <!-- ====================== ALL NAV-MENU ====================== -->

                 <!-- <?php include './includes/header.php'; ?> -->

    <!-- ====================== THE END NAV-MENU ====================== -->



    <div class="container-fluid dthPai">

        <div class="container ">

            <!-- =================== CAROUSEL =================== -->

            <section class="dthMae wow bounceInUp animated " data-wow-delay="0.5s">
  
                    <div class="row mb-1 ">

                        <div class="dth p-2">

                            <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">

                                <ul class="nav">

                                    <li class="nav-item"> <a href="../index.php" title="Voltar"> <i class="fas fa-chevron-circle-left iback mr-2"> <span class="dthhdr"> Voltar </span> </i>  </a> </li>

                                </ul>

                            </div>

                        </div>

                    </div>


                    <div class="row p-2 dthBoxAll">

                    <div id="publ" class="carousel slide col-12 col-sm-12 col-md-12 col-lg-12 col-xl-6 " data-ride="carousel">

                        <!-- =================== INDICADORES =================== -->

                        <ol class="carousel-indicators indicadoresCarousel">

                            <li class="indicadoresCarouselItems" data-target="#publ" data-slide-to="0" class="active"></li>
                            <li class="indicadoresCarouselItems" data-target="#publ" data-slide-to="1"></li>
                            <li class="indicadoresCarouselItems" data-target="#publ" data-slide-to="2"></li>

                        </ol>

                        <!-- =================== INDICADORES =================== -->

                        <div class="carousel-inner">

                            <div class="carousel-item  active ">

                                <img class="d-block w-100 " src="../FaReservaBack/Pages/img/Colaboradores/<?php echo @$mercados[0]->fotoUm; ?>" alt="First slide">

                            </div>

                            <div class="carousel-item ">

                                <img class="d-block w-100 img-fluid" src="../FaReservaBack/Pages/img/Colaboradores/<?php echo @$mercados[0]->fotoDois; ?>" alt="Second slide">

                            </div>

                            <div class="carousel-item ">

                                <img class="d-block w-100 img-fluid" src="../FaReservaBack/Pages/img/Colaboradores/<?php echo @$mercados[0]->fotoTres; ?>" alt="Third slide">

                            </div>

                        </div>

                    </div>


                    <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-6 dthInfoAll">

                        <h2 class="pt-2 dtht"> <i class="fas fa-utensils mr-2"> </i> <?php echo @$mercados[0]->nome ?> </h2>

                        <p class="text-justify mt-3 dthInfodisc"> <?php echo @$mercados[0]->infoAdd ?> </p>


                    </div>

                </div>


                <div class="row mt-1 ">

                    <div class="dthf p-2">

                        <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">

                            <ul class="nav justify-content-around">

                                <li class="nav-item">
                                    <i class="fas fa-map-marker-alt mr-1 mb-2 dthif"> </i> <span class="dthtf  mr-2"> Angola - <?php echo @$mercados[0]->provincia ?> <?php echo @$mercados[0]->Bairro ?> </span>
                                </li>

                                <li class="nav-item">
                                    <i class="fas fa-door-open mr-1 mb-2 dthif"> </i> <span class="dthtf  mr-2"> Das 08h às 22h </span>
                                </li>

                                <li class="nav-item">
                                    <i class="fas fa-envelope mr-1 mb-2 dthif"></i> <span class="dthtf  mr-2"> <?php echo @$mercados[0]->email ?> </span> 
                                </li>

                                <li class="nav-item">
                                    <i class="fas fa-mobile-alt mr-1 mb-2 dthif"></i> <span class="dthtf  mr-2"> <?php echo @$mercados[0]->telefone ?> </span>
                                </li>

                                <li class="nav-item">
                                    <i class="fab fa-facebook-f mr-1 mb-2 dthif"></i> <a href="https://www.facebook.com/" class=""> <span class="dthtf  mr-2"> Visita-nos </span> </a> 
                                </li>

                            </ul>

                        </div>

                    </div>

                </div>


            </section>

            <!-- =================== THE END SECTION  CAROUSEL =================== -->

        </div>

    </div>







    

	<!-- =================== FOOTER =================== -->

            <?php include 'includes/footer.php'; ?>

    <!-- =================== THE END FOOTER =================== -->













 
	<!--================================
                  FAÇA LINKS
	==================================-->

	<script src="faca_styles/jquery/jquery-1.10.2.js" type="text/javascript"></script>
	<script src="faca_styles/js/bootstrap.js"></script>

	<!--================================
	          END FAÇA LINKS
	==================================-->


</body>

</html>

