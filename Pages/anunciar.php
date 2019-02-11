




<?php
session_start();
include '../Apllication/core/FacadePrincipal.php';
$docActual = $facadePrincipal->mercadoDTO()->findAllMercadoById(@$_GET['idMercado']);
?>


<!DOCTYPE html>

<html lang="pt-br">

<head>

	<title>Anúnciar</title>

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
   
        
    <script>
 
		window.addEventListener('load',selectInit,true);
		
		function selectInit() {
			populateSelect('provincias', '<?php echo @$docActual[0]->provincia ?>');
				}

			function populateSelect(elm, value) {
				try { document.getElementById(elm).value = value;} catch (e) { }
		}
          
    </script>



</head>


<body class="bg-blue">




	<!-- =================== HEADER =================== -->

	  

	<!-- =================== END HEADER =================== -->











	<div class="containe-fluid wow bounceInUp animated" data-wow-delay="0.5s">


		<div class="container">


			<div class="boxAnunciar">

				<!-- HEADER CADASTRO -->
				<div class="text-center mt-5">

					<div class=""> <a href="../index.php"> <i class="fas fa-chevron-circle-left icnbackAnun" title="Voltar"> </i> </a> </div>

					<h2 class="tanc">Anúnciar</h2>

				</div>
				<!-- THE END HEADER CADASTRO -->


				<!-- SECTION DE IMAGEM DA EMPRESA EM CADASTRO -->
 
                 <form class="lgem mr-5" method="post" action="../FaReservaBack/controllerGateway.php?controller=Mercado&method=<?php if(count(@$_GET['idMercado']) ==0 ){echo "save";}else{echo "actualizar";} ?>" enctype="multipart/form-data">

					<div class="row justify-content-end ">

						<div class="col-8 col-sm-7 col-md-4 col-lg-3 col-xl-3">

							<label class="">

								<div class="">

									<img src="img/avatar.png" class="pushImagem" id="pusheCover" title="" />
										
									<?php if(count(@$_GET['idMercado']) == 0  ){ ?>
											
									<input type="file" name="field[Mercado.foto]" id="facaImagemVir">
											
									<?php }else{ ?>
											
									<input type="text" name="field[Mercado.foto]" value="<?php echo @$docActual[0]->foto ?>" id="facaImagemVir">
										
									<?php } ?>
										
									</div>

									<div class="mt-2 btnps">

									<h5>Logotipo</h5>

								</div>

							</label>

						</div>

					</div>

				</form>	

				<!-- THE END SECTION DE IMAGEM DA EMPRESA EM CADASTRO -->




				<!--====================== BEGIN BOX FORMULÁRIO ======================-->

				<div class="bfanc">

					<!--====================== FORMULÁRIO NOME AND EMAIL ======================-->


					<div class="row justify-content-center">

						<!-- FORM NOME -->
						<div class="col-xl-5 col-lg-5 col-md-5 col-sm-12">

							<div>
								<input class="ffInput" type="hidden" value="<?php echo @$docActual[0]->id ?>" name="field[Mercado.id]" required="" placeholder="">
								<input class="ffInput" type="text" value="<?php echo @$docActual[0]->nome ?>" name="field[Mercado.nome]" required="" placeholder="">
								<label class="flabel" for=""> Empresa </label>
							</div>

						</div>

						<!-- FORM EMAIL -->
						<div class="col-xl-5 col-lg-5 col-md-5 col-sm-12">

							<div>
								<input class="ffInput" type="email" name="field[Mercado.email]" value="<?php echo @$docActual[0]->value ?>" required="" placeholder="">
								<label class="flabel" for=""> Email </label>
							</div>

						</div>

					</div>


					<!--====================== FORMULÁRIO TELEFONE AND NIF ======================-->


					<div class="row justify-content-center">

						<!-- FORM TELEFONE -->
						<div class="col-xl-5 col-lg-5 col-md-5 col-sm-12">

							<div>
								<input class="ffInput" type="text" name="field[Mercado.telefone]" value="<?php echo @$docActual[0]->telefone ?>" required="" placeholder="">
								<label class="flabel" for="">Telefone</label>
							</div>

						</div>

						<!-- FORM NIF -->
						<div class="col-xl-5 col-lg-5 col-md-5 col-sm-12">

							<div>
								<input class="ffInput" type="text" name="field[Mercado.nif]" value="<?php echo @$docActual[0]->nif ?>" required="" placeholder="">
								<label class="flabel" for=""> Nif </label>
						   </div>

						</div>

					</div>


					<!--====================== FORMULÁRIO PROVÍNCIAS AND MUNICIPIO ======================-->


					<div class="row justify-content-center">

						<!-- FORM PROVINCIAS -->
						<div class="col-xl-5 col-lg-5 col-md-5 col-sm-12">

							<!-- ELEMENTOS DO FILTRO -->

								<select class="ffInput fsInput"  name="field[Mercado.provincia]">
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
							
						</div>

						<!-- FORM MUNICIPIO -->
						<div class="col-xl-5 col-lg-5 col-md-5 col-sm-12">

							<div>
								<input class="ffInput" type="text" name="field[Mercado.municipio]" value="<?php echo @$docActual[0]->municipio ?>" required="" placeholder="">
								<label class="flabel" for="">Municipio</label>
							</div>

						</div>

					</div>



					<!--====================== FORMULÁRIO BAIRRO MENSAGEM ======================-->


					<div class="row justify-content-center">

						<!-- FORM BAIRRO -->
						<div class="col-xl-5 col-lg-5 col-md-5 col-sm-12">

							<div>
								<input class="ffInput" type="text" name="field[Mercado.bairro]" value="<?php echo @$docActual[0]->bairro ?>" required="" placeholder="">
								<label class="flabel" for="">Bairro</label>
						    </div>

						</div>

						<!--BASIC TEXTAREA-->
						<div class="col-xl-5 col-lg-5 col-md-5 col-sm-12">

							<div>
								<textarea type="text" id="" name="field[Mercado.infoAdd]" class="faca-textarea-mensagem" rows="3" placeholder=""><?php echo @$docActual[0]->infoAdd ?></textarea>
								<label for="mensa" class="faca-label-mensagem">Sobre a Empresa...</label>
						    </div>

						</div>

					</div>

				</div>




				<div class="container bsg">
					<!--====================== FORMULÁRIO SERVIÇOS  col-9  col-sm-6 col-md-10 col-lg-10 col-xl-10======================-->


						<div class="row justify-content-center mt-1 mb-4">


							<!-- FORM BAIRRO -->
							<div class="col-xl-5 col-lg-5 col-md-5 col-sm-12">

							<div>
							<!--====================== FORMULÁRIO SERVIÇOS COLLAPSE ======================-->
							<a class="btnimgps" data-toggle="collapse" href="#imgps" role="button" aria-expanded="false" aria-controls="collapseExample"> PRODUTOS E SERVIÇOS <i class="fas fa-angle-down"> </i> </a>
								
							</div>

							</div>

							<!--BASIC TEXTAREA-->
							<div class="col-xl-5 col-lg-5 col-md-5 col-sm-12">

							

							</div>


						</div>



						<!--====================== FORMULÁRIO CARREGAR IMAGEM 1 ======================-->

					<div class="ctrlImags collapse" id="imgps">   

						<!-- <div class="row " > -->

							<!--====================== CARREGAR IMAGEM 1 ====================== col-xl-4 col-lg-4 col-md-4  col-sm-4 col-12 -->

							<div class="col-auto mb-2">

								<label class="">

									<div class="">

										<img src="img/avatar.png" class="picture-src pushImagem" id="pusheCover" title="Logo" />

										<?php if(count(@$_GET['idMercado']) == 0  ){ ?>
											
											<input type="file" name="field[Mercado.fotoUm]" id="facaImagemVir">
											
										<?php }else{ ?>
											
											<input type="text" value="<?php echo @$docActual[0]->fotoUm ?>"  name="field[Mercado.fotoUm]" id="facaImagemVir">
											
										<?php } ?>
																			
									</div>

									<div class="btnps mt-2">

										<h5>Imagem 01</h5>

									</div>

								</label>

							</div>

							<!--====================== CARREGAR IMAGEM 2 ======================-->

							<div class="col-auto mb-2">

								<label class="">

									<div class="">

										<img src="img/avatar.png" class="picture-src pushImagem" id="pusheCover" title="Logo" />

											<?php if(count(@$_GET['idMercado']) == 0  ){ ?>
												
												<input type="file" name="field[Mercado.fotoDois]" id="facaImagemVir">
																			
											<?php }else{ ?>
																				
												<input type="text" value="<?php echo @$docActual[0]->fotoDois ?>"  name="field[Mercado.fotoDois]" id="facaImagemVir">
												
											<?php } ?>
																			
									</div>

									<div class="btnps mt-2">

										<h5>Imagem 02</h5>

									</div>

								</label>

							</div>


							<!--====================== CARREGAR IMAGEM 3 ======================-->

							<div class="col-auto  mb-2">

								<label class="">
										
										<div class="">

											<img src="img/avatar.png" class="pushImagem" id="pusheCover" title="Logo" />

											<?php if(count(@$_GET['idMercado']) == 0  ){ ?>
																				
												<input type="file" name="field[Mercado.fotoTres]"  id="facaImagemVir">
																			
											<?php }else{ ?>
																				
												<input type="text" name="field[Mercado.fotoTres]" value="<?php echo @$docActual[0]->fotoTres ?>"  id="facaImagemVir">
																			
											<?php } ?>
											
										</div>
									
									<div class="btnps mt-2">

										<h5>Imagem 03</h5>

									</div>
									
								</label>

							</div>


							<!--====================== CARREGAR IMAGEM 4 ======================-->

							<div class="col-auto">

							<label class="">
									
									<div class="">

										<img src="img/avatar.png" class="pushImagem" id="pusheCover" title="Logo" />

										<?php if(count(@$_GET['idMercado']) == 0  ){ ?>
																			
											<input type="file" name="field[Mercado.fotoTres]"  id="facaImagemVir">
																		
										<?php }else{ ?>
																			
											<input type="text" name="field[Mercado.fotoTres]" value="<?php echo @$docActual[0]->fotoTres ?>"  id="facaImagemVir">
																		
										<?php } ?>
										
									</div>
								
								<div class="btnps mt-2">

									<h5>Imagem 04</h5>

								</div>
								
							</label>

							</div>
							
							<!--====================== THE END FORMULÁRIO SERVIÇOS ======================-->

						</div>

					<!-- </div> -->

				</div>



				<!--====================== BTN ANÚNCIAR ======================-->

				<div class="row justify-content-center ">

					<div class="col-xl-10 col-lg-10 col-md-10 col-sm-12 mt-5">

					   <?php if(count(@$_GET['idMercado']) != 0  ){ ?>
						
							<a href=""> <button type="submit" class="fbtn btn-block mb-5  py-2"> <i class="fas fa-sync-alt mr-2">  </i> ACTUALIZAR </button> </a>
							
							<a href="index.html"> <button type="submit" class="fbtn btn-block mb-5  py-2"> <i class="fas fa-sync-alt mr-2"> </i> EXCLUIR </button> </a>

							<?php }else{ ?>
								
								<a href="index.html"> <button type="submit" class="fbtn btn-block mb-5 py-2 text-uppercase"> Anúnciar </button> </a>
								
							<?php } ?>
							
					</div>

				</div>

				<!--====================== THE END ANÚNCIAR ======================-->

				</form>
							
			</div>

		</div>

	</div>














	<!-- =================== FOOTER =================== -->

			

	<!-- =================== THE END FOOTER =================== -->














<!--================================
                  FAÇA LINKS
	==================================-->

	<script src="faca_styles/jquery/jquery-1.10.2.js" type="text/javascript"></script>
	<script src="faca_styles/js/bootstrap.js"></script>

	<!--  push image -->
	<script src="faca_styles/jquery/nossopushimagens.js"></script>

	<!--================================
	          END FAÇA LINKS
	==================================-->



</body>

</html>

