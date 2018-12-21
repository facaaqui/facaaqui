<?php
@session_start();

include '../Apllication/core/FacadePrincipal.php';

$produtosByMercado = $facadePrincipal->produtoController()->getDTO()->findAllProdutoByIdMercado(@$_GET['idMercado']);
$produtoEmDestaque = $facadePrincipal->produtoController()->getDTO()->findDestaque(@$_GET['idMercado']);
$catBySector = $facadePrincipal->produtoController()->getDTO()->findCatBySector(@$_GET['sector']);

 $menuLateral = $facadePrincipal->produtoController()->getDTO()->menuLateral(@$_GET['sector']);
 $menuLateralByCat = $facadePrincipal->produtoController()->getDTO()->menuLateralByCat(@$_GET['idCategoria']  , @$_GET['sector']);
 
$findCatById = $facadePrincipal->produtoController()->getDTO()->findCatById(@$_GET['sector']);
$findOthersCat = $facadePrincipal->produtoController()->getDTO()->findOtherCatById(@$_GET['idCategoria']);

#echo $_SESSION['pedidoSessao']."-".$_GET['idMercado'];

die();
?>

﻿<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>ConsulVision</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="stylesheet" type="text/css" href="css/estilo.css"/>
    <style>
        body{
            padding: 0;
            margin: 0
        }
        
        /*formatação do menuRodapé*/
            	nav#menu{
            		display: block;
                        

            	}
            	nav#menu ul{
            		list-style: none;
            		text-transform: uppercase;
            		top: -13px;
            		left: 430px;
                        
            	}
                
                nav#menu li{
                        
                	display: inline-block;
                	padding: 10px;
                	margin: 2px; 
                	transition: background-color 1s;
                }

                nav#menu li:hover{
                	background-color: #606060;
                }

                nav#menu h1{
                	display: none;
                }
                nav#menu a{
                	color: #fff;
                	text-decoration: none;
                        font-size: 13pt;
                }

                   nav#menu a:hover{
                   	color: #ffffff;

                   }
        /*formatação do menuSuperior*/
            	nav#menuSuperior{
            		display: block;
                        

            	}
            	nav#menuSuperior ul{
            		list-style: none;
            		text-transform: uppercase;
            		margin-top:  -13px;
            		left: 430px;
                        text-align: center;
            	}
                
                nav#menuSuperior li{
                        
                	display: inline-block;
                	padding: 0px;
                	margin: 0px;
                        margin-left: 20px;
                	transition: background-color 1s;
                }

                nav#menuSuperior li:hover{
                	background-color: #606060;
                }

                nav#menuSuperior h1{
                	display: none;
                }
                nav#menuSuperior a{
                	color: #000;
                	text-decoration: none;
                        font-size: 10pt;
                }

                   nav#menuSuperior a:hover{
                   	color: #ffffff;

                   }
                   
                .hiddenPages{
                 transition: all .3s;
                 position:fixed;
                 width:auto;
                 height:auto;
                 top:-100vw;
                 background:#ddd;
                 margin: 3% 5% 0% 73.3%;
                 z-index:200;
                 box-shadow: 1px 1px 2px black;
                 }
                .hiddenPagesLogin{
                 transition: all .3s;
                 position:absolute;
                 top:-100vw;
                 background:#ddd;
                 margin: 4.7% 5% 0% 82%;
                 z-index:500;
                 box-shadow: 1px 1px 2px rgba(0,0,0,1);
                 }
                .hiddenPageCadastro{
                 transition: all .3s;
                 position:fixed;
                 top:-100vw;
                 width:20vw;
                 height:auto;
                 background:#ddd;
                 margin: 4.7% 0% 0% 79%;
                 z-index:200;
                 box-shadow: 1px 1px 2px rgba(0,0,0,1)
                 }
    </style>
    <script>
            
            
                        function vStatus(){

                //  document.getElementById(ln).className = "label "+nextStat;                

                xhr = new XMLHttpRequest();
                var path = "../../consulVisionBack/";
                var Url = path+"controllerGateway.php?controller=ConsulVision&method=verfyStatusPByClient&field&idCliente=" + userLoggedId;
               // alert('url'+Url);
                xhr.open("GET", Url, true);
                xhr.onreadystatechange = function () {
                    if (xhr.readyState == 4) {
                        dados = eval(xhr.responseText);

                      
                        for(x = 0; x < dados.length; x++){

                            console.log("Resultado: "+dados[x].id);

//                            if(document.getElementById('statusPedido'+dados[x].id)){
//
//                                _('statusPedido'+dados[x].id).innerHTML = dados[x].status;
//                                elm = document.getElementById('itemEncomenda'+dados[x].id);
//                                elm.className = "label" + dados[x].status;
//                            }

                        }
                                                
                    }
                };

                xhr.send();
                
              //setInterval(checaStatus,6000);

                
            }
            
            
            ////New JS
            
             function iserirItenPedido(id, nomeProduto, preco){
                var linha = document.createElement('tr');
                linha.id = "ItemPedido"+id;
                var Produto = document.createElement('td');
                var Descricao = document.createElement('td');
                var qtd = document.createElement('td');
                var precoUnt = document.createElement('td');
                var total = document.createElement('td');
//                var valorSelecionado = idServico.getElementsByTagName("option")[idServico.selectedIndex].innerHTML;
                var contProduto = nomeProduto;
                var conteudoProduto = document.createTextNode(contProduto);
                
                var contDescricao = Descricao;
                var conteudoDescricao = document.createTextNode(contDescricao);
                
                var contQtd = qtd.value;
                var conteudoQtd = document.createTextNode(contQtd);
                
                var contPrecoUnt = preco;
                var conteudoPrecoUnt = document.createTextNode(contPrecoUnt);
                
                var total = countQtd * countPrecoUnt;
                var conteudoTotal = document.createTextNode(total);
                
                var eliminar = document.createElement('td');
                var linkEliminar = "<a href='#' onClick='delProposta("+id+")'>Eliminar</a>";
                    eliminar.innerHTML = linkEliminar; 
                         
                Produto.appendChild(conteudoProduto);
                Descricao.appendChild(conteudoDescricao);
                qtd.appendChild(conteudoQtd);
                precoUnt.appendChild(conteudoPrecoUnt);
                total.appendChild(conteudoTotal);
                
                linha.appendChild(Produto);
                linha.appendChild(Descricao);
                linha.appendChild(qtd);
                linha.appendChild(precoUnt);
                linha.appendChild(Total);
                linha.appendChild(eliminar);
                tabelaDeItens.appendChild(linha);
                qtd.value = "";
                
                
             }
             
             function enviarItens(nomeProduto, idProduto, preco,qtd){
              alert('nomeProduto');
             var xhr = new XMLHttpRequest();
//             var qtdP = document.getElementById('qtd'+id).value ;
             var param = "&field[ItensPedido.idProduto]="+idProduto+"&field[ItensPedido.nome]="+nomeProduto+
                     "&field[ItensPedido.qtd]="+qtd+"&field[ItensPedido.precoUnt]="+preco;
             var url = "../consulVisionBack/controllerGateway.php?controller=ConsulVision&method=enviarItem"+param+"&idMercado="+<?php echo $_GET['idMercado'] ?>;
             xhr.open("GET",url,true);
             xhr.send();
             xhr.onreadystatechange = function(){
                 if(xhr.readyState == 4 ){
                    alert(xhr.responseText);
                      iserirItenPedido(xhr.responseText, nomeProduto, idProduto, preco); 
//                        document.getElementById('qtd'+id).innerHTML = "";
                        
//                     }
                 }
             }
             
             
             
    }
        function terminar(idMercado){
            alert('inicio');
            var xhr = new XMLHttpRequest();
                        
            var url = "../consulVisionBack/controllerGateway.php?controller=Pedidos&method=terminarPedido&field[Pedidos.id]&idMercado="+idMercado;
             xhr.open("GET",url,true);
             alert(url);
             xhr.send();
             xhr.onreadystatechange = function(){
                 if(xhr.readyState == 4 ){
//                     if(xhr.responseText == ""){
                         alert(xhr.responseText);
//                     }
                 }
             }
                 
             }
             
             
             function delItens(id) {
                xhr = new XMLHttpRequest();
                fields = "field[ItensPedido.id]=" + id;

                url = "../../consulVisionBack/controllerGateway.php?controller=ConsulVision&method=delItemPdd&" + fields;
                xhr.open('GET', url, true);
                xhr.onreadystatechange = function() {
                    
                    if (xhr.readyState == 4) {
                        if(xhr.responseText == ""){
                          document.getElementById('localItens'+id).style.display = 'none';  
                        }
						
                        //alert("Status: "+xhr.responseText);
                    }
                }
                xhr.send();
            }
            
            function buscarItens(sessao) {
                if (document.getElementById('pageCarrinho' + sessao).style.display == 'none') {
                    xhr = new XMLHttpRequest();
                    url = "../../consulVisionBack/controllerGateway.php?controller=ConsulVision&method=itensPedidoSessao&field[ItensPedido.sessao]="+sessao;
                    xhr.open("GET", url, true);
                    //xhrEnco.send();
                    xhr.onreadystatechange = function () {
                        if (xhr.readyState == 4) {
                            //alert(xhrEnco.responseText);
                            document.getElementById('pageCarrinho' + sessao).innerHTML = xhr.responseText;
                        }
                    }
                    xhr.send();
                    document.getElementById('pageCarrinho' + sessao).style.display = '';
                } else
                    document.getElementById('pageCarrinho' + sessao).style.display = 'none';
            }



    </script>
