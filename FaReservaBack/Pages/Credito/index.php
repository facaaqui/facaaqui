<?php
session_start();
include '../../Apllication/core/FacadePrincipal.php';
$produtos = $facadePrincipal->produtoController()->getDTO()->findAllProduto(@$_SESSION['idMercado']);

$mercados = $facadePrincipal->mercadoController()->getDTO()->findAllMercado();
$mercadoImagen = $facadePrincipal->mercadoController()->getDTO()->findAllMercadoPic(@$_SESSION['idMercado']);

$pedidos = $facadePrincipal->pedidosDTO()->findAllPedidos(isset($_GET['param']) ? $_GET['param'] : null, isset($_SESSION['idColaborador']) ? $_SESSION['idColaborador'] : NULL );

$status1 = $facadePrincipal->pedidosDTO()->statusAll1();
$status2 = $facadePrincipal->pedidosDTO()->statusAll2();
$status3 = $facadePrincipal->pedidosDTO()->statusAll3();



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
     
 <style>
     #modalMercadosPedido{
         transition: .6s all;
         height: auto;
         position: fixed;
         width: 40%;
         background: #ddd;
         margin: 10% 25% 10%;
         left: -100%;
         z-index: 400;
         box-shadow: 2px 2px 3px black;
         /*border: 3px solid red;*/
         
     }        
     #modalMer{
         height: 300vh;
         position: absolute;
         width: 100vw;
         background: #000;
         z-index: 200;
         opacity: .6;
         
         
         
     }        
</style>
<script>
        
            function changeStatusMerc(numOrdem) {
                    xhr = new XMLHttpRequest();
                    url = "../../controllerGateway.php?controller=Pedidos&method=changeStatusMer&field[ItensPedido.numOrdem]="+numOrdem;
                    xhr.open("GET", url, true);
                    xhr.onreadystatechange = function () {
                        if (xhr.readyState == 4) {
//                            alert(xhr.responseText);
                            document.getElementById('btnPronto'+numOrdem).style.display = 'none';
                            document.getElementById('inputToken'+numOrdem).style.display = '';
                        }
                    }
                    xhr.send();
                    
                
            }
            function itensPedido(numOrdem) {
//                alert(numOrdem);
                    xhr = new XMLHttpRequest();
                    url = "../../controllerGateway.php?controller=ConsulVision&method=prodByPedido&field[ItensPedido.numOrdem]="+numOrdem;
                    xhr.open("GET", url, true);
                    xhr.onreadystatechange = function () {
                        if (xhr.readyState == 4) {
//                            alert(xhr.responseText);
                            document.getElementById('modalMercadosPedido').innerHTML = xhr.responseText;
                        }
                    }
                    xhr.send();
                    
                
            }
            function findMerc(id, sessao) {
                if (document.getElementById('localMerc' + id).style.display == 'none') {
                    xhr = new XMLHttpRequest();
                    url = "../../controllerGateway.php?controller=ConsulVision&method=mercByPedido&field[Pedidos.sessao]="+sessao;
                    xhr.open("GET", url, true);
                    xhr.onreadystatechange = function () {
                        if (xhr.readyState == 4) {
//                            alert(xhr.responseText);
                            document.getElementById('localMerc' + id).innerHTML = xhr.responseText;
                        }
                    }
                    xhr.send();
                    document.getElementById('localMerc' + id).style.display = '';
                } else
                    document.getElementById('localMerc' + id).style.display = 'none';
            }
            
            function openProd(){
                
                document.getElementById('modalMer').style.display = '';
                document.getElementById('modalMercadosPedido').style.left = '0%';
               
            }
            function closeProd(){
                document.getElementById('modalMercadosPedido').style.left = '-100%';
                document.getElementById('modalMer').style.display = 'none';
            }


</script>
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>
      <div id="modalMercadosPedido" >
             
        </div>
      <div id="modalMer" style="display: none;"></div>
        <!-- #########################DIV PRODUTOS##########################-->                      
        
  <section id="container"  >
      
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
                      <div class="content-panel">
                          
                          <table class="table table-striped table-advance table-hover">
                            <h4><i class="fa fa-angle-right"></i></h4>
                                          <form method="get" action="todosPedidos.php">
                                              CV0<input type="text" size="25" name="param">
                                          <input type="submit" value="buscar">
                            <hr>
                              <thead>
                              <tr>
                                  <th colspan="7"><i class="fa fa-bullhorn"></i>Nº</th>
                                  <th>Cliente</th>
                                  <th>Data</th>
                                  <th>Morada</th>
                                  <th>Email</th>
                                  <th></th>
                                  <th></th>
                                  <?php if($_SESSION['userTipo'] == 0){ ?>
                                  <th><i class=" fa fa-edit"></i>Op</th>
                                  <?php } ?>
                                  </tr>
                              </thead>
                              <tbody>
                                 <?php foreach ($pedidos as $pdd){ ?> 
                                 <tr style="background: #000">
                                  <td colspan="7"><a href="basic_table.html#"><?php echo "CV0".$pdd->id; ?></a></td>
                                  <td class="hidden-phone"><?php echo $pdd->nome ?></td>
                                  <td class="hidden-phone"><?php echo $pdd->dataPedido ?></td>
                                  <td class="hidden-phone"></td>
                                  <td class="hidden-phone"></td>
                                  <td class="hidden-phone"></td>
                                  <td class="hidden-phone"><a href="javascript: return false;" onclick="findMerc('<?php echo "$pdd->id"; ?>','<?php echo "$pdd->sessao"; ?>')">+</a></td>
                                  <?php if($_SESSION['userTipo'] == 0){ ?>
                                  <td>
                                      <!--<a href="../../controllerGateway.php?controller=Pedidos&method=actLastStatus&field[Pedidos.id]=<?php echo $pdd->id ?>" class="btn btn-success btn-xs"><i class="fa fa-check"></i></a>-->
                                      <!--<a class="btn btn-primary btn-xs"><i class="fa fa-pencil"></i></button>
                                      <a href="../../controllerGateway.php?controller=Pedidos&method=delPedido&field[Pedidos.id]=<?php echo $pdd->id ?>" class="btn btn-danger btn-xs"><i class="fa fa-trash-o "></i></a>
                                  </td>-->
                                  <?php } ?>
                              </tr>
                              <tr>
                                 <td id="localMerc<?php echo "$pdd->id"; ?>" colspan="17" style="display: none;background: #ddd;">&nbsp;</td>
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
              2014 - 2018 ConsulVision.Lda
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

