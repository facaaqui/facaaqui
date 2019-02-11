



<?php
session_start();
include '../Apllication/core/FacadePrincipal.php';
$mercadosByUser = $facadePrincipal->mercadoDTO()->findAllMercadoByIdUser($_SESSION['logedUserId']);
$docActual = $facadePrincipal->mercadoDTO()->findAllMercadoById(@$_GET['idEmpresa']);
$sector = $facadePrincipal->mercadoDTO()->findSector();
?>


<!DOCTYPE html>

<html lang="pt-br">

<head>

	<title>Cadastro</title>

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
	<link rel="stylesheet" href="animate.css">

	 <link rel="icon" href="faviconF.ico" type="image/x-icon">

	<script type="text/javascript" src="Apllication/core/lib/UIComponent/nakassonyComponent.js"></script>
 
	<script>
	  
		window.addEventListener('load',defineComponent,true);
		window.addEventListener('load',selectInit,true);

		function selectInit() {
					populateSelect('Mercado.servico', '<?php echo @$docActual[0]->idSector ?>');
					populateSelect('Mercado.provincia', '<?php echo @$docActual[0]->provincia ?>');
				}
				function populateSelect(elm, value) {
					try {
						document.getElementById(elm).value = value;
					} catch (e) {
						//  
					}
				}

	</script>


</head>



<body class="bg-blue">


	<div class="containe-fluid">


		<div class="container align-items-center">


			<div class="bcdstpai bounceInUp animated" >

				<form method="post" action="../FaReservaBack/controllerGateway.php?controller=Cliente&method=save">

					<div class="bcdstfilho">

						<!-- HEADER CADASTRO -->
						<div class="text-center tcdst">

							<div class=""> <a href="../index.php"> <i class="fas fa-chevron-circle-left icnback" title="Voltar"> </i> </a> </div>

							<h2>Cadastro</h2>

						</div>
						<!-- THE END HEADER CADASTRO -->

											
						
						<div class="row justify-content-center" >

							<!-- FORM NOME -->
							<div class="col-xl-5 col-lg-5 col-md-5 col-sm-12 " id="">

								<div>
									<input class="ffInput" type="text" name="field[Cliente.nome]" required="">
									<label class="flabel" for="">Nome</label>	
								</div>

							</div>


							<!-- FORM EMAIL -->
							<div class="col-xl-5 col-lg-5 col-md-5 col-sm-12">

								<div>
									<input class="ffInput" type="email" name="field[Cliente.email]" required="">
									<label class="flabel" for="">Email</label>
								</div>

							</div>

						</div>



						<div class="row justify-content-center">

							<!-- FORM TELEFONE -->
							<div class="col-xl-5 col-lg-5 col-md-5 col-sm-12 " id="">

								<div>
									<input class="ffInput" type="text" name="field[Cliente.telefone]" required="">
									<label class="flabel" for="">Telefone</label>
								</div>
								
							</div>

							<!-- FORM PROVINCIAS -->
							<div class="col-xl-5 col-lg-5 col-md-5 col-sm-12 " id="">

								<!-- ELEMENTOS DO FILTRO -->
								<form id="" class="" role="form">

									<select class="ffInput fsInput"  name="field[Cliente.provincia]">
										<option value="0" selected>Província</option>
										<option value="Bengo">Bengo</option>
										<option value="Benguela">Benguela</option>
										<option value="Bié">Bié</option>
										<option value="Cabinda">Cabinda</option>
										<option value="Cuando-Cubango">Cuando-Cubango</option>
										<option value="Cuanza Norte">Cuanza Norte</option>
										<option value="Cuanza Sul">Cuanza Sul</option>
										<option value="Cunene">Cunene</option>
										<option value="Huambo">Huambo</option>
										<option value="Huíla">Huíla</option>
										<option value="Luanda">Luanda</option>
										<option value="Lunda Norte">Lunda Norte</option>
										<option value="Lunda Sul">Lunda Sul</option>
										<option value="Malanje">Malanje</option>
										<option value="Moxico">Moxico</option>
										<option value="Namibe">Namibe</option>
										<option value="Uíge">Uíge</option>
										<option value="Zaire">Zaire</option>
									</select>

								</form>

							</div>

						</div>



						<div class="row justify-content-center">

							<!-- FORM MUNICIPIO -->
							<div class="col-xl-5 col-lg-5 col-md-5 col-sm-12">
								
								<input class="ffInput" type="text" name="field[Cliente.municipio]" required="" >
								<label class="flabel" for="">Municipio</label>
								
							</div>

							<!-- FORM SENHA -->
							<div class="col-xl-5 col-lg-5 col-md-5 col-sm-12 " id="cs">

								<div>
									<input class="ffInput" type="text" name="field[Cliente.bairro]" required="">
									<label class="flabel" for="">Bairro</label>
								</div>

							</div>

						</div>


						<div class="row justify-content-center">

							<!-- FORM UserName -->
							<div class="col-xl-5 col-lg-5 col-md-5 col-sm-12">

								<div>
									<input class="ffInput" type="text" name="field[Utilizador.userName]" required="">
									<label class="flabel" for="">Utilizador</label>
								</div>

							</div>

							<!-- FORM SENHA -->
							<div class="col-xl-5 col-lg-5 col-md-5 col-sm-12">

								<div>
									<input class="ffInput" type="password" name="field[Utilizador.senha]" required="">
									<label class="flabel" for="">Senha</label>
								</div>

							</div>

						</div>


						<div class="row justify-content-center">

							<!-- FORM SENHA -->
							<div class="col-xl-5 col-lg-5 col-md-5 col-sm-12">

								<div>	
									<input class="ffInput" type="password" name="field[Utilizador.senha]" required="">
									<label class="flabel" for=""> Confirmar Senha </label>
								</div>

							</div>

							<!-- FORM NULL NÃO APAGAR -->

							<div class="col-xl-5 col-lg-5 col-md-5 col-sm-12">

								<div></div>

							</div>
							

						</div>  <!-- END ROW -->



						<div class="row justify-content-center">

							<!-- FORM NULL NÃO APAGAR -->

							<div class="col-xl-5 col-lg-5 col-md-5 col-sm-12">

								<div>	</div>

							</div>

							<!-- BOTÃO CADASTRAR -->

							<div class="col-xl-5 col-lg-5 col-md-5 col-sm-12">

								<div> <a class="btnande" href="index.html"> <button type="submit" class="fbtn "> Cadastrar </button> </a> </div>

							</div>


						</div>  <!-- END ROW  -->


						
					</div>  <!-- bcdstfilho --> 

				</form>  <!-- form --> 

			</div> <!-- bcdstpai --> 

		</div>  <!-- container --> 

	</div>  <!-- container-fluid --> 









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