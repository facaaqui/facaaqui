<?php
session_start();
include '../../Apllication/core/FacadePrincipal.php';
$produtos = $facadePrincipal->produtoController()->getDTO()->findAllProduto($_SESSION['idMercado']);
$mercados = $facadePrincipal->mercadoController()->getDTO()->findAllMercado();
$mercadoImagen = $facadePrincipal->mercadoController()->getDTO()->findAllMercadoPic($_SESSION['idMercado']);
$pedidos = $facadePrincipal->pedidosDTO()->findPedidos($_SESSION['idMercado']);
$status1 = $facadePrincipal->pedidosDTO()->status1($_SESSION['idMercado']);
$status2 = $facadePrincipal->pedidosDTO()->status2($_SESSION['idMercado']);
$status3 = $facadePrincipal->pedidosDTO()->status3($_SESSION['idMercado']);

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
<script>
        
            function buscarItens(id, idMercado) {
                if (document.getElementById('localItens' + id).style.display == 'none') {
                    xhr = new XMLHttpRequest();
                    url = "../../controllerGateway.php?controller=Pedidos&method=itensPedidoBack&field[Pedidos.sessao]=" +id+"&field[Pedidos.idMercado]="+idMercado;
                    xhr.open("GET", url, true);
                    //xhrEnco.send();
                    xhr.onreadystatechange = function () {
                        if (xhr.readyState == 4) {
                            //alert(xhrEnco.responseText);
                            document.getElementById('localItens' + id).innerHTML = xhr.responseText;
                        }
                    }
                    xhr.send();
                    document.getElementById('localItens' + id).style.display = '';
                } else
                    document.getElementById('localItens' + id).style.display = 'none';
            }


</script>
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
          	<h3><i class="fa fa-angle-right"></i> Pedidos</h3>
                <div style="margin-left: 20%;margin-bottom: -6%;margin-top: -9%">
      <?php include '../includes/dashBoard.php';  ?>
      </div>
          	
          	<!-- BASIC FORM ELELEMNTS -->
          	<div class="row mt">
          		<div class="col-lg-12">
                  
                  <div class="row mt">
                      
                  <div class="col-md-12">
                      <div class="content-panel" style="">
                          <table class="table table-striped table-advance table-hover">
	                  	  	  <h4><i class="fa fa-angle-right"></i></h4>
	                  	  	  <hr>
                              <thead>
                              <tr>
                                  <th><i class="fa fa-bullhorn"></i>Nº</th>
                                  <th class="hidden-phone"><i class="fa fa-question-circle"></i>Nome</th>
                                  <th><i class="fa fa-bookmark"></i>Status</th>
                                  <th><i class="fa fa-bookmark"></i></th>
                                  <!--<th><i class=" fa fa-edit"></i>Op</th>-->
                                  <!--<th></th>-->
                              </tr>
                              </thead>
                              <tbody>
                                  <?php foreach ($pedidos as $pdd){ ?>
                              <tr>
                                  <td><a href="basic_table.html#"><?php echo "CV0".$pdd->id; ?></a></td>
                                  <td class="hidden-phone"><?php echo $pdd->nome ?></td>
                                  <td class="hidden-phone">
                                      <?php 
                                      if($pdd->status == 1){
                                          echo "Processando";
                                      }else{
                                          echo "Entregue";
                                      } 
                                      ?>
                                  </td>
                                  <td class="hidden-phone"><a href="javascript: return false;" onclick="buscarItens('<?php echo "$pdd->sessao"; ?>','<?php echo $_SESSION['idMercado'] ?>')">ver Produtos</a></td>
<!--                                  <td>
                                      <button class="btn btn-success btn-xs"><i class="fa fa-check"></i></button>
                                      <button class="btn btn-primary btn-xs"><i class="fa fa-pencil"></i></button>
                                      <button class="btn btn-danger btn-xs"><i class="fa fa-trash-o "></i></button>
                                  </td>-->
                              </tr>
                              <tr>
                                 <td id="localItens<?php echo "$pdd->sessao"; ?>" colspan="7" style="display: none">&nbsp;</td>
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

