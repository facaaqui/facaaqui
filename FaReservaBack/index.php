<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */?>
<!DOCTYPE html>
<html lang="en">
  <head>
      
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Dashboard">
    <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">
    <script>
          function mercado(idMercado){
              document.getElementById('idMerc').value = idMercado;
    }
    
    
    </script>
    <title></title>

    <!-- Bootstrap core CSS -->
    <link href="Pages/assets/css/bootstrap.css" rel="stylesheet">
    <!--external css-->
    <link href="Pages/assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
        
    <!-- Custom styles for this template -->
    <link href="Pages/assets/css/style.css" rel="stylesheet">
    <link href="Pages/assets/css/style-responsive.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>

      <!-- **********************************************************************************************************************************************************
      MAIN CONTENT
      *********************************************************************************************************************************************************** -->

	  <div id="login-page">
	  	<div class="container">
	  	
                    <form class="form-login" action="controllerGateway.php?controller=Utilizador&method=logar" method="post">
		        <h2 class="form-login-heading">Login</h2>
		        <div class="login-wrap">
                            <input type="text" class="form-control" name="field[Utilizador.userName]" placeholder="Utilizador" autofocus>
		            <br>
                            <input type="password" class="form-control" name="field[Utilizador.senha]" placeholder="Senha">
		            <label class="checkbox">
		            	<?php if(count(@$_GET['mesage']) != 0 ){ ?>
                                <span style="color: red">Utilizador ou senha errada</span>
                                <?php } ?>
		                <span class="pull-right">
		                    <a data-toggle="modal" href="login.html#myModal"> Autenticar </a>
		   </span>
		            </label>
                            <input class="btn btn-theme btn-block" type="submit" value="Entrar">
		            <hr>
		            
<!--		            <div class="login-social-link centered">
		            <p>or you can sign in via your social network</p>
		                <button class="btn btn-facebook" type="submit"><i class="fa fa-facebook"></i> Facebook</button>
		                <button class="btn btn-twitter" type="submit"><i class="fa fa-twitter"></i> Twitter</button>
		            </div>
		            <div class="registration">
		                Don't have an account yet?<br/>
		                <a class="" href="#">
		                    Create an account
		                </a>
		            </div>-->
		
		        </div>
		</form>
		          <!-- Modal -->
                          <form action="controllerGateway.php?controller=Utilizador&method=autenticar" method="post"> 
		          <div aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" tabindex="-1" id="myModal" class="modal fade">
		              <div class="modal-dialog">
		                  <div class="modal-content">
		                      <div class="modal-header">
		                          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
		                          <h4 class="modal-title">Autenticação</h4>
		                      </div>
                                  
		                      <div class="modal-body">
		                          <p>Preencha os campos abaixo para efectuar a autenticação</p>
                                          <input type="text" name="field[Utilizador.idColaborador]" id="idMercado" onchange="mercado(this.value)" placeholder="Nº Identificação" autocomplete="off" class="form-control"><br>
                                          <input type="hidden" name="" id="idMerc" class="form-control">
		                          <input type="text" name="field[Utilizador.userName]" placeholder="Utilizador" autocomplete="off" class="form-control"><br>
                                          <input type="password" name="field[Utilizador.senha]" placeholder="Senha" autocomplete="off" class="form-control"><br>
                                          <input type="password" name="" placeholder="Repetir a Senha" autocomplete="off" class="form-control">
		
		                      </div>
		                      <div class="modal-footer">
		                          <button data-dismiss="modal" class="btn btn-default" type="button">Cancel</button>
                                          <button class="btn btn-theme" type="submit">Concluir</button>
		                      </div>
		                  </div>
		              </div>
		          </div>
                              </form>
		          <!-- modal -->
		
		      	  	
	  	
	  	</div>
	  </div>

    <!-- js placed at the end of the document so the pages load faster -->
    <script src="Pages/assets/js/jquery.js"></script>
    <script src="Pages/assets/js/bootstrap.min.js"></script>

    <!--BACKSTRETCH-->
    <!-- You can use an image of whatever size. This script will stretch to fit in any screen size.-->
    <script type="text/javascript" src="Pages/assets/js/jquery.backstretch.min.js"></script>
    <script>
        $.backstretch("Pages/assets/img/fundo-cinza.jpg", {speed: 500});
    </script>


  </body>
</html>


