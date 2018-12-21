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
    <style>
        body{
            padding: 0
        }
                 
            	nav#menu {
            	
                margin: 0px -150px 0px -250px;
                color: #fff;
                }
            	nav#menu ul{
            		list-style: none;
            		text-transform: uppercase;
                        }
                
                nav#menu li{
                	display: inline-block;
                	background-color: rgb(240,118,34);
                	padding: 10px;
                	margin: 2px; 
                	transition: background-color 1s;
                }

                nav#menu li:hover{
                	background-color: #606060;
                }

                nav#menu a{
                	color: #000000;
                	text-decoration: none;
                }
                
                #modalLogin{
                    position: absolute;
                    margin: 10% 40% 10% 40%;
                    
                }
                
                #sideRight,#sideLeft{
                    float: left;
                    height: 850px; 
                }
                #sideRight{
                    padding-left: 0; 
                }
                #sideLeft{
                    padding-left: 2%; 
                }
                
    </style>
    
    <title>ConsulVision</title>

    <!-- Bootstrap core CSS -->
    <link href="assets/css/bootstrap.css" rel="stylesheet">
    <!--external css-->
    <link href="assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
    <link rel="stylesheet" type="text/css" href="assets/css/zabuto_calendar.css">
    <link rel="stylesheet" type="text/css" href="assets/js/gritter/css/jquery.gritter.css" />
    <link rel="stylesheet" type="text/css" href="assets/lineicons/style.css">    
    
    <!-- Custom styles for this template -->
    <link href="assets/css/style.css" rel="stylesheet">
    <link href="assets/css/style-responsive.css" rel="stylesheet">

    <script src="assets/js/chart-master/Chart.js"></script>
    
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>
      <form method="post" action="../controllerGateway.php?controller=cliente&method=save">
      <section id="container" style="background: #fff; padding: 0;margin: 0;">
      <!-- **********************************************************************************************************************************************************
      TOP BAR CONTENT & NOTIFICATIONS
      *********************************************************************************************************************************************************** -->
      <!--header start-->
      <?php include './includes/menuInicial.php'; ?>
      <!--sidebar end-->
      
      <!-- **********************************************************************************************************************************************************
      MAIN CONTENT
      *********************************************************************************************************************************************************** -->
      <!--main content start-->
      <section id="main-content" >
          <section class="wrapper" >
              <div style="width: 100%">
              <nav id="menu" >
               <?php include './includes/menuSuperior.php'; ?>
              </div>
              
              <div id="sideLeft" style="margin-left: -230px;width: 75%;border: 1px solid black">
                  <div>Faça aqui o seu registo</div>
               
                  <div><span>Dados<hr></span></div>
                  <div class="col-md-12">
                       <div class="form-group">
                                    <label class="col-sm-3 control-label">Tipo:</label>
                                    <div class="col-sm-6">
                                        Física<input type="radio" name="" /> |
                                        Júridica<input type="radio" name=""/>
                                         </div>
                                </div>  
                 </div>
                 
                  <div class="col-md-12">
                       <div class="form-group">
                                    <label class="col-sm-3 control-label">Nome:</label>
                                    <div class="col-sm-6">
                                        <input type="text" name="field[Cliente.nome]" 
                                               placeholder="<?php echo "digite o nome"; ?>" class="form-control" 
                                               value="<?php ?>"  required/>
                                         </div>
                                </div>  
                 </div>
                 
                       <div class="form-group col-md-12">
                                    <label class="col-sm-3 control-label">NIF:</label>
                                    <div class="col-sm-6">
                                        <input type="text" name="field[Cliente.nif]" 
                                               placeholder="<?php echo "digite o NIF"; ?>" class="form-control" 
                                               value="<?php ?>"  required/>
                                         </div>
                                </div> 
                       <div class="form-group col-md-12">
                                    <label class="col-sm-3 control-label">Telefone:</label>
                                    <div class="col-sm-6">
                                        <input type="text" name="field[Cliente.telefone]" 
                                               placeholder="<?php echo "ex:923 000 000"; ?>" class="form-control" 
                                               value="<?php ?>"  required/>
                                         </div>
                                </div> 
                       <div class="form-group col-md-12">
                                    <label class="col-sm-3 control-label">Cadeira:</label>
                                    <div class="col-sm-6">
                                        <input type="text" name="field[Cliente.email]" 
                                               placeholder="<?php echo "ex: exemple@exemple.com"; ?>" class="form-control" 
                                               value="<?php ?>" />
                                         </div>
                                </div>
                  
                  <div><span>Endereco<hr></span></div>
                       <div class="form-group col-md-12">
                                    <label class="col-sm-3 control-label">Provincia:</label>
                                    <div class="col-sm-6">
                                        <input type="text" name="field[Endereco.provincia]" 
                                               placeholder="<?php echo "digite a Provincia"; ?>" class="form-control" 
                                               value="<?php ?>"  required/>
                                         </div>
                                </div> 
                       <div class="form-group col-md-12">
                                    <label class="col-sm-3 control-label">Municipo:</label>
                                    <div class="col-sm-6">
                                        <input type="text" name="field[Endereco.municipio]" 
                                               placeholder="<?php echo "digite o Municipo"; ?>" class="form-control" 
                                               value="<?php ?>"  required/>
                                         </div>
                                </div> 
                       <div class="form-group col-md-12">
                                    <label class="col-sm-3 control-label">Distrito:</label>
                                    <div class="col-sm-6">
                                        <input type="text" name="field[Endereco.distrito]" 
                                               placeholder="<?php echo "digite o Distrito"; ?>" class="form-control" 
                                               value="<?php ?>" />
                                         </div>
                                </div> 
                       <div class="form-group col-md-12">
                                    <label class="col-sm-3 control-label">Rua:</label>
                                    <div class="col-sm-6">
                                        <input type="text" name="field[Endereco.rua]" 
                                               placeholder="<?php echo "digite a Rua"; ?>" class="form-control" 
                                               value="<?php ?>" />
                                         </div>
                                </div> 
                       <div class="form-group col-md-12">
                                    <label class="col-sm-3 control-label">Apartamento Nº:</label>
                                    <div class="col-sm-6">
                                        <input type="text" name="field[Endereco.apartamento]" 
                                               placeholder="<?php echo "digite o número do apartamento"; ?>" class="form-control" 
                                               value="<?php ?>" />
                                         </div>
                                </div> 
                  <div><span>Dados Login<hr></span></div>
                       <div class="form-group col-md-12">
                                    <label class="col-sm-3 control-label">Utilizador:</label>
                                    <div class="col-sm-6">
                                        <input type="text" name="field[Utilizador.userName]" 
                                               placeholder="<?php echo ""; ?>" class="form-control" 
                                               value="<?php ?>"  required/>
                                         </div>
                                </div> 
                  
                       <div class="form-group col-md-12">
                                    <label class="col-sm-3 control-label">Senha:</label>
                                    <div class="col-sm-6">
                                        <input type="password" name="field[Utilizador.senha]" 
                                               placeholder="<?php echo ""; ?>" class="form-control" 
                                               value="<?php ?>"  required/>
                                         </div>
                                </div> 
                  
                       <div class="form-group col-md-12">
                                    <label class="col-sm-3 control-label">Confirmar Senha:</label>
                                    <div class="col-sm-6">
                                        <input type="password" name="" 
                                               placeholder="<?php echo ""; ?>" class="form-control" 
                                               value="<?php ?>"  required/>
                                         </div>
                                </div> 
                       <div class="form-group col-md-12">
                                    <div class="col-sm-6">
                                        <input type="submit" class="form-control" value="Cadastrar"  />
                                         </div>
                                </div> 
                  
                  
              </div>

              <div id="sideRight" style="width: 25%;margin-right: 0px">
                  <img src="img/23.jpg" width="560" height="850" >
              </div>
     
          </section>
      </section>

      <!--main content end-->
      <!--footer start-->
      <footer class="site-footer">
          <div class="text-center">
              &copy 2018
              <a href="index.html#" class="go-top">
                  <i class="fa fa-angle-up"></i>
              </a>
          </div>
      </footer>
      <!--footer end-->
  </section>
