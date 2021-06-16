<?php 

class ClassGrupo{


    private $codigo = null;
    private $descricao = null;
    private $ID = null;

    public function setID($ID){
        $this->ID = $ID;

    }
    public function getID(){

        return $this->ID;
    }

    public function setCodigo($codigo){
        $this->codigo = $codigo;

    }
    public function getCodigo(){

        return $this->codigo;
    }

    public function setDescricao($descricao){

        $this->descricao = $descricao;
    }
    public function getDescricao(){

        return $this->descricao;
    }

}