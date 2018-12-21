<?php
session_start();
include '../../Apllication/core/FacadePrincipal.php';
$markProduto = $facadePrincipal->produtoController()->getDTO()->findAllProdutoByTipoMark($_SESSION['idColaborador']);
$produtos = $facadePrincipal->produtoController()->getDTO()->findAllProduto(isset($_GET['idMercado']) ? $_GET['idMercado'] : $_SESSION['idMercado']);
$stock = $facadePrincipal->produtoController()->getDTO()->findStock(isset($_GET['idMercado']) ? $_GET['idMercado'] : $_SESSION['idMercado'] );
$docActual = $facadePrincipal->produtoController()->getDTO()->findStockByIdProduto(isset($_GET['idMercado']) ? $_GET['idMercado'] : $_SESSION['idMercado'], @$_GET['idProduto']);
$mercados = $facadePrincipal->mercadoController()->getDTO()->findAllMercado(isset($_SESSION['idColaborador']) ? $_SESSION['idColaborador'] : null );
$mercadoImagen = $facadePrincipal->mercadoController()->getDTO()->findAllMercadoPic(isset($_GET['idMercado']) ? $_GET['idMercado'] : $_SESSION['idMercado']);
#var_dump($docActual);
#die();

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
     
    <style>
        
</style>
<script type="text/javascript" src="../../Apllication/core/lib/UIComponent/nakassonyComponent.js"></script>
<script>
        window.addEventListener('load',defineComponent,true);
            window.addEventListener('load',selectInit,true);

            function selectInit() {
                populateSelect('Stock.idProduto', '<?php echo @$docActual[0]->idProduto ; ?>');
                
            }
            
             function selecionaDescricaoValor(select, campo) {
                optSel = document.getElementById(select).selectedIndex;
                comp = document.getElementById(select);
                opts = comp.getElementsByTagName('option');
        valorSelecionado = opts[optSel].innerHTML.split(" ");
                document.getElementById(campo).value = valorSelecionado[valorSelecionado.length - 2].replace("(","");
        document.getElementById(campo).value = document.getElementById(campo).value.replace(",","");
                
            }

            function populateSelect(elm, value) {
                try {
                    document.getElementById(elm).value = value;
                } catch (e) {
                    //  
                }
            }
            
        function addInfo(){
            tecido = document.getElementById('tecido').value;
            cor = document.getElementById('corProd').value;
            idProduto = document.getElementById('Stock.idProduto').value;
            qtd = document.getElementById('Stock.qtd').value;
            
            dados = cor.split("#");
            var xhr = new XMLHttpRequest();
            var url = "../../controllerGateway.php?controller=Produto&method=saveProdInfo&field[ProdCor.idProduto]="+idProduto+"&field[ProdCor.tecido]="+tecido+"&field[ProdCor.qtd]="+qtd+"&field[ProdCor.cor]="+dados[1];
            xhr.open("GET",url,true);
            xhr.send();
            xhr.onreadystatechange = function(){
                 if(xhr.readyState == 4 ){
                   tecido = "" ;
                    cor = "" ;
                    idProduto = "" ;
              } 
         }
      }
</script>
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>

  <section id="container" >
      <!-- **********************************************************************************************************************************************************
      TOP BAR CONTENT & NOTIFICATIONS
      *********************************************************************************************************************************************************** -->
      <?php include '../includes/menuNavegacao.php'; ?>
      <!--sidebar end-->
      
      <!-- **********************************************************************************************************************************************************
      MAIN CONTENT
      *********************************************************************************************************************************************************** -->
      <!--main content start-->
      <section id="main-content">
          <section class="wrapper">
            <h3><i class="fa fa-angle-right"></i> Inserir Mercadoria</h3>
            
            <!-- BASIC FORM ELELEMNTS -->
            <div class="row mt">
              <div class="col-lg-12">
                  <div class="form-panel">
                      <h4 class="mb"><i class="fa fa-angle-right"></i>Dados</h4>
                      <h6 class="mb">
                             <?php if($_SESSION['userTipo']  == 4){ ?>
                              <?php foreach ($markProduto as $m){ ?>
                              <i class="fa fa-angle-right"><a href="insertStock.php?idMercado=<?php echo $m->idMercado ?>"><?php  echo $m->marca  ?></a></i>
                              <?php } ?>
                             <?php } ?>
                              
                             <?php if($_SESSION['userTipo']  == 1){ ?>
                               <?php foreach ($mercados as $m){ ?>
                              <i class="fa fa-angle-right"><a href="insertStock.php?idMercado=<?php echo $m->id ?>"><?php  echo $m->marca  ?></a></i>
                              <?php } ?>
                             <?php } ?>
                          </h6>
                          <form class="form-horizontal style-form" method="post" enctype="multipart/form-data" 
                                        action="../../controllerGateway.php?controller=Produto&method=insertStock">
                          <div class="form-group" >
                              <label class="col-sm-2 col-sm-2 control-label">Produto:</label>
                              <div class="col-sm-10">
                                  <select  name="field[Stock.idProduto]" id="Stock.idProduto" class="form-control">
                                      <option  value="">selecione</option>
                                      <?php foreach ($produtos as $prod){ ?>
                                      <option value="<?php echo $prod->id ?>"><?php echo $prod->referencia."/".$prod->cod  ?></option>
                                      <?php } ?>
                                  </select>
                              </div>
                          </div>
                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Data de Expiração:</label>
                              <div class="col-sm-10">
                                  <input type="date" name="field[Stock.dataExpiracao]" value="<?php echo @$docActual[0]->dataExpiracao ?>" class="form-control">
                              </div>
                          </div>
                      
                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Quantidade:</label>
                              <div class="col-sm-10">
                                  <input type="text" id="Stock.qtd"  class="form-control" name="field[Stock.qtd]" value="<?php echo @$docActual[0]->qtd ?>">
                                  <input type="hidden" class="form-control" name="field[Stock.id]" value="<?php echo @$docActual[0]->id ?>">
                              </div>
                          </div>
                              
                              <fieldset >
                                  <legend >Mais Detalhes +</legend>
                                  
                            <div class="form-group" style="display: ">
                              <label class="col-sm-2 col-sm-2 control-label">Cor:</label>
                              <div class="col-sm-10">
                                  <input type="color" id="corProd" class="">
                              </div>
                          </div>
                          <div class="form-group" style="display: ">
                              <label class="col-sm-2 col-sm-2 control-label">Tecido:</label>
                              <div class="col-sm-10">
                                  <input type="text" id="tecido"   class="form-control">
                              </div>
                          </div>
                                      