<!--Less styles -->
   <!-- Other Less css file //different less files has different color scheam
	<link rel="stylesheet/less" type="text/css" href="themes/less/simplex.less">
	<link rel="stylesheet/less" type="text/css" href="themes/less/classified.less">
	<link rel="stylesheet/less" type="text/css" href="themes/less/amelia.less">  MOVE DOWN TO activate
	-->
	<!--<link rel="stylesheet/less" type="text/css" href="themes/less/bootshop.less">
	<script src="themes/js/less.js" type="text/javascript"></script> -->
	
<!-- Bootstrap style --> 
    <link id="callCss" rel="stylesheet" href="themes/bootshop/bootstrap.min.css" media="screen"/>
    <link href="themes/css/base.css" rel="stylesheet" media="screen"/>
<!-- Bootstrap style responsive -->	
	<link href="themes/css/bootstrap-responsive.min.css" rel="stylesheet"/>
	<link href="themes/css/font-awesome.css" rel="stylesheet" type="text/css">
<!-- Google-code-prettify -->	
	<link href="themes/js/google-code-prettify/prettify.css" rel="stylesheet"/>
<!-- fav and touch icons -->
    <link rel="shortcut icon" href="themes/images/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="themes/images/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="themes/images/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="themes/images/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="themes/images/ico/apple-touch-icon-57-precomposed.png">
	<style type="text/css" id="enject"></style>
  </head>
  <body onload="">
    
    
