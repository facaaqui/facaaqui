<?php
session_start();
include '../../Apllication/core/FacadePrincipal.php';
$mercados = $facadePrincipal->mercadoController()->getDTO()->findAllMercado();
$mercadoImagen = $facadePrincipal->mercadoController()->getDTO()->findAllMercadoPic($_SESSION['idMercado']);
$colaborador = $facadePrincipal->colaboradorDTO()->findAllColaborador();
$docActual = $facadePrincipal->colaboradorDTO()->findColaboradorById(@$_GET['id']);


?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Dashboard">
    <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">

    <title>Faça Aqui</title>

    <!-- Bootstrap core CSS -->
    <link href="../assets/css/bootstrap.css" rel="stylesheet">
    <!--external css-->
    <link href="../assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
    <link rel="stylesheet" type="text/css" href="../assets/js/bootstrap-datepicker/css/datepicker.css" />
    <link rel="stylesheet" type="text/css" href="../assets/js/bootstrap-daterangepicker/daterangepicker.css" />
        
    <!-- Custom styles for this template -->
    <link href="../assets/css/style.css" rel="stylesheet">
    <link href="../assets/css/style-responsive.css" rel="stylesheet">
    
    <script type="text/javascript" src="../../Apllication/core/lib/UIComponent/nakassonyComponent.js"></script>
     <script>
     
          window.addEventListener('load',defineComponent,true);   
          window.addEventListener('load',selectInit,true);
      
    function selectInit() {
                populateSelect('Colaborador.genero', '<?php echo @$docActual[0]->genero; ?>');
             
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

  <body>

  <section id="container" >
      <!-- **********************************************************************************************************************************************************
      TOP BAR CONTENT & NOTIFICATIONS
      *********************************************************************************************************************************************************** -->
      <?php include '../includes/menuNavegacao.php'; ?>
      <!--sidebar end-->
      
      <!-- **********************************************************************************************************************************************************
      MAIN CONTENT
      *********************************************************************************************************************************************************** -->
      <!--main content start-->
      <section id="main-content">
          <section class="wrapper">
          	<h3><i class="fa fa-angle-right"></i>Cadastro de Colaboradores</h3>
          	
          	<!-- BASIC FORM ELELEMNTS -->
          	<div class="row mt">
          		<div class="col-lg-12">
                  <div class="form-panel">
                  	  <h4 class="mb"><i class="fa fa-angle-right"></i>Dados</h4>
                          <form class="form-horizontal style-form" method="post" enctype="multipart/form-data" 
                                        action="../../controllerGateway.php?controller=Utilizador&method=saveColaborador">
                          <div class="form-group" >
                              <label class="col-sm-2 col-sm-2 control-label">Nome:</label>
                              <div class="col-sm-10">
                                  <input type="text" name="field[Colaborador.nomeCompleto]" value="<?php echo @$docActual[0]->nomeCompleto ?>" class="form-control">
                              </div>
                          </div>
                          <div class="form-group" >
                              <label class="col-sm-2 col-sm-2 control-label">Genero:</label>
                              <div class="col-sm-10">
                                  <select  name="field[Colaborador.genero]" id="Colaborador.genero" class="form-control">
                                      <option value="">Selecionar</option>
                                      <option value="Masculino">Masculino</option>
                                      <option value="Femenino">Femenino</option>
                                  </select>
                              </div>
                          </div>
                          <div class="form-group" >
                              <label class="col-sm-2 col-sm-2 control-label">BI Nº:</label>
                              <div class="col-sm-10">
                                  <input type="text" name="field[Colaborador.bi]" value="<?php echo @$docActual[0]->bi ?>" class="form-control">
                                  <input type="hidden" name="field[Colaborador.id]" value="<?php echo @$docActual[0]->id ?>" class="form-control">
                              </div>
                          </div>
                          <div class="form-group" >
                              <label class="col-sm-2 col-sm-2 control-label">Província:</label>
                              <div class="col-sm-10">
                                  <input type="text" name="field[Colaborador.provincia]" value="<?php echo @$docActual[0]->provincia ?>" class="form-control">
                              </div>
                          </div>
                          <div class="form-group" >
                              <label class="col-sm-2 col-sm-2 control-label">Contacto:</label>
                              <div class="col-sm-10">
                                  <input type="text" name="field[Colaborador.contacto]" value="<?php echo @$docActual[0]->contacto ?>" class="form-control">
                              </div>
                          </div>
                          <div class="form-group" >
                              <label class="col-sm-2 col-sm-2 control-label">Email:</label>
                              <div class="col-sm-10">
                                  <input type="text" name="field[Colaborador.email]" value="<?php echo @$docActual[0]->email ?>" class="form-control">
                              </div>
                          </div>
                          
                          
                          <div class="form-group">
                              <div class="col-sm-10">
                                    <?php if(count(@$_GET['id']) != 1 ){ ?>
                                  <input type="submit" value="Cadastrar" class="btn bg-theme" style="background: rgb(240,118,34);color: #fff">
                                <?php } ?>
                                  <?php if(count(@$_GET['id']) == 1 ){ ?>
                                    <nakassonyActionButton id="btnAct" value="Novo" action="novoColab"  style="background: rgb(240,118,34);color: #000"></nakassonyActionButton>
                                    &nbsp;&nbsp;&nbsp;<nakassonyActionButton id="btnAct" value="Actualizar" action="actColab"  style="background: rgb(240,118,34);color: #000"></nakassonyActionButton>
                                    <nakassonyActionButton id="btndel" value="Excluir" action="deleteColab"  style="background: rgb(240,118,34);color: #000"></nakassonyActionButton>

                                  <?php } ?>
                              </div>
                          </div>
                         
                       </form>
                  </div>
                            
                  <div class="row mt">
                  <div class="col-md-12">
                      <div class="content-panel">
                          <table class="table table-striped table-advance table-hover">
	                  	  	  <h4><i class="fa fa-angle-right"></i>Colaboradores</h4>
	                  	  	  <hr>
                              <thead>
                              <tr>
                                  <th><i class="fa fa-bullhorn"></i>Nº</th>
                                  <th class="hidden-phone"><i class="fa fa-question-circle"></i>Nome Completo</th>
                                  <th class="hidden-phone"><i class="fa fa-question-circle"></i>BI Nº</th>
                                  <th class="hidden-phone"><i class="fa fa-question-circle"></i>Província</th>
                                  <th class="hidden-phone"><i class="fa fa-question-circle"></i>Contacto</th>
                                  <th class="hidden-phone"><i class="fa fa-question-circle"></i>Email</th>
                                  <th></th>
                              </tr>
                              </thead>
                              <tbody>
                                  <?php foreach ($colaborador as $c){ ?>
                              <tr>
                                  <td><a href="basic_table.html#"><?php echo $c->id; ?></a></td>
                                  <td class="hidden-phone"><?php echo $c->nomeCompleto ?></td>
                                  <td class="hidden-phone"><?php echo $c->bi ?></td>
                                  <td class="hidden-phone"><?php echo $c->provincia ?></td>
                                  <td class="hidden-phone"><?php echo $c->contacto ?></td>
                                  <td class="hidden-phone"><?php echo $c->email ?></td>
                                  <td>
                                      <a href="colaborador.php?id=<?php echo $c->id ?>" class="btn btn-primary btn-xs"><i class="fa fa-pencil"></i></a>
                                      <!--<a href="../../Apllication/controller/UtilizadorController.php?controller=Utilizador&method=deleteColab&field[Colaborador.id]=<?php echo $c->id ?>" class="btn btn-danger btn-xs"><i class="fa fa-trash-o "></i></a>-->
                                  </td>
                              </tr>
                                  <?php } ?>
                              </tbody>
                          </table>
                      </div><!-- /content-panel -->
                  </div><!-- /col-md-12 -->
              </div><!-- /row -->
          		</div><!-- col-lg-12-->      	
          	</div><!-- /row -->
          	
          	<!-- CUSTOM TOGGLES -->
          		
          	</div><!-- /row -->
          	
          	
		</section><! --/wrapper -->
      </section><!-- /MAIN CONTENT -->

      <!--main content end-->
      <!--footer start-->
      <footer class="site-footer">
          <div class="text-center">
              2018&copy;ConsulVision.Lda
              <a href="form_component.html#" class="go-top">
                  <i class="fa fa-angle-up"></i>
              </a>
          </div>
      </footer>
      <!--footer end-->
  </section>

    <!-- js placed at the end of the document so the pages load faster -->
    <script src="../assets/js/jquery.js"></script>
    <script src="../assets/js/bootstrap.min.js"></script>
    <script class="include" type="text/javascript" src="../assets/js/jquery.dcjqaccordion.2.7.js"></script>
    <script src="../assets/js/jquery.scrollTo.min.js"></script>
    <script src="../assets/js/jquery.nicescroll.js" type="text/javascript"></script>


    <!--common script for all pages-->
    <script src="../assets/js/common-scripts.js"></script>

    <!--script for this page-->
    <script src="../assets/js/jquery-ui-1.9.2.custom.min.js"></script>

	<!--custom switch-->
	<script src="../assets/js/bootstrap-switch.js"></script>
	
	<!--custom tagsinput-->
	<script src="../assets/js/jquery.tagsinput.js"></script>
	
	<!--custom checkbox & radio-->
	
	<script type="text/javascript" src="../assets/js/bootstrap-datepicker/js/bootstrap-datepicker.js"></script>
	<script type="text/javascript" src="../assets/js/bootstrap-daterangepicker/date.js"></script>
	<script type="text/javascript" src="../assets/js/bootstrap-daterangepicker/daterangepicker.js"></script>
	
	<script type="text/javascript" src="../assets/js/bootstrap-inputmask/bootstrap-inputmask.min.js"></script>
	
	
        <script src="../assets/js/form-component.js"></script>    
    
    
  <script>
      //custom select box

      $(function(){
          $('select.styled').customSelect();
      });

  </script>

  </body>
</html>



