<?php 

class ClassPreco{


    private $id = null;
    private $cod = null;
    private $desc = null;
    private $data = null;
    private $termino = null;
    private $produto = null;
    private $valor = null;


    public function setID($id){
        $this->id = $id;
    }
    public function getID(){

        return $this->id;
    }
    public function setCod($cod){
        $this->cod = $cod;
    }
    public function getCod(){

        return $this->cod;
    }

    public function setDesc($desc){
        $this->desc = $desc;
    }
    public function getDesc(){

        return $this->desc;
    }
    public function setData($data){
        $this->data = $data;
    }
    public function getData(){

        return $this->data;
    }
    public function setTermino($termino){
        $this->termino = $termino;
    }
    public function getTermino(){

        return $this->termino;
    }

    public function setProduto($produto){
        $this->produto = $produto;
    }
    public function getProduto(){

        return $this->produto;
    }

    public function setValor($valor){
        $this->valor = $valor;
    }
    public function getValor(){

        return $this->valor;
    }
}
