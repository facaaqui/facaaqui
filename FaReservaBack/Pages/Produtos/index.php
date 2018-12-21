<?php
session_start();
ini_set("display_errors", 1);
include '../../Apllication/core/FacadePrincipal.php';
$docActual = $facadePrincipal->produtoController()->getDTO()->findAllProdut(@$_GET['id']);
$produto = $facadePrincipal->produtoController()->getDTO()->findAllProdutoByTipo(isset($_GET['param']) ? $_GET['param'] : null,isset($_GET['idMercado']) ? $_GET['idMercado'] : NULL, isset($_SESSION['idColaborador']) ? $_SESSION['idColaborador'] : null);
$markProduto = $facadePrincipal->produtoController()->getDTO()->findAllProdutoByTipoMark($_SESSION['idColaborador']);
$produtos = $facadePrincipal->produtoController()->getDTO()->findAllProduto($_SESSION['idMercado']);
$mercados = $facadePrincipal->mercadoController()->getDTO()->findAllMercado(isset($_SESSION['idColaborador']) ? $_SESSION['idColaborador'] : null );
$mercadoImagen = $facadePrincipal->mercadoController()->getDTO()->findAllMercadoPic($_SESSION['idMercado']);
$categoria = $facadePrincipal->categoriaController()->getDTO()->findAllCat();
$Subcategoria = $facadePrincipal->categoriaController()->getDTO()->findAllSubCat();


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
    <script type="text/javascript" src="../../Apllication/core/lib/UIComponent/nakassonyComponent.js"></script>
     <script>
      //   
          window.addEventListener('load',defineComponent,true);
          window.addEventListener('load',selectInit,true);
      
    function selectInit() {
                populateSelect('Produto.idSubCat', '<?php echo @$docActual[0]->idSubCat; ?>');
                populateSelect('Produto.idCategoria', '<?php echo @$docActual[0]->idCategoria; ?>');
                populateSelect('Produto.idMercado', '<?php echo @$docActual[0]->idMercado; ?>');
                populateSelect('Produto.unidade', '<?php echo @$docActual[0]->unidade ?>');
            }
            
       
            function populateSelect(elm, value) {
                try {
                    document.getElementById(elm).value = value;
                } catch (e) {
                    //  
                }
            }
            
            
            function inputDetalhes(tipo){
//                alert(tipo);
                elm = document.getElementsByClassName('detalhes');
                if (tipo == "1") {
                    elm[0].style.display = '';elm[1].style.display = '';elm[2].style.display = '';elm[3].style.display = '';
                    elm[4].style.display = '';elm[5].style.display = '';elm[6].style.display = '';elm[7].style.display = '';
                    elm[8].style.display = '';elm[9].style.display = '';elm[10].style.display = '';elm[11].style.display = '';
                    elm[12].style.display = '';elm[13].style.display = '';elm[14].style.display = '';elm[15].style.display = '';
                    elm[16].style.display = '';
                }else{
                    elm[0].style.display = 'none';elm[1].style.display = 'none';elm[2].style.display = 'none';elm[3].style.display = 'none';
                    elm[4].style.display = 'none';elm[5].style.display = 'none';elm[6].style.display = 'none';elm[7].style.display = 'none';                  
                    elm[8].style.display = 'none';elm[9].style.display = 'none';elm[10].style.display = 'none';elm[11].style.display = 'none';                  
                    elm[12].style.display = 'none';elm[13].style.display = 'none';elm[14].style.display = 'none';elm[15].style.display = 'none';                  
                    elm[16].style.display = 'none';                  
                }
            

    
}
     </script>
    <style>
        #preco, #Produto.unidade{
            float: left;
        }
        
