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
                    background: url('images/IMGS/IMG DIV SITE-19.jpg');
                }

        </style>

    </head>
    
    <!--================================
            INICIO DOCUMENTO GERAL
    ==================================-->
    
    <body>
        
        <?php include './includes/header.php'; ?>

        <section class="story-area left-text center-sm-text">
            
            <div class="container" style="margin-top: 10%">
                
                <form class="form-style-1 placeholder-1" method="post" action="FaReservaBack/controllerGateway.php?controller=Cliente&method=save">
                                
                    <div class="row">  <!-- ROW FECHADA EM BAIXO -->  
                        
                        <div class="col-md-6"> <input class="mb-20" name="field[Cliente.nome]" required type="text" placeholder="Nome">  </div>
                        <div class="col-md-6"> <input class="mb-20" name="field[Cliente.telefone]" required type="text" placeholder="Telefone">  </div>
                        <div class="col-md-6"> <input class="mb-20" name="field[Cliente.email]" type="text" placeholder="Email"></div>

                        <legend>Dados do Login</legend>
                        <div class="col-md-6"> <input class="mb-20" name="field[Utilizador.userName]" required type="text" placeholder="Nome do Utilizador">  </div>
                        <div class="col-md-6"> <input class="mb-20" name="field[Utilizador.senha]" type="password" required placeholder="Senha">  </div>
                        <div class="col-md-6"> <input class="mb-20" name="" type="password" required placeholder="Confirmar Senha">  </div>


                        <h6 class="center-text mtb-30"><input type="submit" class="btn-group" style="background: #17a2b8" value="Cadastrar-se"></h6>
                    
                    </div>  <!-- ROW ABERTA EM CIMA -->  
                       
                </form>
                
               
        </section>

        <?php include './includes/footer.php'; ?>

    </body>
    
</html>