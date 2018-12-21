<?php
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of MercadoController
 *
 * @author DISTER BOSS
 */
class MercadoController extends AbstractController{
    public function save($a){
        session_start();
      $dto = $this->setAttributes($a);
        $img = RequestUtil::getFile();
        
        $nome = explode(".", $img['name']['Mercado.foto']);
        $posicao = count($nome) - 1;
        $newName = substr(uniqid(),0,4).".".$nome[$posicao];
        $dto->setFoto($newName);
        move_uploaded_file($img['tmp_name']['Mercado.foto'],"Pages/img/Colaboradores/".$newName);
        
        $nome1 = explode(".", $img['name']['Mercado.foto1']);
        $posicao1 = count($nome1) - 1;
        $newName1 = substr(uniqid(),0,5).".".$nome1[$posicao1];
        $dto->setFoto1($newName1);
        move_uploaded_file($img['tmp_name']['Mercado.foto1'],"Pages/img/Colaboradores/".$newName1);
        
        $nome2 = explode(".", $img['name']['Mercado.foto2']);
        $posicao2 = count($nome2) - 1;
        $newName2 = substr(uniqid(),0,6).".".$nome2[$posicao2];
        $dto->setFoto2($newName2);
        move_uploaded_file($img['tmp_name']['Mercado.foto2'],"Pages/img/Colaboradores/".$newName2);
        
        $nome3 = explode(".", $img['name']['Mercado.foto3']);
        $posicao3 = count($nome3) - 1;
        $newName3 = substr(uniqid(),0,7).".".$nome3[$posicao3];
        $dto->setFoto2($newName3);
        move_uploaded_file($img['tmp_name']['Mercado.foto2'],"Pages/img/Colaboradores/".$newName3);
        
        $dto->setIdUser($_SESSION['logedUserId']);
        $dto->setStatusDeligence(1);
        $dto->save();
        header("Location: ../Cadastro.php");
       
    }
    
       public function excluir($a){
        $dto = $this->setAttributes($a);
        $dto->delete();
        header("Location: ../Cadastro.php");
    }
    public function actualizarMercado($a){
        $dto = $this->setAttributes($a);
        if ($dto->exist('id')) {
            $dto->update('id');
           }
           header("Location: ../Cadastro.php");
    }
 
    
        public function __construct($c = __CLASS__) {
        parent::__construct($c);
    }
}
