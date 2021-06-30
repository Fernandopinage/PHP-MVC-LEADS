<?php 

Class ClassLeads{


    private $id;
    private $filial;
    private $empresa;
    private $consultor;
    private $endereco;
    private $telefone;
    private $celular;
    private $fase;
    private $status;
    private $produto;
    private $valor;
    private $unidade;
    private $desconto;
    private $descricao;
    private $datainicio;
    private $datafim;
    private $formapagamento;

    public function setId($id){
        $this->id = $id;

    }
    public function getId(){
        return $this->id;

    }

    public function setFilial($filial){
        $this->filial = $filial;

    }
    public function getFilial(){
        return $this->filial;

    }

    public function setEmpresa($empresa){
        $this->empresa = $empresa;

    }
    public function getEmpresa(){
        return $this->empresa;

    }

    public function setConsultor($consultor){
        $this->consultor = $consultor;

    }
    public function getConsultor(){
        return $this->consultor;

    }
    
    public function setEndereco($endereco){
        $this->endereco = $endereco;

    }
    public function getEndereco(){
        return $this->endereco;

    }

    public function setTelefone($telefone){
        $this->telefone = $telefone;

    }
    public function getTelefone(){
        return $this->telefone;

    }

    public function setCelular($celular){
        $this->celular = $celular;

    }
    public function getCelular(){
        return $this->celular;

    }
    public function setFase($fase){
        $this->fase = $fase;

    }
    public function getFase(){
        return $this->fase;

    }

    public function setStatus($status){
        $this->status = $status;

    }
    public function getStatus(){
        return $this->status;

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

    public function setUnidade($unidade){
        $this->unidade = $unidade;

    }
    public function getUnidade(){
        return $this->unidade;

    }

    public function setDesconto($desconto){
        $this->descontovalor = $desconto;

    }
    public function getDesconto(){
        return $this->desconto;

    }

    public function setDescricao($descricao){
        $this->descricao = $descricao;

    }
    public function getDescricao(){
        return $this->descricao;

    }
    
    public function setDatainicio($datainicio){
        $this->datainicio = $datainicio;

    }
    public function getDatainicio(){
        return $this->datainicio;

    }

    public function setDatafim($datafim){
        $this->datafim = $datafim;

    }
    public function getDatafim(){
        return $this->datafim;

    }
    public function setFormapagamento($formapagamento){
        $this->formapagamento = $formapagamento;

    }
    public function getFormapagamento(){
        return $this->formapagamento;

    }
} 



?>