<?php include './includes/menuSuperior.php'; ?>

<!-- Header End====================================================================== -->
<!-- ======================BANNER DINÂMICO================================================ -->
 <?php #include './includes/bannerDinamico.php'; ?>
<!--<div style="margin-top: 9%;background: #000;">
  <ul class="thumbnails">
				<li class="span3">
				  <div class="thumbnail">
				  <i class="tag"></i>
					<a href="product_details.html"><img src="themes/images/products/b1.jpg" alt=""></a>
					<div class="caption">
					  <h5>Product name</h5>
					  <h4><a class="btn" href="product_details.html">VIEW</a> <span class="pull-right">$222.00</span></h4>
					</div>
				  </div>
				</li>
</div>-->
<!-- INTERFACE DO CARRINHO -->

<!-- FIM INTERFACE DO CARRINHO -->
<!-- ======================FIM BANNER DINÂMICO================================================ -->
<div style="position: absolute;margin-top: 11%; margin-left: 20%">
    <ul class="thumbnails">
                              <li class="span3">
				  <div class="thumbnail">
                                      <a  href="produtoDetalhes.php?id=<?php echo @$produtoEmDestaque[0]->id ?>&idMercado=<?php echo @$_GET['idMercado'] ?>&sector=<?php echo @$_GET['sector'] ?>&otherMenu=<?php echo @$_GET['otherMenu'] ?>&idCategoria=<?php echo @$_GET['idCategoria'] ?>"><img src="../../consulVisionBack/Pages/img/Produtos/<?php echo @$produtoEmDestaque[0]->foto ?>" alt=""/></a>
					<div class="caption">
					  <h5><?php echo @$produtoEmDestaque[0]->referencia ?></h5>
					  <!--<h4 style="text-align:center"><a class="btn" href="product_details.html"> <i class="icon-zoom-in"></i></a> <a class="btn" href="#">Add to <i class="icon-shopping-cart"></i></a> <a class="btn btn-primary" href="#"><?php echo number_format(@$produtoEmDestaque[0]->preco)."AKZ" ?></a></h4>-->
					</div>
				  </div>
				</li>
                          </ul>	
    </div>
