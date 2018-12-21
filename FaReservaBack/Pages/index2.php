<?php
session_start();
include '../../Apllication/core/FacadePrincipal.php';
#$resumo = $facadePrincipal->mercadoController()->getDTO()->findResumo(isset($_SESSION['idColaborador']) ? $_SESSION['idColaborador'] : null);
//$arrecadacao = $facadePrincipal->mercadoController()->getDTO()->findArrecadacao(isset($_SESSION['idColaborador']) ? $_SESSION['idColaborador'] : null);

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
?>
<!DOCTYPE html>
<!--<html lang="en">
  <head>--><meta charset="utf-8">
     <link href="../assets/css/bootstrap.css" rel="stylesheet">
    <!--external css-->
    <link rel="stylesheet" type="text/css" href="../assets/css/zabuto_calendar.css">
    <link rel="stylesheet" type="text/css" href="../assets/js/gritter/css/jquery.gritter.css" />
    <link rel="stylesheet" type="text/css" href="../assets/lineicons/style.css">    
     <link href="../assets/css/style.css" rel="stylesheet">
    
     <!--Custom styles for this template--> 
     <script src="../assets/js/chart-master/Chart.js"></script>
    
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
<!--  </head>

  <body>-->
<?php include '../includes/menuNavegacao.php'; ?>
  <section id="container" >
      <!-- **********************************************************************************************************************************************************
      MAIN CONTENT
      *********************************************************************************************************************************************************** -->
      <!--main content start-->
<!--      <section id="main-content">
          <section class="wrapper">-->

      <div class="row" >
                  <div class="col-lg-9 main-chart" style="margin: 5% 30% 0% 15%">
                        <div class="row mtbox" style="margin-left: 20%" >
                            
                            <div class="col-md-2 col-sm-2 col-md-offset-1 box0">
                  			<div class="box1">
                                            <span class=""><img src="../img/Coins_48px.png"></span>
                                            <h6><?php #echo "Quantidade Vendida" ?></h6>
                                            <h3><?php #echo $resumo[0]->qtd ?></h3>
                                       </div>
                                    <p><?php #echo $resumo[0]->qtd  ?>&nbsp;Em Quantidades!</p>
                  		</div>
                            
                        	<div class="col-md-2 col-sm-2 box0">
                  			<div class="box1">
                                            <span class=""><img src="../img/Receive Cash_50px.png"></span>
					  			<h6><?php #echo "Arrecadação líquida" ?></h6>
					  			<h3><?php #echo number_format($resumo[0]->liquido,2,',','.')."Kz" ?></h3>
                  			</div>
                                    <p><?php // #echo number_format($resumo[0]->liquido,2,',','.')."Kz" ?>&nbsp;Em arrecadação líquida </p>
                  		</div>
                            	
                        
                  		
                  	</div><!-- /row mt -->	
                       		
                  </div><!-- /col-lg-9 END SECTION MIDDLE -->
                  
                  
      <!-- **********************************************************************************************************************************************************
      RIGHT SIDEBAR CONTENT
      *********************************************************************************************************************************************************** -->                  
                  
              </div><! --/row -->
              
               
          </section>

      </section>

      <!--main content end-->
      <!--footer start-->
<!--      <footer class="site-footer">
          <div class="text-center">
              2014 - Alvarez.is
              <a href="index.html#" class="go-top">
                  <i class="fa fa-angle-up"></i>
              </a>
          </div>
      </footer>-->
      <!--footer end-->
  <!--</section>-->

    <!-- js placed at the end of the document so the pages load faster -->
    <script src="../assets/js/jquery-1.8.3.min.js"></script>
    <script src="../assets/js/jquery.nicescroll.js" type="text/javascript"></script>
    <script src="../assets/js/jquery.sparkline.js"></script>


    <!--common script for all pages-->
    
    <script type="text/javascript" src="../assets/js/gritter/js/jquery.gritter.js"></script>
    <script type="text/javascript" src="../assets/js/gritter-conf.js"></script>

    <!--script for this page-->
    <script src="../assets/js/sparkline-chart.js"></script>    
    <script src="../assets/js/zabuto_calendar.js"></script>	
	
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


	
	<script type="application/javascript">
        $(document).ready(function () {
            $("#date-popover").popover({html: true, trigger: "manual"});
            $("#date-popover").hide();
            $("#date-popover").click(function (e) {
                $(this).hide();
            });
        
            $("#my-calendar").zabuto_calendar({
                action: function () {
                    return myDateFunction(this.id, false);
                },
                action_nav: function () {
                    return myNavFunction(this.id);
                },
                ajax: {
                    url: "show_data.php?action=1",
                    modal: true
                },
                legend: [
                    {type: "text", label: "Special event", badge: "00"},
                    {type: "block", label: "Regular event", }
                ]
            });
        });
        
        
        function myNavFunction(id) {
            $("#date-popover").hide();
            var nav = $("#" + id).data("navigation");
            var to = $("#" + id).data("to");
            console.log('nav ' + nav + ' to: ' + to.month + '/' + to.year);
        }
    </script>
  

  </body>
</html>

