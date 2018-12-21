<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of MercadoDTO
 *
 * @author DISTER BOSS
 */
class MercadoDTO extends AbstractDTO {
    public $id;
    public $idSector;
    public $nome;
    public $telefone;
    public $email;
    public $nif;
    public $foto;
    public $infoAdd;
    public $foto1;
    public $foto2;
    public $municipio;
    public $bairro;
    public $provincia;
    public $statusDeligence;
    public $foto3;
    public $idUser;
  
    function getId() {
        return $this->id;
    }

    function getIdSector() {
        return $this->idSector;
    }

    function getNome() {
        return $this->nome;
    }

    function getTelefone() {
        return $this->telefone;
    }

    function getEmail() {
        return $this->email;
    }

    function getNif() {
        return $this->nif;
    }

    function getFoto() {
        return $this->foto;
    }

    function getInfoAdd() {
        return $this->infoAdd;
    }

    function getFoto1() {
        return $this->foto1;
    }

    function getFoto2() {
        return $this->foto2;
    }

    function getMunicipio() {
        return $this->municipio;
    }

    function getBairro() {
        return $this->bairro;
    }

    function getProvincia() {
        return $this->provincia;
    }

    function getStatusDeligence() {
        return $this->statusDeligence;
    }

    function setId($id) {
        $this->id = $id;
    }

    function setIdSector($idSector) {
        $this->idSector = $idSector;
    }

    function setNome($nome) {
        $this->nome = $nome;
    }

    function setTelefone($telefone) {
        $this->telefone = $telefone;
    }

    function setEmail($email) {
        $this->email = $email;
    }

    function setNif($nif) {
        $this->nif = $nif;
    }

    function setFoto($foto) {
        $this->foto = $foto;
    }

    function setInfoAdd($infoAdd) {
        $this->infoAdd = $infoAdd;
    }

    function setFoto1($foto1) {
        $this->foto1 = $foto1;
    }

    function setFoto2($foto2) {
        $this->foto2 = $foto2;
    }

    function setMunicipio($municipio) {
        $this->municipio = $municipio;
    }

    function setBairro($bairro) {
        $this->bairro = $bairro;
    }

    function setProvincia($provincia) {
        $this->provincia = $provincia;
    }

    function setStatusDeligence($statusDeligence) {
        $this->statusDeligence = $statusDeligence;
    }
    
    function getFoto3() {
        return $this->foto3;
    }

    function setFoto3($foto3) {
        $this->foto3 = $foto3;
    }
    
    function getIdUser() {
        return $this->idUser;
    }

    function setIdUser($idUser) {
        $this->idUser = $idUser;
    }

    
    
        
    public function findAllMercado($provincia = null, $bairro = null, $param = null){
        $AND = !is_null($provincia) && !empty($provincia) ? " AND m.provincia ='$provincia' " : NULL;
        $and= !is_null($bairro) && !empty($bairro) ? " AND m.bairro like '$bairro%' " : NULL;
        $And = !is_null($param) && !empty($param) ? " AND s.descricao like '$param%' " : NULL;
        $queryString = "SELECT m.*, s.descricao 
                            FROM mercado m
                            INNER JOIN sector s ON s.id = m.idSector
                            WHERE m.statusDeligence ='1' ".$And.$AND.$and;
        $query = $this->Connection()->query($queryString);
        return $query->fetchAll(PDO::FETCH_OBJ);
    }
              public function findAllMercadoById($idMercado){
        $queryString = "SELECT * 
                             FROM mercado
                             WHERE id = '$idMercado'";
        $query = $this->Connection()->query($queryString);
        return $query->fetchAll(PDO::FETCH_OBJ);
    }
    
    
    
    
  public function __construct($c = __CLASS__) {
        parent::__construct($c);
    }
    

    
    
    
    
}
