<?php
session_start();
include '../../Apllication/core/FacadePrincipal.php';
$categoria = $facadePrincipal->categoriaController()->getDTO()->findAll();
$docActual = $facadePrincipal->categoriaController()->getDTO()->findAllM(@$_GET['id']);
$sectores = $facadePrincipal->categoriaController()->getDTO()->findSectores();
$mercados = $facadePrincipal->mercadoController()->getDTO()->findAllMercado();
$mercadoImagen = $facadePrincipal->mercadoController()->getDTO()->findAllMercadoPic($_SESSION['idMercado']);

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Dashboard">
    <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">

    <title>ConsulVision</title>

        <script type="text/javascript" src="../../Apllication/core/lib/UIComponent/nakassonyComponent.js"></script>
    <script>
           
          window.addEventListener('load',defineComponent,true);

    </script>
    <!-- Bootstrap core CSS -->
    <link href="../assets/css/bootstrap.css" rel="stylesheet">
    <!--external css-->
    <link href="../assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
    <link rel="stylesheet" type="text/css" href="../assets/js/bootstrap-datepicker/css/datepicker.css" />
    <link rel="stylesheet" type="text/css" href="../assets/js/bootstrap-daterangepicker/daterangepicker.css" />
        
    <!-- Custom styles for this template -->
    <link href="../assets/css/style.css" rel="stylesheet">
    <link href="../assets/css/style-responsive.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
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
          	<h3><i class="fa fa-angle-right"></i> Cadastro de Categorias</h3>
          	
          	<!-- BASIC FORM ELELEMNTS -->
          	<div class="row mt">
          		<div class="col-lg-12">
                  <div class="form-panel">
                  	  <h4 class="mb"><i class="fa fa-angle-right"></i>Dados</h4>
                          <form class="form-horizontal style-form" method="post" enctype="multipart/form-data" 
                                        action="../../controllerGateway.php?controller=Categoria&method=save">
                          
<!--                          <div class="form-group" >
                              <label class="col-sm-2 col-sm-2 control-label">Sector:</label>
                              <div class="col-sm-10">
                                  <select name="field[Categoria.idSector]" class="form-control">
                                      <option value="0">Selecione</option>
                                      <?php foreach ($sectores as $s){ ?>
                                      <option value="<?php echo $s->id ?>"><?php echo utf8_encode($s->descricao) ?></option>
                                      <?php } ?>
                                  </select>
                              </div>
                          </div>-->
                          <div class="form-group" >
                              <label class="col-sm-2 col-sm-2 control-label">Descrição:</label>
                              <div class="col-sm-10">
                                  <input type="text" name="field[Categoria.descricao]"  value="<?php echo @$docActual[0]->descricao ?>" class="form-control">
                                  <input type="hidden" name="field[Categoria.id]"  value="<?php echo @$docActual[0]->id ?>" class="form-control">
                              </div>
                          </div>
                          
                          <div class="form-group">
                              <div class="col-sm-10">
                                  <?php if(count(@$_GET['id']) != 1 ){ ?>
                                  <input type="submit" value="Cadastrar" class="btn bg-theme">
                                  <?php } ?>
                                  <?php if(count(@$_GET['id']) == 1 ){ ?>
                                    <nakassonyActionButton id="btnAct" value="Actualizar" action="actMenu"  style="background: rgb(240,118,34);color: #000"></nakassonyActionButton>
                                  <?php } ?>
                              </div>
                          </div>
                         
                       </form>
                  </div>
                            
                  <div class="row mt">
                  <div class="col-md-12">
                      <div class="content-panel">
                          <table class="table table-striped table-advance table-hover">
	                  	  	  <h4><i class="fa fa-angle-right"></i>Produtos Registados</h4>
	                  	  	  <hr>
                              <thead>
                              <tr>
                                  <th><i class="fa fa-bullhorn"></i>Nº</th>
                                  <th class="hidden-phone"><i class="fa fa-question-circle"></i>Categoria</th>
                                  <th class="hidden-phone"><i class="fa fa-question-circle"></i>Sector</th>
                                  <th></th>
                              </tr>
                              </thead>
                              <tbody>
                                  <?php foreach ($categoria as $cat){ ?>
                              <tr>
                                  <td><a href="basic_table.html#"><?php echo $cat->id; ?></a></td>
                                  <td class="hidden-phone"><?php echo $cat->descricao ?></td>
                                  <td class="hidden-phone"><?php echo $cat->sector ?></td>
                                  <td>
                                      <a href="categoria.php?id=<?php echo $cat->id ?>" class="btn btn-primary btn-xs"><i class="fa fa-pencil"></i></a>
                                      <!--<button class="btn btn-danger btn-xs"><i class="fa fa-trash-o "></i></button>-->
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
              2014 - Alvarez.is
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