<div style="position: absolute;margin-top: 15%; margin-left: 45%">
    		  <h1><?php echo "Produto em Destaque.!" ?></h1>                                          
                   <h1 style="text-align:center"><a class="btn" href="javascript: return false;" onclick="enviarItens('<?php echo @$produtoEmDestaque[0]->referencia ?>', '<?php echo @$produtoEmDestaque[0]->id ?>', '<?php echo @$produtoEmDestaque[0]->preco ?>', 1)">Add to <i class="icon-shopping-cart"></i></a> <a class="btn btn-primary" href="#"><?php echo number_format(@$produtoEmDestaque[0]->preco)."AKZ" ?></a></h1>
					
    </div>
<div id="mainBody" style="width: 100%;margin-top: 30%">
    	<div class="container" style="width: 100%;">
	<div class="row" style="width: 100%; padding: 10px;">
<!-- Sidebar ================================================== -->
<div id="sidebar" class="span3" style="">
    <!--<div class="well well-small"><a id="myCart" href="product_summary.html"><img src="themes/images/ico-cart.png" alt="cart"><span id="cartCounter">0</span>&nbsp;itens no Carrinho  <span class="badge badge-warning pull-right">$155.00</span></a></div>-->
               <?php include './includes/menuLateral.php'; ?>
	</div>
<!-- Sidebar end=============================================== -->
<div class="span9" style=" width: 78%">	
		<h4>... </h4>
			  <!--<ul class="thumbnails">addProdCart('<?php echo $prodMerc->referencia ?>', '<?php echo $prodMerc->id ?>', 1, '<?php echo $prodMerc->preco ?>','<?php echo $prodMerc->idMercado ?>')-->
                              <?php foreach ($produtosByMercado as $prodMerc){ ?>
				<li class="span3">
				  <div class="thumbnail">
                                      <a  href="produtoDetalhes.php?id=<?php echo $prodMerc->id ?>&idMercado=<?php echo $_GET['idMercado'] ?>&sector=<?php echo $_GET['sector'] ?>&otherMenu=<?php echo $_GET['otherMenu'] ?>&idCategoria=<?php echo $_GET['idCategoria'] ?>"><img src="../../consulVisionBack/Pages/img/Produtos/<?php echo $prodMerc->foto?>" alt=""/></a>
					<div class="caption">
					  <h5><?php echo $prodMerc->referencia ?></h5>
					  <p> 
						Lorem Ipsum is simply dummy text. 
					  </p>
					 
                                          <h4 style="text-align:center"><a class="btn" href="javascript: return false;" onclick="enviarItens('<?php echo $prodMerc->referencia ?>', '<?php echo $prodMerc->id ?>', '<?php echo $prodMerc->preco ?>', 1)">Add <i class="icon-shopping-cart"></i></a> <a class="btn btn-primary" href="#"><?php echo number_format($prodMerc->preco)."AKZ" ?></a></h4>
					</div>
				  </div>
				</li>
                              <?php } ?>
			  </ul>	

		</div>
		</div>
	</div>
