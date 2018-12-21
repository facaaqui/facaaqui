<?php
session_start();
ini_set("display_errors", 1);
include '../../Apllication/core/FacadePrincipal.php';
$img = $facadePrincipal->prodImgController()->getDTO()->findImgProd($_GET['idProduto']);

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
  </head>

  <body>
   <form class="form-horizontal style-form" method="post" enctype="multipart/form-data" 
                                action="../../controllerGateway.php?controller=ProdImagem&method=saveFotos">
                          <div id="maisImg" style="background: #ddd;" >
                          <div class="form-group" style="display: " id="maisImg">
                              <label class="col-sm-2 col-sm-2 control-label">Imagen:</label>
                              <div class="col-sm-10">
                                  <input type="file"  name="field[ProdImagem.foto]" id="fotoProd">
                                  <input type="hidden"  name="field[ProdImagem.idProduto]" value="<?php echo @$_GET['idProduto'] ?>" id="fotoProd">
                               </div>
                              <br>
                              <div class="col-sm-10">
                                  <input type="submit" value="Adicionar">
                               </div>
                             </div>
                           </div>
                           </form>
      
      <div>
        <?php foreach ($img as $i){ ?>
          <img src="../img/ProdImagens/<?php echo $i->foto ?>" width="100" height="100">&nbsp;&nbsp;
      <?php } ?>
      </div>

  </body>
</html>

