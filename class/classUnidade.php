<?php 


class ClassUnidade{

    private $key;
    private $empresa;
    private $codigo;
    private $descricao;
    private $razao;
    private $tipo;
    private $foto;
    private $inscricao;
    private $barra;
    private $suframa;
    private $cep;
    private $uf;
    private $logradouro;
    private $bairro;
    private $complemento; 

    public function setKey($key){
        $this->key = $key;
    }
    public function getKey(){
        return $this->key;
    }
    public function setEmpresa($empresa){
        $this->empresa = $empresa;
    }
    public function getEmpresa(){
        return $this->empresa;
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
    public function setRazao($razao){
        $this->razao = $razao;
    }
    public function getRazao(){
        return $this->razao;
    }
    public function setReduzido($reduzido){
        $this->reduzido = $reduzido;
    }
    public function getReduzido(){
        return $this->reduzido;
    }
    public function setTipo($tipo){
        $this->tipo = $tipo;
    }
    public function getTipo(){
        return $this->tipo;
    }
    public function setFoto($foto){
        $this->foto = $foto;
    }
    public function getFoto(){
        return $this->foto;
    }
    public function setInscricao($inscricao){
        $this->inscricao = $inscricao;
    }
    public function getInscricao(){
        return $this->inscricao;
    }
    public function setBarra($barra){
        $this->barra = $barra;
    }
    public function getBarra(){
        return $this->barra;
    }
    public function setSuframa($suframa){
        $this->suframa = $suframa;
    }
    public function getSuframa(){
        return $this->suframa;
    }
    public function setCep($cep){
        $this->cep = $cep;
    }
    public function getCep(){
        return $this->cep;
    }
    public function setUf($uf){
        $this->uf = $uf;
    }
    public function getUf(){
        return $this->uf;
    }
    public function setLogradouro($logradouro){
        $this->logradouro = $logradouro;
    }
    public function getLogradouro(){
        return $this->logradouro;
    }
    public function setBairro($bairro){
        $this->bairro = $bairro;
    }
    public function getBairro(){
        return $this->bairro;
    }
    public function setComplemento($complemento){
        $this->complemento = $complemento;
    }
    public function getComplemento(){
        return $this->complemento;
    }
    
}

?>