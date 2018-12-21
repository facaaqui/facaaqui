<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of ClienteDTO
 *
 * @author Venan
 */
class ClienteDTO extends AbstractDTO {
    public $id;
    public $nome;
    public $nif;
    public $telefone;
    public $email;
    public $provincia;
    public $municipio;
    public $bairro;
    
   

    function getNome() {
        return $this->nome;
    }

    function getNif() {
        return $this->nif;
    }

    function getTelefone() {
        return $this->telefone;
    }

    function getEmail() {
        return $this->email;
    }

    function getProvincia() {
        return $this->provincia;
    }

    function getMunicipio() {
        return $this->municipio;
    }

    function getBairro() {
        return $this->bairro;
    }

    function setId($id) {
        $this->id = $id;
    }

    function setNome($nome) {
        $this->nome = $nome;
    }

    function setNif($nif) {
        $this->nif = $nif;
    }

    function setTelefone($telefone) {
        $this->telefone = $telefone;
    }

    function setEmail($email) {
        $this->email = $email;
    }

    function setProvincia($provincia) {
        $this->provincia = $provincia;
    }

    function setMunicipio($municipio) {
        $this->municipio = $municipio;
    }

    function setBairro($bairro) {
        $this->bairro = $bairro;
    }

 public function __construct($c = __CLASS__) {
        parent::__construct($c);
    }
}
