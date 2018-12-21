<?php
session_start();
include '../../Apllication/core/FacadePrincipal.php';
$produtos = $facadePrincipal->produtoController()->getDTO()->findAllProduto($_SESSION['idMercado']);
$saidas = $facadePrincipal->produtoController()->getDTO()->findSaidas(isset($_SESSION['idMercado']) ? $_SESSION['idMercado'] : NULL, isset($_GET['parametro']) ? $_GET['parametro'] : null);
$datas = $facadePrincipal->produtoController()->getDTO()->findPedidosData($_SESSION['idMercado']);
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

    <!-- Bootstrap core CSS -->
    <link href="../assets/css/bootstrap.css" rel="stylesheet">
    <!--external css-->
    <link href="../assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
    <link rel="stylesheet" type="text/css" href="../assets/js/bootstrap-datepicker/css/datepicker.css" />
    <link rel="stylesheet" type="text/css" href="../assets/js/bootstrap-daterangepicker/daterangepicker.css" />
        
    <!-- Custom styles for this template -->
    <link href="../assets/css/style.css" rel="stylesheet">
    <link href="../assets/css/style-responsive.css" rel="stylesheet">
     
    <style>
        
</style>
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
          	<h3><i class="fa fa-angle-right"></i> </h3>
          	<div class="row mt">
          		<div class="col-lg-12">
                  <div class="row mt">
                  <div class="col-md-12">
                      <div class="content-panel">
                          <table class="table table-striped table-advance table-hover">
	                  	  	  <h4><i class="fa fa-angle-right"></i>Saídas</h4>
                                          <form method="get" action="estrato.php">
                                              <select name="parametro" style="width: 20%;height: 25px;margin-left: 2px;">
                                                  <option value="">Selecione</option>
                                                  <?php foreach ($saidas as $d){ ?>
                                                  <option value="<?php echo $d->dataPedido ?>"><?php echo $d->dataPedido ?></option>
                                                  <?php } ?>
                                              </select><input type="submit" value="Buscar" >
                                              
                                          </form>
	                  	  	  <hr>
                              <thead>
                              <tr>
                                  <th><i class="fa fa-bullhorn"></i>Nº</th>
                                  <th><i class=" fa fa-edit"></i>Referência</th>
                                  <th><i class=" fa fa-edit"></i>Movimento</th>
                                  <th><i class=" fa fa-edit"></i>Quantidade</th>
                                  <th><i class=" fa fa-edit"></i>Data</th>
                                  <th><i class=" fa fa-edit"></i>Preço Unt</th>
                                  <th><i class=" fa fa-edit"></i>Total</th>
                              </tr>
                              </thead>
                              <tbody>
                                  <?php foreach ($saidas as $sd){ ?>
                              <tr style="background-color:<?php if ($sd->tipoMovimentacao == 1) { echo "orange" ;} ?>">
                                  <td><a href="basic_table.html#"><?php echo $sd->id; ?></a></td>
                                  <td class="hidden-phone"><?php echo $sd->nome ?></td>
                                  <td class="hidden-phone">
                                      <?php if($sd->tipoMovimentacao == 1){echo "Saída";}  ?>
                                  </td>
                                  <td class="hidden-phone"><?php echo $sd->qtd ?></td>
                                  <td class="hidden-phone"><?php echo $sd->dataPedido ?></td>
                                  <td class="hidden-phone"><?php echo number_format($sd->precoUnt)."Kz" ?></td>
                                  <td class="hidden-phone"><?php echo number_format($sd->qtd*$sd->precoUnt)."Kz" ?></td>
                                  
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

