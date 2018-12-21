<?php
session_start();
include '../../Apllication/core/FacadePrincipal.php';
$view = $facadePrincipal->utilizadorController()->getDTO()->views();
$viewDay = $facadePrincipal->utilizadorController()->getDTO()->viewsDay(date('d-m-Y'));
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
                  <div class="col-lg-9 main-chart" style="margin: 5% 30% 0% 30%">
                        <div class="row mtbox" style="margin-left: 20%" >
                            
                            <div class="col-md-2 col-sm-2 col-md-offset-1 box0">
                  			<div class="box1">
                                            <span class=""><img src="../img/Coins_48px.png"></span>
                                            <h6><?php echo "Nº total de Visitas" ?></h6>
                                            <h3><?php echo $view[0]->view ?></h3>
                                       </div>
                                    <!--<p><?php #echo $resumo[0]->qtd  ?>&nbsp;Em Quantidades!</p>-->
                  		</div>
                        	
                  	</div><!-- /row mt -->	
                        <div class="row mtbox" style="margin-left: 20%" >
                            
                            <div class="col-md-2 col-sm-2 col-md-offset-1 box0">
                  			<div class="box1">
                                            <span class=""><img src="../img/Coins_48px.png"></span>
                                            <h6><?php echo "Visitas de Hoje" ?></h6>
                                            <h3><?php echo $viewDay[0]->view ?></h3>
                                       </div>
                                    <!--<p><?php #echo $resumo[0]->qtd  ?>&nbsp;Em Quantidades!</p>-->
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

