




<?php 
session_start();

?>



<!DOCTYPE html>

<html lang="pt-br">

<head>

	<title>Index</title>



	<meta charset="UTF-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0"> 
	<meta name="description" content="Pesquisas Compras e Vendas" />
	<meta name="keywords" content="Pesquisas Compras e Vendas" />
	<meta name="Consulvision" content="" />



	<!-- style geral -->
	<link rel="stylesheet" href="pages/faca_styles/css/facastyle.css">
    <!-- icons -->    
    <link rel="stylesheet" href="pages/fonts/css/all.css">
    <!-- animations -->
    <link rel="stylesheet" href="pages/faca_styles/css/animate.css">

    <!-- scripts -->
        
     <script>

        function mostrarMercados(){
			pRovincia = document.getElementById('provincia').value;
			bAirro = document.getElementById('bairro').value;
			parametro = document.getElementById('param').value;
			var xhr = new XMLHttpRequest();
			var url = "FaReservaBack/controllerGateway.php?controller=FacaAqui&method=findMercado&field[Mercado.id]&provincia="+pRovincia+"&bairro="+bAirro+"&param="+parametro;
			xhr.open("GET",url,true);
			xhr.send();
			xhr.onreadystatechange = function(){
			if(xhr.readyState == 4 ){
			// alert(xhr.responseText);
			document.getElementById('mercados').innerHTML = xhr.responseText;
					}
				}
        }

		// function 

		function openFiltro(){
			document.getElementById('filtro').style.display="";
		}

    </script>
        

</head>



<body onload="mostrarMercados()">








	<!-- =================== HEADER =================== -->

   		 <?php include './Pages/includes/header.php'; ?>

	<!-- =================== END HEADER =================== -->













	<!-- =================== CAROUSEL =================== -->

            <?php include './Pages/includes/carrousel.php'; ?>

	<!-- =================== THE END CAROUSEL =================== -->














	<!-- =================== IMAGENS EMPRESA =================== -->

		<div class="container-fluid imggeralIndex">

			<div class="row justify-content-center" id="mercados">
		

			</div> <!-- END BACK -->
		
		</div> <!-- END C.FLUID -->

	<!-- =================== END IMAGENS EMPRESA =================== -->













	<!-- =================== FOOTER =================== -->

            <?php include './Pages/includes/footer.php'; ?>

	<!-- =================== THE END FOOTER =================== -->















	<!--================================
                  FAÇA LINKS
	==================================-->

	<script src="Pages/faca_styles/jquery/jquery-1.10.2.js" type="text/javascript"></script>
	<script src="Pages/faca_styles/js/bootstrap.js"></script>

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