<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of PedidosController
 *
 * @author DISTER BOSS
 */
class PedidosController extends AbstractController{
     
    
    public function __construct($c = __CLASS__) {
        parent::__construct($c);
    }
    
    public function itensPedido($a){
        session_start();
        $dto = $this->setAttributes($a);
        $dados = $dto->findItensPedido();
        
        $result = "
                  <table border= 1 width='60%' align='Center'>
                     <thead>
                            <tr>
                                <th colspan='9' align='center' style='font-size:20px; background:#00c0ef; text-align:center; color:#fff;'>
                                    Produtos&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                                    
                                </th>
                            </tr>
                            <tr>

                                <th>Descrição</th>
                                <th>Quantidade</th>
                                <th>Preço Unt</th>
				<th>Total</th>
                            </tr>
                        </thead>
                  ";
        
        
        
        foreach ($dados as $dado){
               $result .= '
                 <tr>
                             <td>'.$dado->nome.'</td>
                             <td>'.$dado->qtd.'</td>
                             <td>'.number_format($dado->precoUnt)."AKZ".'</td>
                             <td>'.number_format($dado->total)."AKZ".'</td>
                             <td></td>
         
                 </tr>
                ';
            
        }   
       
        $result .= "</table>";
        echo "$result";
    }
    
     public function terminarPedido($a) {
        session_start();
        $dto = $this->setAttributes($a);
        $dto->setSessao($_SESSION['pedidoSessao']);
        $dto->setStatus(1);
        $dto->setIdMercado($_GET['idMercado']);
        $dto->save();
      
        $idPedido = $dto->getLastObject();
        
        $tkDTO = new tokenDTO;
        $str = substr(uniqid(),0,6);
        $tkDTO->setIdPedido($idPedido);
        $tkDTO->setStr($str);
        $tkDTO->save();
        
        unset($_SESSION['pedidoSessao']);
        #echo $idPedido;
       
        header("Location: ../../consulVisionBackFront/Pages/produtos.php?idMercado={$_GET['idMercado']}&sector={$_GET['sector']}&otherMenu={$_GET['otherMenu']}&idCategoria={$_GET['idCategoria']}");
    }
    
}
