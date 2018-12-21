<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of SectorDTO
 *
 * @author Venan
 */
class SectorDTO extends AbstractDTO {
    public $id;
    public $descricao;
    
    function getId() {
        return $this->id;
    }

    function getDescricao() {
        return $this->descricao;
    }

    function setId($id) {
        $this->id = $id;
    }

    function setDescricao($descricao) {
        $this->descricao = $descricao;
    }

 public function __construct($c = __CLASS__) {
        parent::__construct($c);
    }
}
