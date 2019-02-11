<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */?>

    <!-- ====================== ALL NAV-MENU ====================== -->


    <div class="container-fluid fixed-top hdrMall">

	
				<nav class="navbar navbar-expand-sm navbar-light headerAll">
	
					<!-- LOGO FAÇA AQUI -->

                    <a class="navbar-brand ctrlmlogol" href="<?php if(count($_GET['p']) != 0){echo "../";} ?>index.php"> <img class="lgfa" src="<?php if(@count(@$_GET['p']) == 0){echo "Pages/";} ?>img/facaqui_logo.png" alt="Logo Faça Aqui" title="Faça Aqui">
					</a>
	
	
					<!-- SHOW COLLAPSE DESKTOP TABLE AND LARGES DESTOPS -->

					<div class="collapse navbar-collapse ctrlmr float-right">
	
						<ul class="navbar-nav ml-auto hdrml align-items-center">
	
							<!-- BARRA DE BUSCA -->

							<li class="nav-item dfesear d-sm-none d-md-block d-lg-block d-xl-block">
	
                               <input type="search" id="param" class="ffInput text-left" placeholder="Buscar..." oninput="mostrarMercados()">
	
							</li>
	

							<!--================================
										 FILTRO
						   ==================================-->

							<li class="nav-item  d-sm-none d-md-block d-lg-block d-xl-block">
	
								<div class="input-group-btn">
	
									<div class="btn-group" role="group">
	
										<div class="dropdown dropdown-md">
	
											<!-- BOTÃO FILTRO -->

											<i class="fas fa-filter dropdown mr-4 fdentro" data-toggle="dropdown" aria-expanded="false" title="Filtrar"> </i>
	
											<div class="dropdown-menu boxFiltro" role="menu">
	
												<!-- ELEMENTOS DO FILTRO -->

												<form class="" role="form">
	
													<div class="mt-3">
	
														<select class="ffInput fsInput" id="provincia" onchange="mostrarMercados()">

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
	
													<!-- ELEMENTOS DO FILTRO -->
													<div>

														<input class="ffInput" type="text" name="" required="" id="bairro">
														<label class="flabel" for=""> Bairro </label>

													</div>

												</form>
	
											</div>
	
										</div>
	
									</div>
	
								</div>
	
							</li>
	
	
							<!-- ICON ANÚNCIAR  -->

							<?php if(count(@$_SESSION['logedUserId']) != 0 ){ ?>
								
							<li class="nav-item  mr-3 ">

								<a class="nav-link" title="Anúnciar" href="<?php if(@count(@$_GET['p']) == 0){echo "Pages/";} ?>anunciar.php" title="Anunciar"> <i class="fas fa-bullhorn anunciar"> </i> </a>

							</li>

							<!-- ICON ANÚNCIUS  -->

							<li class="nav-item  mr-3 ">

								<a class="nav-link" title="Anúncios" href="<?php if(@count(@$_GET['p']) == 0){echo "Pages/";} ?>anunciados.php" title="Anúncios"> <i class="fas fa-file-signature login"> </i> </a>

							</li>

                            <?php } ?>
	

							<!-- ICON LOGIN  -->     <!-- ICON LOGIN AFTER USER IT <i class="fas fa-user"></i> -->

							<?php if(count(@$_SESSION['logedUserId']) == 0 ){ ?>

                            <li class="nav-item">

								<a class="nav-link" data-toggle="modal" data-target="#mutl" href="<?php if(@count(@$_GET['p']) == 0){echo "Pages/";} ?>login.html" title="Entrar"> <i class="far fa-user mt-2  login"> </i> </a>

							</li>

							<!-- ICON TERMINAR SESSÃO  --> 

							<?php } ?>
							
							<?php if(count(@$_SESSION['logedUserId']) != 0 ){ ?>
								
							<li class="nav-item">

                               <a class="nav-link"  href="<?php if(@count(@$_GET['p']) != 0){echo "../";} ?>FaReservaBack/controllerGateway.php?controller=Utilizador&method=logout" title="Terminar Sessão"> <i class="fas fa-sign-out-alt login"> </i> </a>
							
							</li>

							<?php } ?>
							
						</ul>
	
					</div>
	
	
	
	
	
	
	
					<!-- ============================================ BEGIN MENU COLLAPSE MOBILE SHOW ============================================ -->
	
	
	
	
	
	
					<!-- MENU HAMBURGER -->
					<button class="navbar-toggler iconHumburgerPhonePai " type="button" data-toggle="collapse" data-target="#conteudoNavbarSuportado" aria-controls="conteudoNavbarSuportado" aria-expanded="false" aria-label="Alterna navegação">
	
						<span class="navbar-toggler-icon iconHumburgerPhoneFilho"> </span>
	
					</button>
	
	
					<!-- COLLAPSE SHOW Small devices (landscape phones, 576px and up) -->

					<div class="collapse d-sm-none" id="conteudoNavbarSuportado">
	
						<ul class="navbar-nav ">
								
                            <?php if(count(@$_SESSION['logedUserId']) == 0 ){ ?>

								<!-- ICON LOGIN  -->
								
								<li class="nav-item mb-3 ">

									<div class="row btnMobiles">

										<div class="col-2"> <i class="far fa-user  login  ctrlIcons"> </i>  </div>
										<div class="col-10"> <a class="nav-link linkitem" title="Anúnciar"  data-toggle="modal" data-target="#mutl" href="<?php if(@count(@$_GET['p']) == 0){echo "Pages/";} ?>anunciar.php" title="Entrar"> <span class="icontm"> Login </span> </a> </div>

									</div>

								</li>

                            	<?php } ?>

                                <?php if(count(@$_SESSION['logedUserId']) != 0 ){ ?>
							
                                                        
                               <!-- ICON ANÚNCIAR  -->

							    <li class="nav-item mb-3 align-items-center">

									<div class="row btnMobiles">

										<div class="col-2"> <i class="fas fa-bullhorn login  ctrlIcons"> </i>  </div>

										<div class="col-10"> <a class="nav-link linkitem" title="Anúnciar" href="<?php if(@count(@$_GET['p']) == 0){echo "Pages/";} ?>anunciar.php"> <span class="icontm"> Anúnciar </span> </a> </div>

									</div>
	
							    </li>

								<!-- ICON ANÚNCIOS  -->

								<li class="nav-item mb-3">

									<div class="row btnMobiles">

										<div class="col-2"> <i class="fas fa-file-signature login ctrlIcons"> </i>  </div>

										<div class="col-10"> <a class="nav-link linkitem" title="Anúncios" href="<?php if(@count(@$_GET['p']) == 0){echo "Pages/";} ?>anunciados.php?p"> <span class="icontm"> Anúncios </span> </a> </div>

									</div>
		
								</li>

								<!-- ICON TERMINAR SESSÃO  -->

								<li class="nav-item mb-3">

									<div class="row btnMobiles">

										<div class="col-2"> <i class="fas fa-sign-out-alt login ctrlIcons"> </i>  </div>

										<div class="col-10"> <a class="nav-link linkitem" title="Terminar Sessão" href="<?php if(@count(@$_GET['p']) != 0){echo "../";} ?>FaReservaBack/controllerGateway.php?controller=Utilizador&method=logout"> <span class="icontm"> Terminar Sessão  </span> </a> </div>

									</div>

								</li>

                            <?php } ?>
                                                        
						</ul>
	
					</div>
					<!-- ============================================ BEGIN MENU COLLAPSE MOBILE SHOW ============================================ -->
	
	
	
	
					</ul>
	
				</nav>
	
	
		</div>
	
		<!-- ====================== THE END NAV-MENU ====================== -->
	
	
	
	
	
	
	
	
		<!-- ====================== LOGIN MODAL ====================== -->
	
		<div class="modal fade  " id="mutl" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	
			<div class="modal-dialog modal-lg" role="document">

				<!--Content-->

				<div class="modal-content mpai">
	
					<!-- MODAL HEADER -->

					<div class="modal-header hdrm">

						<h4 class="hdrmt"> <i class="fas fa-user"> </i> Utilizador </h4>
	
						<!-- MODAL BUTTON CLOSE -->

						<button type="button" class="close fbtnc" data-dismiss="modal" aria-label="Close">

							<span aria-hidden="true"> × </span>

						</button>

					</div>
					
	                               
					<!-- MY BOX -->

					<form method="post" action="<?php if(@count(@$_GET['p']) != 0){echo "../";} ?>FaReservaBack/controllerGateway.php?controller=Utilizador&method=logar">
					
						<div class="modal-body boxnsPai">
		
							<!-- NOME -->
							<div>

								<input class="ffInput" type="text" name="field[Utilizador.userName]" required="">
								<label class="flabel" for=""> Nome </label>

							</div>
		
							<!-- SENHA -->
							<div>

								<input class="ffInput" type="password" name="field[Utilizador.senha]" required="">
								<label class="flabel" for=""> Senha </label>

							</div>

						</div>                    
						<!-- THE END MY BOX -->
		
		
						<!-- MODAL FOOTER -->

						<div class="container">
		
							<div class="row  justify-content-end mr-5 my-5">
		
								<!-- CADASTRAR-SE -->

								<div class="mr-3">

								<a class="" href="<?php if(@count(@$_GET['p']) == 0){echo "Pages/";} ?>Cadastro.php"><button type="button" class="fbtn fbtnm"> Cadastrar-se </button> </a>
								
								</div>
		
								<!-- ENTRAR -->

								<div class="">

									<a class="" href="#"><button type="submit" class="fbtn fbtnm"> Entrar </button > </a>

								</div>
		
							</div>

						</div>

					</form>
	
					<!-- MY BOX -->


				</div>
			
			</div>

		</div>
	
		<!-- ====================== THE END LOGIN MODAL ====================== -->


