<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of FacaAquiController
 *
 * @author Venan
 */

 
class FacaAquiController extends AbstractController {
     
     public function findMercado($a){
        session_start();
        $dto = $this->setAttributes($a);
        $dados = $dto->findAllMercado(isset($_GET['provincia']) ? $_GET['provincia'] : NULL, isset($_GET['bairro']) ? $_GET['bairro'] : NULL, isset($_GET['param']) ? $_GET['param'] : NULL );

        foreach ($dados as $dado){
			   echo $result = '
			   


			   
            <div class="col-auto">

				<div class="paiContainer rotacaoManual ">

					<div class="boximgPai">

						<div  class="allboxs">

							<!-- =================== BEGIN FRONT =================== -->

							<div class="boxf">

								<div class="cover">

									<!-- =================== IMAGEM 1 =================== -->

									<a class="imagensEmpresasHover" href="Pages/detalhes.php?idMercado='.$dado->id.'&p"> <img class="imgempresa img-fluid" src="FaReservaBack/Pages/img/Colaboradores/'.$dado->foto.'" /> </a>

								</div>


								<!-- =================== FOOTER =================== -->

								<div class="container">

									<div class="row ">

										<div class="boxffo text-center clearfix px-2">

											<span class="float-left boxffolo"> <i class="fas fa-map-marker-alt boxffoicont"> </i> <span class=""> '.$dado->bairro.' </span> </span>

											<button class="fbtni float-right" onclick="rotateMae(this)"> Ver mais </button>
	
										</div>

									</div>

								</div>

							</div>

							<!-- =================== THE END FRONT =================== -->




							<!-- =================== BEGIN BACK =================== -->

							<div class="boxt">

								<div class="boxthdr">

									<!-- =================== TITLE DA EMPRESA =================== -->

									<h1 class="boxthdrt">'.$dado->nome.'</h3>

								</div>


								<!-- =================== CONTENT =================== -->

								<div class="content text-center">


									<!-- =================== INORMATION =================== -->

									<p class="boxtinfo">

										<i class="fas fa-home mr-1 mb-2 iconcor"> </i> <span class="textFooter mr-2">'.$dado->bairro.'</span> <br>

										<i class="fas fa-mobile-alt mr-1 mb-2 iconcor"> </i> <span class="textFooter  mr-2"> '.$dado->telefone.' </span> <br>

										<i class="fas fa-door-open mr-1 mb-2 iconcor"> </i> <span class="textFooter  mr-2"> Das 08h às 22h </span> <br>

									</p>


								</div>


								<!-- =================== FOOTER =================== -->

								<div class="boxfoot clearfix px-2">

									<!-- =================== BUTTON VOLTAR =================== -->

									<button class="fbtni float-left " onclick="rotateMae(this)"> <i class="fa fa-reply text-white"> </i> Voltar </button>

									<!-- =================== LINKS REDES SOCIAIS =================== -->


									<a href="https://www.facebook.com/" class="float-right fbtnr" rel="tooltip" title="Tenha mais informação"> <i class="fab fa-facebook-f boxfooticont "> </i> </a>
									<a href="https://www.facebook.com/" class="float-right fbtnr mr-2" rel="tooltip" title="Tenha mais informação"> <i class="fab fa-facebook-f boxfooticont "> </i> </a>

								</div>



								<!-- =================== THE END FOOTER =================== -->

							</div> <!-- END BACK -->

						</div>

					</div> <!-- END CARD -->

				</div> <!-- END CARD CONTAINER -->
				
			</div> <!-- END COL-SM-3 -->      
	   
                  ';
        }
    }
    
    
    public function saveSector($a){
        $dto = $this->setAttributes($a);
        $dto->save();
    }

        public function __construct($c = __CLASS__) {
        parent::__construct($c);
    }
}

?>

 <head> 
     <link rel="stylesheet" href="css/style_test.css"/> 
 </head>   <!-- STYLESHEET TEST -->