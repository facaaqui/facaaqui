<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of ClienteController
 *
 * @author Venan
 */
class ClienteController extends AbstractController{
    public function save($a){
        $dto = $this->setAttributes($a);
        $dto['ClienteDTO']->save();
        $idCliente = $dto['ClienteDTO']->getId();
        
        $dto['UtilizadorDTO']->setIdCliente($idCliente);
        $dto['UtilizadorDTO']->setTipo(3);
        $dto['UtilizadorDTO']->save();
        header("Location: ../index.php");
    }
    
         public function __construct($c = __CLASS__) {
        parent::__construct($c);
    }
}