</style>
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
          	<h3><i class="fa fa-angle-right"></i> Cadastro de Produtos</h3>
          	
          	<!-- BASIC FORM ELELEMNTS -->
          	<div class="row mt">
          		<div class="col-lg-12">
                  <div class="form-panel">
                  	  <h4 class="mb"><i class="fa fa-angle-right"></i>Dados</h4>
                          <form class="form-horizontal style-form" method="post" enctype="multipart/form-data" 
                                        action="../../controllerGateway.php?controller=Produto&method=save">
                        
                                <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Código:</label>
                              <div class="col-sm-10">
                                  <input type="text" name="field[Produto.cod]" value="<?php echo @$docActual[0]->cod ?>" class="form-control">
                                  <input type="hidden" name="field[Produto.id]" value="<?php echo @$docActual[0]->id ?>" class="form-control">
                              </div>
                          </div>
                           
                           
                         <?php if($_SESSION['userTipo'] == 4 || $_SESSION['userTipo'] == 1){ ?>
                          <div class="form-group" >
                              <label class="col-sm-2 col-sm-2 control-label">Empresa:</label>
                              <div class="col-sm-10">
                                  <select name="field[Produto.idMercado]" id="Produto.idMercado" class="form-control">
                                      <option value="">selecione</option>
                                  <?php foreach ($mercados as $m){ ?>
                                      <option value="<?php echo $m->id ?>"><?php echo $m->marca ?></option>
                                  <?php } ?>
                                  </select>
                              </div>
                          </div>
                         <?php } ?>
                          <div class="form-group" >
                              <label class="col-sm-2 col-sm-2 control-label">Mercados:</label>
                              <div class="col-sm-10">
                                  <select name="field[Produto.idCategoria]" onchange="inputDetalhes(this.value)" id="Produto.idCategoria" class="form-control">
                                      <option value="">selecione</option>
                                  <?php foreach ($categoria as $c){ ?>
                                      <option value="<?php echo $c->id ?>"><?php echo $c->descricao ?></option>
                                  <?php } ?>
                                  </select>
                              </div>
                          </div>
                          <div class="form-group" >
                              <label class="col-sm-2 col-sm-2 control-label">Categoria:</label>
                              <div class="col-sm-10">
                                  <select name="field[Produto.idSubCat]"  id="Produto.idSubCat" class="form-control">
                                      <option value="">selecione</option>
                                  <?php foreach ($Subcategoria as $c){ ?>
                                      <option value="<?php echo $c->id ?>"><?php echo $c->descricao ?></option>
                                  <?php } ?>
                                  </select>
                              </div>
                          </div>
                        
                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Referência:</label>
                              <div class="col-sm-10">
                                  <input type="text" class="form-control" value="<?php echo @$docActual[0]->referencia ?>" name="field[Produto.referencia]">
                              </div>
                          </div>
                          
                              
                                  
                              <div class="form-group detalhes" id="60" style="display:none">
                              <label class="col-sm-2 col-sm-2 control-label">Tamanho do Ecrã:</label>
                              <div class="col-sm-10">
                                  <input type="text" class="form-control" value="<?php echo @$docActual[0]->tamanhoEcra ?>" name="field[DetalhesProd.tamanhoEcra]">
                                  <input type="hidden" class="form-control" value="<?php echo @$docActual[0]->idProduto ?>" name="field[DetalhesProd.idProduto]">
                              </div>
                          </div>
                              
                              <div class="form-group detalhes" id="60" style="display:none">
                              <label class="col-sm-2 col-sm-2 control-label">Memoria RAM:</label>
                              <div class="col-sm-10">
                                  <input type="text" class="form-control" value="<?php echo @$docActual[0]->ram ?>" name="field[DetalhesProd.ram]">
                              </div>
                          </div>
                              <div class="form-group detalhes" id="60" style="display:none">
                              <label class="col-sm-2 col-sm-2 control-label">Tipo de Memoria:</label>
                              <div class="col-sm-10">
                                  <input type="text" class="form-control" value="<?php echo @$docActual[0]->tipoMemoria ?>" name="field[DetalhesProd.tipoMemoria]">
                              </div>
                          </div>
                              
                              <div class="form-group detalhes" id="60" style="display:none">
                              <label class="col-sm-2 col-sm-2 control-label">Memoria ROM:</label>
                              <div class="col-sm-10">
                                  <input type="text" class="form-control" value="<?php echo @$docActual[0]->rom ?>" name="field[DetalhesProd.rom]">
                              </div>
                          </div>
                              <div class="form-group detalhes" id="60" style="display:none">
                              <label class="col-sm-2 col-sm-2 control-label">Tipo de Disco:</label>
                              <div class="col-sm-10">
                                  <input type="text" class="form-control" value="<?php echo @$docActual[0]->tipoDico ?>" name="field[DetalhesProd.tipoDisco]">
                              </div>
                          </div>
                              <div class="form-group detalhes" id="60" style="display:none">
                              <label class="col-sm-2 col-sm-2 control-label">Processador:</label>
                              <div class="col-sm-10">
                                  <input type="text" class="form-control" value="<?php echo @$docActual[0]->processador ?>" name="field[DetalhesProd.processador]">
                              </div>
                          </div>
                              <div class="form-group detalhes" id="60" style="display:none">
                              <label class="col-sm-2 col-sm-2 control-label">Placa Gráfica:</label>
                              <div class="col-sm-10">
                                  <input type="text" class="form-control" value="<?php echo @$docActual[0]->placaGrafica ?>" name="field[DetalhesProd.placaGrafica]">
                              </div>
                          </div>
                              
                              <div class="form-group detalhes" id="60" style="display:none">
                              <label class="col-sm-2 col-sm-2 control-label">Sistema:</label>
                              <div class="col-sm-10">
                                  <input type="text" class="form-control" value="<?php echo @$docActual[0]->sistema ?>" name="field[DetalhesProd.sistema]">
                              </div>
                          </div>
                              <div class="form-group detalhes" id="60" style="display:none">
                              <label class="col-sm-2 col-sm-2 control-label">Bateria:</label>
                              <div class="col-sm-10">
                                  <input type="text" class="form-control" value="<?php echo @$docActual[0]->bateria ?>" name="field[DetalhesProd.bateria]">
                              </div>
                          </div>
                              <div class="form-group detalhes" id="60" style="display:none">
                              <label class="col-sm-2 col-sm-2 control-label">Camera:</label>
                              <div class="col-sm-10">
                                  <input type="text" class="form-control" value="<?php echo @$docActual[0]->camera ?>" name="field[DetalhesProd.camera]">
                              </div>
                          </div>
                              <div class="form-group detalhes" id="60" style="display:none">
                              <label class="col-sm-2 col-sm-2 control-label">LAN:</label>
                              <div class="col-sm-10">
                                  Sim<input type="radio" value="Sim" class="orm-control" <?php if(@$docActual[0]->lan == "Sim"){ echo "checked";} ?> name="field[DetalhesProd.lan]">&nbsp;|&nbsp;
                                  Não<input type="radio" value="Nao" class="orm-control" <?php if(@$docActual[0]->lan == "Não"){ echo "checked";} ?> name="field[DetalhesProd.lan]">
                              </div>
                          </div>
                              <div class="form-group detalhes" id="60" style="display:none">
                              <label class="col-sm-2 col-sm-2 control-label">Entrada de Cartão:</label>
                              <div class="col-sm-10">
                                  Sim<input type="radio" value="Sim" class="orm-control" <?php if(@$docActual[0]->entradaCartao == "Sim"){echo "checked";} ?> name="field[DetalhesProd.entradaCartao]">&nbsp;|&nbsp;
                                  Não<input type="radio" value="Não" class="orm-control" <?php if(@$docActual[0]->entradaCartao == "Não"){echo "checked";} ?> name="field[DetalhesProd.entradaCartao]">
                              </div>
                          </div>
                              <div class="form-group detalhes" id="60" style="display:none">
                              <label class="col-sm-2 col-sm-2 control-label">HDMI:</label>
                              <div class="col-sm-10">
                                  Sim<input type="radio" value="Sim" class="orm-control" <?php if(@$docActual[0]->hdmi == "Sim"){echo "checked";} ?> name="field[DetalhesProd.hdmi]">&nbsp;|&nbsp;
                                  Não<input type="radio" value="Não" class="orm-control" <?php if(@$docActual[0]->hdmi == "Não"){echo "checked";} ?> name="field[DetalhesProd.hdmi]">
                              </div>
                          </div>
                              <div class="form-group detalhes" id="60" style="display:none">
                              <label class="col-sm-2 col-sm-2 control-label">Bluetooth:</label>
                              <div class="col-sm-10">
                                  Sim<input type="radio" value="Sim" class="orm-control" <?php if(@$docActual[0]->bluetooth == "Sim"){echo "checked";} ?> name="field[DetalhesProd.bluetooth]">&nbsp;|&nbsp;
                                  Não<input type="radio" value="Não" class="orm-control" <?php if(@$docActual[0]->bluetooth == "Não"){echo "checked";} ?> name="field[DetalhesProd.bluetooth]">
                              </div>
                          </div>
                              <div class="form-group detalhes" id="60" style="display:none">
                              <label class="col-sm-2 col-sm-2 control-label">Wireless:</label>
                              <div class="col-sm-10">
                                  Sim<input type="radio" value="Sim" class="orm-control" <?php if(@$docActual[0]->wireless == "Sim"){echo "checked";} ?> name="field[DetalhesProd.wireless]">&nbsp;|&nbsp;
                                  Não<input type="radio" value="Não" class="orm-control" <?php if(@$docActual[0]->wireless == "Não"){echo "checked";} ?> name="field[DetalhesProd.wireless]">
                              </div>
                          </div>
                           
                              <div class="form-group detalhes" id="60" style="display:none">
                              <label class="col-sm-2 col-sm-2 control-label">USB:</label>
                              <div class="col-sm-10">
                                  Sim<input type="radio" value="Sim" class="orm-control" <?php if(@$docActual[0]->usb == "Sim"){echo "checked";} ?> name="field[DetalhesProd.usb]">&nbsp;|&nbsp;
                                  Não<input type="radio" value="Não" class="orm-control" <?php if(@$docActual[0]->usb == "Não"){echo "checked";} ?> name="field[DetalhesProd.usb]">
                              </div>
                          </div>
                          
                             <div class="form-group detalhes" id="60" style="display:none">
                              <label class="col-sm-2 col-sm-2 control-label">Garantia:</label>
                              <div class="col-sm-10">
                                  <input type="text" class="form-control" value="<?php echo @$docActual[0]->garantia ?>" name="field[DetalhesProd.garantia]">
                              </div>
                          </div>
                              
                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Pedido Min.:</label>
                              <div class="col-sm-10">
                                  <input type="text" class="form-control" value="<?php echo @$docActual[0]->minPedido ?>" name="field[Produto.minPedido]">
                              </div>
                          </div>
                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Preço do Producto:</label>
                              <div class="col-sm-10">
                                  <input type="text" id="preco" class="form-control" value="<?php echo @$docActual[0]->valorCompraUn ?>" name="field[Produto.valorCompraUn]" style="width: 70%" placeholder="Preço do Producto">
                                  <select class="form-control" id="Produto.unidade" name="field[Produto.unidade]" style="width: 30%">
                                      <option value="">Unidade de Medida</option>
                                      <option value="Un">Un</option>
                                      <option value="Kg">Kg</option>
                                  </select>
                              </div>
                          </div>
                        
                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Informações Adicionais:</label>
                              <div class="col-sm-10">
                                  <input type="text" class="form-control" value="<?php echo @$docActual[0]->addInfo ?>" name="field[Produto.addInfo]">
                              </div>
                          </div>
                           <input type="hidden" class="form-control" value="<?php echo @$docActual[0]->foto ?>" name="field[Produto.foto]">
                          
                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Inserir Imagem:</label>
                              <div class="col-sm-10">
                                  <?php if(count(@$_GET['id']) != 1 ){ ?>
                                  <input type="file" class="form-control" value="<?php echo @$docActual[0]->foto ?>" name="field[Produto.foto]"><?php } ?>
                                  <?php if(count(@$_GET['id']) != 0 ){ ?>
                                  <a href="javascript: return false;" 
                                               onClick="window.open('../Produtos/imgProd.php?idProduto=<?php echo @$_GET['id'] ?>', '', 'width=400, height=400')">
                                                <?php echo "+"; ?>
                                  </a><?php } ?>
                                  
                              </div>
                          </div>
                        
                          <div class="form-group">
                              <div class="col-sm-10">
                                <?php if(count(@$_GET['id']) != 1 ){ ?>
                                  <input type="submit" value="Cadastrar" class="btn bg-theme" style="background: rgb(240,118,34);color: #fff">
                                <?php } ?>
                                  <?php if(count(@$_GET['id']) == 1 ){ ?>
                                    <nakassonyActionButton id="btnAct" value="Novo" action="novoProd"  style="background: rgb(240,118,34);color: #000"></nakassonyActionButton>
                                    &nbsp;&nbsp;&nbsp;<nakassonyActionButton id="btnAct" value="Actualizar" action="actProduto"  style="background: rgb(240,118,34);color: #000"></nakassonyActionButton>

                                  <?php } ?>
                              </div>
                          </div>
                         
                       </form>
                 </div>
                  <div class="row mt">
                  <div class="col-md-12">
                      <div class="content-panel">
                          <table class="table table-striped table-advance table-hover">
                              <h4><i class="fa fa-angle-right"></i>Produtos Registados| <i class="fa "><a href="insertStock.php">Stock</a></i></h4>
                              <h6>
                                  
                                  <?php foreach ($markProduto as $pro){ ?>
                                  <i class="fa "><a href="index.php?idMercado=<?php echo $pro->idMercado ?>"><?php echo $pro->marca ?></a></i>|&nbsp;
                                  <?php } ?>
                                </h6>
                              <form method="get" action="index.php">
                                  <input type="text" size="40" name="param"/>
                                  <input type="submit" value="Buscar" />
                              </form>
	                  	  	  <hr>
                              <thead>
                              <tr>
                                  <th><i class="fa fa-bullhorn"></i>Nº</th>
                                  <th><i class=" fa fa-edit"></i>Referência</th>
                                  <th><i class=" fa fa-edit"></i>Unidade</th>
                                  <th><i class=" fa fa-edit"></i>Preço</th>
                                  <th><i class=" fa fa-edit"></i>Foto</th>
                                  <th></th>
                              </tr>
                              </thead>
                              <tbody>
                               <?php if($_SESSION['userTipo'] == 1){ ?>
                                  <?php foreach ($produto as $p){ ?>
                              <tr>                                
                                  <td><a href="basic_table.html#"><?php echo $p->id ?></a></td>
                                  <td class="hidden-phone"><?php echo $p->referencia ?></td>
                                  <td class="hidden-phone"><?php echo $p->unidade ?></td>
                                  <td class="hidden-phone"><?php echo number_format($p->valorVendaUn, 2,",",".")."Kz" ?></td>
                                  <td><img id="immProduto" src="../img/Produtos/<?php echo $p->foto ?>" width="25" height="25"></td>
                                  <td>
                                      <a href="index.php?id=<?php echo $p->id ?>" class="btn btn-primary btn-xs"><i class="fa fa-pencil"></i></a>
                                      <a href="../../controllerGateway.php?controller=Produto&method=delProduto&field[Produto.id]=<?php echo $p->id ?>" class="btn btn-danger btn-xs"><i class="fa fa-trash-o "></i></a>
                                  </td>
                              </tr>
                                  <?php } ?>
                                <?php } ?>
                              
                               <?php if($_SESSION['userTipo'] == 4){ ?>
                                  <?php foreach ($produto as $prod){ ?>
                              <tr>
                                  <td><a href="basic_table.html#"><?php echo $prod->id; ?></a></td>
                                  <td class="hidden-phone"><?php echo $prod->referencia ?></td>
                                  <td class="hidden-phone"><?php echo $prod->unidade ?></td>
                                  <td class="hidden-phone"><?php echo number_format($prod->valorVendaUn, 2,",",".")."Kz" ?></td>
                                  <td><img id="immProduto" src="../img/Produtos/<?php echo $prod->foto ?>" width="25" height="25"></td>
                                  <td>
                                       <a href="index.php?id=<?php echo $prod->id ?>" class="btn btn-primary btn-xs"><i class="fa fa-pencil"></i></a>
                                       <a href="../../controllerGateway.php?controller=Produto&method=delProduto&field[Produto.id]=<?php echo $p->id ?>" class="btn btn-danger btn-xs"><i class="fa fa-trash-o "></i></a>
                                
                                  </td>
                              </tr>
                                  <?php } ?>
                                <?php } ?>
                              </tbody>
                          </table>
                      </div><!-- /content-panel -->
                  </div><!-- /col-md-12 -->
              </div><!-- /row -->
          
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
              2014 - 2018 ConsulVision.Lda
              <a href="form_component.html#" class="go-top">
                  <i class="fa fa-angle-up"></i>
              </a>
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