</div>
<div id="pageCarrinho<?php echo $_SESSION['pedidoSessao'] ?>" class="" style="display: none;
                                                                              position: fixed;color:#fff;
                                                                              transition: all .3s;
                                                                              width:auto;
                                                                              height:auto;
                                                                              background:#ddd;
                                                                              margin: -55% 5% 0% 65%;
                                                                              z-index:200;
                                                                              box-shadow: 2px 2px 4px black;
                                                                              ">
              <button type="button" onclick="slidePage('pageCarrinho', 'hidden');" class="close" data-dismiss="modal" aria-hidden="true">×</button>
              
   </div>

<?php if (@count(@$_GET['otherMenu'])!= 0) { ?>
        <div id="pageLogin" class="hiddenPagesLogin" style="" >
		  <div class="modal-header">
			<button type="button" onclick="slidePage('pageLogin', 'hidden');" class="close" data-dismiss="modal" aria-hidden="true">×</button>
			<h3>Entrar</h3>
		  </div>
		  <div class="modal-body">
                      <form class="form-horizontal loginFrm" method="post" action="" onsubmit="javascript: return false;">
			  <div class="control-group">								
                              <input type="text" id="user" placeholder="Utilizador">
			  </div>
			  <div class="control-group">
                              <input type="password" id="password"  placeholder="Password">
			  </div>
			  <div class="control-group"> 
				<label class="checkbox">
				<input type="checkbox"> Lembrar-me
				</label>
			  </div>
			<button href="#" onclick="login();" class="btn btn-success">Entrar</button>
                        <button href="#" style="background: #ea7728" class="btn btn-success" onclick="slidePage('pageCriarConta', 'show');
                        slidePage('pageLogin', 'hidden')">Registar-se</button>
			<button class="btn" data-dismiss="modal" aria-hidden="true">Sair</button>
                      </form>		
		  </div>
	</div>
        <?php } ?>

<!-- Footer ================================================================== -->
	
	<?php include './includes/rodape.php'; ?>
            <!-- Container End -->

<!-- Placed at the end of the document so the pages load faster ============================================= -->
	<script src="themes/js/jquery.js" type="text/javascript"></script>
	<script src="themes/js/bootstrap.min.js" type="text/javascript"></script>
	<script src="themes/js/google-code-prettify/prettify.js"></script>
	
	<script src="themes/js/bootshop.js"></script>
    <script src="themes/js/jquery.lightbox-0.5.js"></script>
	
	<!-- Themes switcher section ============================================================================================= -->