</form>
    <!-- js placed at the end of the document so the pages load faster -->
    <script src="assets/js/jquery.js"></script>
    <script src="assets/js/jquery-1.8.3.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script class="include" type="text/javascript" src="assets/js/jquery.dcjqaccordion.2.7.js"></script>
    <script src="assets/js/jquery.scrollTo.min.js"></script>
    <script src="assets/js/jquery.nicescroll.js" type="text/javascript"></script>
    <script src="assets/js/jquery.sparkline.js"></script>


    <!--common script for all pages-->
    <script src="assets/js/common-scripts.js"></script>
    
    <script type="text/javascript" src="assets/js/gritter/js/jquery.gritter.js"></script>
    <script type="text/javascript" src="assets/js/gritter-conf.js"></script>

    <!--script for this page-->
    <script src="assets/js/sparkline-chart.js"></script>    
	<script src="assets/js/zabuto_calendar.js"></script>	
	
	<script type="text/javascript">
        $(document).ready(function () {
        var unique_id = $.gritter.add({
            // (string | mandatory) the heading of the notification
            title: 'Welcome to Dashgum!',
            // (string | mandatory) the text inside the notification
            text: 'Hover me to enable the Close Button. You can hide the left sidebar clicking on the button next to the logo. Free version for <a href="http://blacktie.co" target="_blank" style="color:#ffd777">BlackTie.co</a>.',
            // (string | optional) the image to display on the left
            image: 'assets/img/ui-sam.jpg',
            // (bool | optional) if you want it to fade out on its own or just sit there
            sticky: true,
            // (int | optional) the time you want it to be alive for before fading out
            time: '',
            // (string | optional) the class name you want to apply to that specific message
            class_name: 'my-sticky-class'
        });

        return false;
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

