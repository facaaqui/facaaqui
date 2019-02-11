






<?php
session_start();
include '../Apllication/core/FacadePrincipal.php';
$mercados = $facadePrincipal->mercadoDTO()->findAllMercadoByIdUser(@$_SESSION['logedUserId']);
?>


<!DOCTYPE html>

<html lang="pt-br">

<head>

	<title>Editando anúncios</title>

	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' charset="utf-8" />

    <!-- style geral -->
    <link rel="stylesheet" href="faca_styles/css/facastyle.css">
    <!-- icons -->    
    <link rel="stylesheet" href="fonts/css/all.css">
    <!-- animations -->
    <link rel="stylesheet" href="faca_styles/css/animate.css">

</head>





<body>






	<!-- =================== HEADER =================== -->

   		 <?php include 'includes/header.php'; ?>

	<!-- =================== END HEADER =================== -->















	<!-- =================== IMAGENS EMPRESA =================== -->

	

	<div class="container-fluid boxPaiForeach">

		<div class="row justify-content-center empresasimagens">

			<?php foreach ($mercados as $m){ ?>

			<div class="col-auto">


				<div class="paiContainer rotacaoManual">

					<div class="boximgPai">

						<div  class="allboxs">

							<!-- =================== BEGIN FRONT =================== -->

							<div class="boxf">

								<div class="cover">

									<!-- =================== IMAGEM 1 =================== -->

									<a class="imagensEmpresasHover" href="detalhes.php?idMercado=<?php echo $m->id ?>&p"> <img class="imgempresa img-fluid" src="../FaReservaBack/Pages/img/Colaboradores/<?php echo $m->foto ?>" /> </a>

								</div>


								<!-- =================== FOOTER =================== -->

								<div class="container">

									<div class="row ">

										<div class="boxffo text-center clearfix px-2">

											<a href="anunciar.php?p&idMercado=<?php echo $m->id ?>"> <span class="float-left boxffolo"> <i class="fas fa-edit boxffoicont"> </i> <span class=""> Editar </span> </span>  </a> 

											

											<button class="fbtni float-right" onclick="rotateMae(this)"> Ver mais </button>

										</div>

									</div>

								</div>

							</div>

							<!-- =================== THE END FRONT =================== -->




							<!-- =================== BEGIN BACK =================== -->

							<div class="boxt">

								<div class="boxthdr">

									<!-- =================== TITLE DA EMPRESA =================== -->

									<h1 class="boxthdrt"> <?php echo $m->nome ?> </h3>

								</div>


								<!-- =================== CONTENT =================== -->

								<div class="content text-center">


									<!-- =================== INORMATION =================== -->

									<p class="boxtinfo">

										<i class="fas fa-home mr-1 mb-2 iconcor"> </i> <span class="textFooter mr-2"> <?php echo $m->bairro ?> </span> <br>

										<i class="fas fa-mobile-alt mr-1 mb-2 iconcor"> </i> <span class="textFooter  mr-2"> <?php echo $m->telefone ?> </span> <br>

										<i class="fas fa-door-open mr-1 mb-2 iconcor"> </i> <span class="textFooter  mr-2"> Das 08h às 22h </span> <br>

									</p>


								</div>


								<!-- =================== FOOTER =================== -->

								<div class="boxfoot clearfix px-2">

									<!-- =================== BUTTON VOLTAR =================== -->

									<button class="fbtni float-left " onclick="rotateMae(this)"> <i class="fa fa-reply text-white"> </i> Voltar </button>

									<!-- =================== LINKS REDES SOCIAIS =================== -->


									<a href="https://www.facebook.com/" class="float-right fbtnr" rel="tooltip" title="Tenha mais informação"> <i class="fab fa-facebook-f boxfooticont "> </i> </a>
									<a href="https://www.facebook.com/" class="float-right fbtnr mr-2" rel="tooltip" title="Tenha mais informação"> <i class="fab fa-facebook-f boxfooticont "> </i> </a>

								</div>



								<!-- =================== THE END FOOTER =================== -->

							</div> <!-- END BACK -->


						</div> <!-- ALLBOX -->

					</div> <!-- BOXPAI -->
                                
				</div> <!-- PAICONTAINER ROTACION -->
						
			</div> <!-- COL-AUTO -->

			<?php } ?>  <!-- END FOREACH --> 

		</div> <!-- EMPRESAS IMAGENS -->      

	</div> <!-- END C.FLUID -->

	
<!-- =================== END IMAGENS EMPRESA =================== -->















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






	<!--================================
      FUNTION ROTATION IMAGEM EMPRESAS
	==================================-->

	<script type="text/javascript">
		$().ready(function () {
			$('[rel="tooltip"]').tooltip();

		});

		function rotateMae(btn) {
			var $mae = $(btn).closest('.paiContainer');
			console.log($mae);
			if ($mae.hasClass('hover')) {
				$mae.removeClass('hover');
			} else {
				$mae.addClass('hover');
			}
		}
	</script>

	<script>
		(function (i, s, o, g, r, a, m) {
			i['GoogleAnalyticsObject'] = r; i[r] = i[r] || function () {
				(i[r].q = i[r].q || []).push(arguments)
			}, i[r].l = 1 * new Date(); a = s.createElement(o),
				m = s.getElementsByTagName(o)[0]; a.async = 1; a.src = g; m.parentNode.insertBefore(a, m)
		})(window, document, 'script', '//www.google-analytics.com/analytics.js', 'ga');

		ga('create', 'UA-46172202-4', 'auto');
		ga('send', 'pageview');

	</script>

	<!--================================
	 END FUNTION ROTATION IMAGEM EMPRESAS
	==================================-->

</body>

</html>


