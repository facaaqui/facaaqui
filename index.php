<?php
session_start();
include 'Apllication/core/FacadePrincipal.php';
$mercados = $facadePrincipal->mercadoDTO()->findAllMercado();
?>
<!DOCTYPE HTML>
<html lang="pt">
    
    <head>
            <title>Faça Aqui</title>
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1">
            <meta charset="UTF-8">
            <link rel="stylesheet" href="css/style_test.css"/>    <!-- STYLESHEET TEST -->
            <link rel="icon" href="faviconF.ico" type="image/x-icon">
            
            <style>
                
                body{
                    background: url('images/IMGS/IMG DIV SITE-19.jpg')
                }

            </style>
            
            <script>
                function mostrarMercados(){
                    var provincia = document.getElementById('provincia').value;
                    var bairro = document.getElementById('bairro').value;
                    var parametro = document.getElementById('param').value;
                 var xhr = new XMLHttpRequest();
                 var url = "FaReservaBack/controllerGateway.php?controller=FacaAqui&method=findMercado&field[Mercado.id]&provincia="+provincia+"&bairro="+bairro+"&param="+parametro;
                 xhr.open("GET",url,true);
                 xhr.send();
                 xhr.onreadystatechange = function(){
                     if(xhr.readyState == 4 ){
                           document.getElementById('mercados').innerHTML = xhr.responseText ;
                  }
                 }
               }



               function openFiltro(){
                   document.getElementById('filtro').style.display="";

               }
            </script>

    </head>
    
    
            <!--================================
                  INICIO DOCUMENTO GERAL
           ==================================-->
    
    
    <body onload="mostrarMercados()">
        
                 <?php include './includes/header.php'; ?>
        <br>

             <!--================================
                          SECTION
           ==================================-->

        <section class="pai">
        
            <div   >  <!-- CONTAINER FECHADO ABAIXO -->
                    
                        <!--================================
                         FILTRO Escreva aqui o que procuras
                       ==================================-->                        

                    <div class="oqueprocuras">  <!-- ROW FECHADA EM BAIXO -->
                        
                        <input type="text" style="" placeholder="Escreva aqui o que procura" class="form-control" oninput="mostrarMercados()" id="param">
                        
                        <div id="filtro">  <!-- DIV FECHADA EM BAIXO -->
                            
                            Filtrar por: <br>


                             <!--================================
                                         PROVINCIAS
                              ==================================-->

                            <select id="provincia" type="text" placeholder="Província" onchange="mostrarMercados()" class="form-control">
                                                <option value="">Província</option>
                                                <option value="Bengo">Bengo</option>
                                                <option value="Benguela">Benguela</option>
                                                <option value="Bié">Bié</option>
                                                <option value="Cabinda">Cabinda</option>
                                                <option value="Cuando-Cubango">Cuando-Cubango</option>
                                                <option value="Cuanza Norte">Cuanza Norte</option>
                                                <option value="Cuanza Sul">Cuanza Sul</option>
                                                <option value="Cunene">Cunene</option>
                                                <option value="Huambo">Huambo</option>
                                                <option value="Huíla">Huíla</option>
                                                <option value="Luanda">Luanda</option>
                                                <option value="Lunda Norte">Lunda Norte</option>
                                                <option value="Lunda Sul">Lunda Sul</option>
                                                <option value="Malanje">Malanje</option>
                                                <option value="Moxico">Moxico</option>
                                                <option value="Namibe">Namibe</option>
                                                <option value="Uíge">Uíge</option>
                                                <option value="Zaire">Zaire</option>
                            </select>  

                             <!--================================
                                           BAIRROS        
                              ==================================-->

                            <input type="text" style="" placeholder="Bairro" class="form-control" oninput="mostrarMercados()" id="bairro">


                           <!--================================
                                    CHAMAR OS MERCADOS    
                              ==================================-->

                         </div>  <!-- FLITRO ABERTO EMCIMA-->

                    </div> <!-- DIV ABERTA EMCIMA -->   
                    
                        <div class="chamar-mercados">

                            <br>
                            <span class="active" style="display: none" data-select="*">    </span> 
                            <div class="col-md-6 food-menu pizza "  id="mercados">         </div>

                        </div><!--col-sm-12-->
                        
            </div> <!-- CONTAINER ABERTO EMCIMA -->
            
            
    </section>
             
             
            <!--================================
                      FIM DA SECTION
           ==================================-->  
          
    <?php include './includes/footer.php'; ?>

    </body>
    
</html>

