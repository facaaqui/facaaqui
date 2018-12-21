<?php
session_start();
include '../../Apllication/core/FacadePrincipal.php';
#$produtos = $facadePrincipal->mercadoController()->getDTO()->mercadoDeligence();
$mercados = $facadePrincipal->mercadoController()->getDTO()->findAllMercadoStatus(isset($_GET['param']) ? $_GET['param'] : null);
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
    
    <script>
           function direccionamento(){
               document.getElementById('modalInfo').style.display = "";
           }     
    
    </script>
    
  </head>
  <body>
  <section id="container"  >
      
      <!-- **********************************************************************************************************************************************************
      TOP BAR CONTENT & NOTIFICATIONS
      *********************************************************************************************************************************************************** -->
      <?php include '../includes/menuNavegacao.php'; ?>
      <!--sidebar end-->
      <div id="modalInfo" style="display: none;height: 50%;width: 30%;background: #000;position: absolute;z-index: 30">kkjkjk</div>
      <!-- **********************************************************************************************************************************************************
      MAIN CONTENT
      *********************************************************************************************************************************************************** -->
      <!--main content start-->
      <section id="main-content">
          
          <section class="wrapper">
            <h3><i class="fa fa-angle-right"></i>Due Deligence</h3>
<!--                <div style="margin-left: 20%;margin-bottom: -6%;margin-top: -9%">
      <?php# include '../includes/dashBoard.php';  ?>
      </div>-->
            
            <!-- BASIC FORM ELELEMNTS -->
            
            <div class="row mt">
              <div class="col-lg-12">
                  
                  <div class="row mt">
                      
                  <div class="col-md-12">
                      <div class="content-panel">
                          
                          <table class="table table-striped table-advance table-hover">
                            <h4><i class="fa fa-angle-right"></i></h4>
                            <form method="get" action="index.php">
                                              <input type="text" size="25" name="param">
                                          <input type="submit" value="buscar">
                            <hr>
                              <thead>
                               <tr>
                                  <th><i class="fa fa-bullhorn"></i>Nº</th>
                                  <th class="hidden-phone"><i class="fa fa-question-circle"></i>Empresa</th>
                                  <th class="hidden-phone"><i class="fa fa-question-circle"></i>Marca</th>
                                  <th class="hidden-phone"><i class="fa fa-question-circle"></i>NIF</th>
                                  <th class="hidden-phone"><i class="fa fa-question-circle"></i>Email</th>
                                  <th class="hidden-phone"><i class="fa fa-question-circle"></i>Endereço</th>
                                  <th class="hidden-phone"><i class="fa fa-question-circle"></i>foto</th>
                                  <th><i class="fa fa-bookmark"></i></th>
                                  </tr>
                              </thead>
                              <tbody>
                                    <?php foreach ($mercados as $merc){ ?>
                                  <tr onclick="direccionamento()">
                                  <td><a href="basic_table.html#"><?php echo $merc->id; ?></a></td>
                                  <td class="hidden-phone"><?php echo $merc->nomeEmpresa ?></td>
                                   <td class="hidden-phone"><?php echo $merc->marca ?></td>
                                   <td class="hidden-phone"><?php echo $merc->nif ?></td>
                                   <td class="hidden-phone"><?php echo $merc->email ?></td>
                                   <td class="hidden-phone"><?php echo $merc->endereco ?></td>
                                   <td class="hidden-phone"><img src="../img/Colaboradores/<?php echo $merc->foto ?>" width="25" height="25"></td>
                                  <td>
                                      <a href="../../controllerGateway.php?controller=Mercado&method=aprovado&field[Mercado.id]=<?php echo $merc->id ?>" class="btn btn-success btn-xs"><i class="fa fa-check"></i></a>
                                      <!--<a href="" class="btn btn-danger btn-xs"><i class="fa fa-trash-o "></i></a>-->
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

