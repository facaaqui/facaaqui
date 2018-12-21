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
                              <form method="get" action=""> 
                              
                                <div class="sided-90x mb-30" id="mercado'.$dado->id.'">
                                    
                                    <div class="s-left">
                                    
                                        <img class="br-3" src="FaReservaBack/Pages/img/Colaboradores/'.$dado->foto.'" alt="Menu Image">
                                            
                                    </div>
                                    
                                        <a href="detalhes.php?idMercado='.$dado->id.'">
                                            
                                        <div class="s-right">
                                        
                                                <h5 class="mb-10"><b>'.$dado->nome.'</b><b class="color-primary float-right"></b></h5>
                                                <p class="pr-70"><b>Provincia:</b>'.$dado->provincia.'</p>
                                                <p class="pr-70"><b>Municipio:</b>'.$dado->municipio.'</p>
                                                <p class="pr-70"><b>Bairro:</b>'.$dado->bairro.'</p>
                                        </div>
                                       </a>
                                </div>
                                
                              </form>
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