<!--                          <div class="form-group" style="display: ">
                              <div class="col-sm-10">
                                  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                  <input type="button" value="Adicionar" onclick="addInfo()"class="btn bg-theme" style="background: rgb(240,118,34);color: #fff">
                               </div>
                          </div>-->
                              </fieldset>
                              
                          <div class="form-group">
                              <div class="col-sm-10">
                                  <?php if(count($docActual) == 0){ ?>
                                  <input type="submit" onclick="addInfo()" value="Inserir" class="btn bg-theme" style="background: rgb(240,118,34);color: #fff">
                                  <?php } ?>
                                  <?php if(count($docActual) > 0){ ?>
                                  <nakassonyActionButton id="btnAct" action="Act" value="Inserir" class="btn bg-theme" style="background: rgb(240,118,34);color: #fff"></nakassonyActionButton>
                                  <?php } ?>
                              </div>
                          </div>
                         
                       </form>
                 </div>
          <div class="col-md-12">
                      <div class="content-panel">
                          <table class="table table-striped table-advance table-hover">
                              <h4><i class="fa fa-angle-right">Produtos em Stock</i> | <i class="fa "><a href="destaque.php">Produto em Destaque</a></i></h4>
                            <hr>
                              <thead>
                              <tr>
                                  <th><i class="fa fa-bullhorn"></i>Nº</th>
                                  <th class="hidden-phone"><i class="fa fa-question-circle"></i>Descrição</th>
                                  <th><i class="fa fa-bookmark"></i>Data de Expiração</th>
                                  <th><i class="fa fa-bookmark"></i>Quantidade</th>
                                  <th><i class="fa fa-bookmark"></i></th>
                                  <th><i class=" fa fa-edit"></i>Op</th>
                                  <th></th>
                              </tr>
                              </thead>
                              <tbody>
                                  <?php foreach ($stock as $st){ ?>
                              <tr>
                                  <td><a href="basic_table.html#"><?php echo @$st->id; ?></a></td>
                                  <td class="hidden-phone"><?php echo $st->referencia."/".$st->cod ?></td>
                                  <td class="hidden-phone"><?php echo $st->dataExpiracao ?></td>
                                  <td class="hidden-phone"><?php echo $st->qtd ?></td>
                                  <td class="hidden-phone"><a href="javascript: return false;"><img src="../img/Produtos/<?php echo $st->foto ?>" width="25" height="25"></a></td>
                                  <td>
                                      <!--<button class="btn btn-success btn-xs"><i class="fa fa-check"></i></button>-->
                                      <a href="insertStock.php?idProduto=<?php echo $st->idProduto ?>&idMercado=<?php echo $_GET['idMercado'] ?>" class="btn btn-primary btn-xs"><i class="fa fa-pencil"></i></a>
                                      <button class="btn btn-danger btn-xs"><i class="fa fa-trash-o "></i></button>
                                  </td>
                              </tr>
                              <?php } ?>
                              </tbody>
                          </table>
                      </div><!-- /content-panel -->
                  </div><!-- /col-md-12 -->
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
              2014 - 2018 ConsulVision.LDA
<!--              <a href="../Mercados/inicio.php" class="go-top">
                  <i class="fa fa-angle-up"></i>
              </a>-->
          </div>
      </footer>
      <!--footer end-->
  </section>

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

  </body>
</html>

