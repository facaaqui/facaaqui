<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of UtilizadorDTO
 *
 * @author DISTER BOSS
 */
class UtilizadorDTO extends AbstractDTO {
    public $id;
    public $tipo;
    public $userName;
    public $senha;
    public $idCliente;
    
    function getId() {
        return $this->id;
    }

    function getTipo() {
        return $this->tipo;
    }

    function getUserName() {
        return $this->userName;
    }

    function getSenha() {
        return $this->senha;
    }

    function getIdCliente() {
        return $this->idCliente;
    }

    function setId($id) {
        $this->id = $id;
    }

    function setTipo($tipo) {
        $this->tipo = $tipo;
    }

    function setUserName($userName) {
        $this->userName = $userName;
    }

    function setSenha($senha) {
        $this->senha = $senha;
    }

    function setIdCliente($idCliente) {
        $this->idCliente = $idCliente;
    }

    
    
                public function logarR() {
        $queryString = "SELECT * FROM {$this->table} 
                        WHERE userName = '{$this->userName}' AND senha = '{$this->senha}'";
        $query = $this->Connection()->query($queryString);
        $dados = $query->fetchAll(PDO::FETCH_OBJ);
        return $dados;
    }
        
     
    public function __construct($c = __CLASS__) {
        parent::__construct($c);
    }
}
