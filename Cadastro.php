<?php
session_start();
include 'Apllication/core/FacadePrincipal.php';
$mercadosByUser = $facadePrincipal->mercadoDTO()->findAllMercadoByIdUser($_SESSION['logedUserId']);
$docActual = $facadePrincipal->mercadoDTO()->findAllMercadoById(@$_GET['idEmpresa']);
$sector = $facadePrincipal->mercadoDTO()->findSector();
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

      <script type="text/javascript" src="Apllication/core/lib/UIComponent/nakassonyComponent.js"></script>
       
      <script>
            
            window.addEventListener('load',defineComponent,true);
            window.addEventListener('load',selectInit,true);

           function selectInit() {
                       populateSelect('Mercado.servico', '<?php echo @$docActual[0]->idSector ?>');
                       populateSelect('Mercado.provincia', '<?php echo @$docActual[0]->provincia ?>');
                   }
                   function populateSelect(elm, value) {
                       try {
                           document.getElementById(elm).value = value;
                       } catch (e) {
                           //  
                       }
                   }

      </script>

    </head>
    
    <!--================================
            INICIO DOCUMENTO GERAL
    ==================================-->
    
    <body>
        
        <?php include './includes/header.php'; ?>

        <section class="story-area left-text center-sm-text">
            
            <div class="container" style="margin-top: 10%">    <!-- DIV CONTAINER FECHADA EM BAIXO -->
                
                <form class="form-style-1 placeholder-1" method="post" action="FaReservaBack/controllerGateway.php?controller=Mercado&method=save" enctype="multipart/form-data">
                               
                    <div class="row">    <!-- ROW FECHADA EM BAIXO -->
                        
                        <div class="col-md-6"> 
                            
                            <div class="col-md-6"> <input class="mb-20" name="field[Mercado.id]"  type="hidden" value="<?php echo @$docActual[0]->id ?>">  </div>
                            <div class="col-md-6"> <input class="mb-20" name="field[Mercado.statusDeligence]"  type="hidden" value="<?php echo @$docActual[0]->statusDeligence ?>">  </div>

                            <select class="mb-20" name="field[Mercado.idSector]" id="Mercado.servico">
                                <option value="">Sector</option>
                                <?php foreach ($sector as $s){ ?>
                                <option value="<?php echo $s->id ?>"><?php echo $s->descricao ?></option>
                                <?php } ?>
                            </select>
                            
                        </div>
                        
                        <div class="col-md-6"> <input class="mb-20" name="field[Mercado.nome]" type="text" placeholder="Name da Empresa" value="<?php echo @$docActual[0]->nome ?>">  </div>
                                         
                            <?php if(count(@$_GET['idEmpresa']) == 0 ){ ?>
                            <legend>Logotipo da Empresa:</legend><div class="col-md-6"> <input class="mb-20" name="field[Mercado.foto]"  type="file" placeholder="Imagem1" value="<?php echo @$docActual[0]->foto ?>">  </div>
                            <?php } ?>
                            <?php if(count(@$_GET['idEmpresa']) != 0 ){ ?>
                            <div class="col-md-6"> <input class="mb-20" name="field[Mercado.foto]"  type="hidden" placeholder="Imagem1" value="<?php echo @$docActual[0]->foto ?>">  </div>
                            <?php } ?>
                            <div class="col-md-6"> <input class="mb-20" name="field[Mercado.telefone]" type="text" placeholder="Telefone" value="<?php echo @$docActual[0]->telefone ?>">  </div>
                            <div class="col-md-6"> <input class="mb-20" name="field[Mercado.email]" type="text" placeholder="Email" value="<?php echo @$docActual[0]->email ?>">  </div>
                            <div class="col-md-6"> <input class="mb-20" name="field[Mercado.nif]" type="text" placeholder="NIF" value="<?php echo @$docActual[0]->nif ?>">  </div>
                            
                            <div class="col-md-6"> 
                                
                                <select class="mb-20" name="field[Mercado.provincia]" id="Mercado.provincia" type="text" placeholder="Província">
                                   
                                    <option value="">Selecione a Província</option>
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
                                
                            </div>
                                       
                            <div class="col-md-6"> <input class="mb-20" name="field[Mercado.municipio]" type="text" placeholder="Município" value="<?php echo @$docActual[0]->municipio ?>">  </div>
                            
                            <div class="col-md-6"> <input class="mb-20" name="field[Mercado.Bairro]" type="text" placeholder="Bairro" value="<?php echo @$docActual[0]->bairro ?>">  </div>

                                <?php if(count(@$_GET['idEmpresa']) == 0 ){ ?>
                                <legend>Produtos/serviços</legend>
                                <div class="col-md-6"> <input class="mb-20" name="field[Mercado.foto1]"  type="file" placeholder="Imagem1" value="<?php echo @$docActual[0]->foto1 ?>">  </div>
                                <div class="col-md-6"> <input class="mb-20" name="field[Mercado.foto2]" type="file" placeholder="Imagem2" value="<?php echo @$docActual[0]->foto2 ?>">  </div>
                                <div class="col-md-6"> <input class="mb-20" name="field[Mercado.foto3]" type="file" placeholder="Imagem3" value="<?php echo @$docActual[0]->foto3 ?>">  </div>
                                <?php } ?>
                                <?php if(count(@$_GET['idEmpresa']) != 0 ){ ?>
                                <div class="col-md-6"> <input class="mb-20" name="field[Mercado.foto1]"  type="hidden" placeholder="Imagem1" value="<?php echo @$docActual[0]->foto1 ?>">  </div>
                                <div class="col-md-6"> <input class="mb-20" name="field[Mercado.foto2]" type="hidden" placeholder="Imagem2" value="<?php echo @$docActual[0]->foto2 ?>">  </div>
                                <div class="col-md-6"> <input class="mb-20" name="field[Mercado.foto3]" type="hidden" placeholder="Imagem3" value="<?php echo @$docActual[0]->foto3 ?>">  </div>
                                <?php } ?>
                                
                                <div class="col-md-12">
                                    
                                    <textarea class="h-200x ptb-20" name="field[Mercado.infoAdd]"  placeholder="Informações da Empresa" ><?php echo @$docActual[0]->infoAdd ?></textarea>
                               
                                </div>
                                
                    </div>    <!-- ROW ABERTA EM CIMA -->
                    
                                <?php if(count(@$_GET['idEmpresa']) == 0 ){ ?>
                                <h6 class="center-text mtb-30"><input type="submit" class="btn-group" style="background: #17a2b8" value="Cadastrar-se"></h6>
                                <?php } ?>
                                <?php if(count(@$_GET['idEmpresa']) != 0 ){ ?>
                                <h6 class="center-text mtb-30"><nakassonyActionButton id="btnAct"  value="Actualizar" action="actualizarMercado"></nakassonyActionButton></h6>
                                <?php } ?>
                </form>
                

                <table class="table-responsive table  table-info" style="color: #fff">
                    
                    <tr>
                        <td>Ref</td>
                        <td>Empresa</td>
                        <td>Operações</td>
                    </tr>
                    <?php foreach ($mercadosByUser as $mbu){ ?>
                    <tr>
                        <td><?php echo "FA0".$mbu->id ?></td>
                        <td><?php echo $mbu->nome ?></td>
                        <td>
                            <a href="Cadastro.php?idEmpresa=<?php echo $mbu->id ?>">Editar</a>&nbsp;|&nbsp;
                            <a href="FaReservaBack/controllerGateway.php?controller=Mercado&method=excluir&field[Mercado.id]=<?php echo $mbu->id ?>">Eliminar</a>
                        </td>
                    </tr>
                    <?php } ?>
                    
                </table>
                
            </div>   <!-- DIV CONTAINER ABERTA EM CIMA -->
                
        </section>

        <?php include './includes/footer.php'; ?>

    </body>
    
</html>