<?php


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
          	<h3><i class="fa fa-angle-right"></i> Cadastro de Mercados</h3>
          	
          	<!-- BASIC FORM ELELEMNTS -->
          	<div class="row mt">
          		<div class="col-lg-12">
                  <div class="form-panel">
                  	  <h4 class="mb"><i class="fa fa-angle-right"></i>Dados</h4>
                          <form class="form-horizontal style-form" method="post" enctype="multipart/form-data" 
                                        action="../../controllerGateway.php?controller=FacaAqui&method=saveSector">
                          

                          <div class="form-group" >
                              <label class="col-sm-2 col-sm-2 control-label">Descrição:</label>
                              <div class="col-sm-10">
                                  <input type="text" name="field[Sector.descricao]"  value="<?php echo @$docActual[0]->descricao ?>" class="form-control">
                                  <!--<input type="hidden" name=""  value="<?php echo @$docActual[0]->id ?>" class="form-control">-->
                              </div>
                          </div>
                          
                          <div class="form-group">
                              <div class="col-sm-10">
                                  <?php if(count(@$_GET['id']) != 1 ){ ?>
                                  <input type="submit" value="Cadastrar" class="btn bg-theme">
                                  <?php } ?>
                                  <?php if(count(@$_GET['id']) == 1 ){ ?>
                                    <nakassonyActionButton id="btnAct" value="Actualizar" action="actMenu"  style="background: rgb(240,118,34);color: #000"></nakassonyActionButton>
                                    <nakassonyActionButton id="btnCat" value="Excluir" action="deleteCat"  style="background: rgb(240,118,34);color: #000"></nakassonyActionButton>
                                    <nakassonyActionButton id="btnNew" value="Novo" action="newCat"  style="background: rgb(240,118,34);color: #000"></nakassonyActionButton>
                                  
                                  <?php } ?>
                              </div>
                          </div>
                         
                       </form>
                  </div>
                            
                  <div class="row mt">
                  <div class="col-md-12">
                      <div class="content-panel">
                          <
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