<div id="secectionBox">
<link rel="stylesheet" href="themes/switch/themeswitch.css" type="text/css" media="screen" />
<script src="themes/switch/theamswitcher.js" type="text/javascript" charset="utf-8"></script>
	<div id="themeContainer">
	<div id="hideme" class="themeTitle">Style Selector</div>
	<div class="themeName">Oregional Skin</div>
	<div class="images style">
	<a href="themes/css/#" name="bootshop"><img src="themes/switch/images/clr/bootshop.png" alt="bootstrap business templates" class="active"></a>
	<a href="themes/css/#" name="businessltd"><img src="themes/switch/images/clr/businessltd.png" alt="bootstrap business templates" class="active"></a>
	</div>
	<div class="themeName">Bootswatch Skins (11)</div>
	<div class="images style">
		<a href="themes/css/#" name="amelia" title="Amelia"><img src="themes/switch/images/clr/amelia.png" alt="bootstrap business templates"></a>
		<a href="themes/css/#" name="spruce" title="Spruce"><img src="themes/switch/images/clr/spruce.png" alt="bootstrap business templates" ></a>
		<a href="themes/css/#" name="superhero" title="Superhero"><img src="themes/switch/images/clr/superhero.png" alt="bootstrap business templates"></a>
		<a href="themes/css/#" name="cyborg"><img src="themes/switch/images/clr/cyborg.png" alt="bootstrap business templates"></a>
		<a href="themes/css/#" name="cerulean"><img src="themes/switch/images/clr/cerulean.png" alt="bootstrap business templates"></a>
		<a href="themes/css/#" name="journal"><img src="themes/switch/images/clr/journal.png" alt="bootstrap business templates"></a>
		<a href="themes/css/#" name="readable"><img src="themes/switch/images/clr/readable.png" alt="bootstrap business templates"></a>	
		<a href="themes/css/#" name="simplex"><img src="themes/switch/images/clr/simplex.png" alt="bootstrap business templates"></a>
		<a href="themes/css/#" name="slate"><img src="themes/switch/images/clr/slate.png" alt="bootstrap business templates"></a>
		<a href="themes/css/#" name="spacelab"><img src="themes/switch/images/clr/spacelab.png" alt="bootstrap business templates"></a>
		<a href="themes/css/#" name="united"><img src="themes/switch/images/clr/united.png" alt="bootstrap business templates"></a>
		<p style="margin:0;line-height:normal;margin-left:-10px;display:none;"><small>These are just examples and you can build your own color scheme in the backend.</small></p>
	</div>
	<div class="themeName">Background Patterns </div>
	<div class="images patterns">
		<a href="themes/css/#" name="pattern1"><img src="themes/switch/images/pattern/pattern1.png" alt="bootstrap business templates" class="active"></a>
		<a href="themes/css/#" name="pattern2"><img src="themes/switch/images/pattern/pattern2.png" alt="bootstrap business templates"></a>
		<a href="themes/css/#" name="pattern3"><img src="themes/switch/images/pattern/pattern3.png" alt="bootstrap business templates"></a>
		<a href="themes/css/#" name="pattern4"><img src="themes/switch/images/pattern/pattern4.png" alt="bootstrap business templates"></a>
		<a href="themes/css/#" name="pattern5"><img src="themes/switch/images/pattern/pattern5.png" alt="bootstrap business templates"></a>
		<a href="themes/css/#" name="pattern6"><img src="themes/switch/images/pattern/pattern6.png" alt="bootstrap business templates"></a>
		<a href="themes/css/#" name="pattern7"><img src="themes/switch/images/pattern/pattern7.png" alt="bootstrap business templates"></a>
		<a href="themes/css/#" name="pattern8"><img src="themes/switch/images/pattern/pattern8.png" alt="bootstrap business templates"></a>
		<a href="themes/css/#" name="pattern9"><img src="themes/switch/images/pattern/pattern9.png" alt="bootstrap business templates"></a>
		<a href="themes/css/#" name="pattern10"><img src="themes/switch/images/pattern/pattern10.png" alt="bootstrap business templates"></a>
		
		<a href="themes/css/#" name="pattern11"><img src="themes/switch/images/pattern/pattern11.png" alt="bootstrap business templates"></a>
		<a href="themes/css/#" name="pattern12"><img src="themes/switch/images/pattern/pattern12.png" alt="bootstrap business templates"></a>
		<a href="themes/css/#" name="pattern13"><img src="themes/switch/images/pattern/pattern13.png" alt="bootstrap business templates"></a>
		<a href="themes/css/#" name="pattern14"><img src="themes/switch/images/pattern/pattern14.png" alt="bootstrap business templates"></a>
		<a href="themes/css/#" name="pattern15"><img src="themes/switch/images/pattern/pattern15.png" alt="bootstrap business templates"></a>
		
		<a href="themes/css/#" name="pattern16"><img src="themes/switch/images/pattern/pattern16.png" alt="bootstrap business templates"></a>
		<a href="themes/css/#" name="pattern17"><img src="themes/switch/images/pattern/pattern17.png" alt="bootstrap business templates"></a>
		<a href="themes/css/#" name="pattern18"><img src="themes/switch/images/pattern/pattern18.png" alt="bootstrap business templates"></a>
		<a href="themes/css/#" name="pattern19"><img src="themes/switch/images/pattern/pattern19.png" alt="bootstrap business templates"></a>
		<a href="themes/css/#" name="pattern20"><img src="themes/switch/images/pattern/pattern20.png" alt="bootstrap business templates"></a>
		 
	</div>
	</div>
</div>
<!--<span id="themesBtn"></span>-->
</body>
</html>

