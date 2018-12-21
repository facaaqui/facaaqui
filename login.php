<?php
 // You have to download the Premium version to get working Contact form alongwith full documentation of the  template
?>
<!DOCTYPE HTML>

<html lang="en">
    
    <head>
            <title>Faça Aqui</title>
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1">
            <meta charset="UTF-8">

            <link rel="icon" href="faviconF.ico" type="image/x-icon">

               <style>
                body{
                    background: url('images/IMGS/IMG DIV SITE-19.jpg')
                }

            </style>

    </head>
    
    <!--================================
            INICIO DOCUMENTO GERAL
    ==================================-->
    
    <body>
        
        <?php include './includes/header.php'; ?>

        <section class="story-area left-text center-sm-text">
            
            <div class="container" style="margin-top: 30%">
                
                <form class="form-style-1 placeholder-1" method="post" action="FaReservaBack/controllerGateway.php?controller=Utilizador&method=logar" enctype="multipart/form-data">
                   
                    <div class="row">    <!-- ROW FECHADA EM BAIXO -->
                        
                        <div class="col-md-6"> <input class="mb-20" name="field[Utilizador.userName]" type="text" placeholder="Utilizador">  </div>
                        <div class="col-md-6"> <input class="mb-20" name="field[Utilizador.senha]" type="password" placeholder="Senha">  </div>
                        <?php if(count(@$_GET['mesage']) != 0) { ?>
                        <span style="color: red">*Utilizador ou senha incorrecta</span>
                        <?php } ?>
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        <a href="cliente.php" class="btn-group" style="font-size:12pt; text-align: center">Cadastrar-se</a>

                        <input type="submit" class="btn-group" style="background: #17a2b8;border-radius: 5%;margin-bottom: 10px; color: #fff;font-size:12pt " value="Entrar">

                    </div>    <!-- DIV CONTAINER ABERTA EM CIMA -->
                    
                </form>
                
            </div><!-- container -->
            
        </section>

        <?php #include './includes/footer.php'; ?>

    </body>
    
</html>