<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of LogDTO
 *
 * @author DISTER BOSS
 */
class LogDTO extends AbstractDTO {
    public $id;
    public $idUser;
    public $tipo;
    public $hora_Log;
    public $data_Log;
    public $tipoLog;
    
    
    function getId() {
        return $this->id;
    }

    function getIdUser() {
        return $this->idUser;
    }

    function getTipo() {
        return $this->tipo;
    }

    function getHora_Log() {
        return $this->hora_Log;
    }

    function getData_Log() {
        return $this->data_Log;
    }

    function setId($id) {
        $this->id = $id;
    }

    function setIdUser($idUser) {
        $this->idUser = $idUser;
    }

    function setTipo($tipo) {
        $this->tipo = $tipo;
    }

    function setHora_Log($hora_Log) {
        $this->hora_Log = $hora_Log;
    }

    function setData_Log($data_Log) {
        $this->data_Log = $data_Log;
    }
    
    function getTipoLog() {
        return $this->tipoLog;
    }

    function setTipoLog($tipoLog) {
        $this->tipoLog = $tipoLog;
    }

    
 public function __construct($c = __CLASS__) {
        parent::__construct($c);
    }
    

    
    
}
