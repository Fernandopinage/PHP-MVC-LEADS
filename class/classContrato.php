<?php 

Class ClassContrato{


private $projeto;
private $numerocontrato;
private $cliente;
private $modalidade;
private $datacontrato;
private $prazo;
private $datainicio;
private $datafim;
private $valorcontrato;
private $horacontrato;
private $valorhora;
private $valoradicional;
private $opcao;
private $complemento;
private $descricao;
private $modalidade2;
private $dataprojeto;
private $prazovalidade;
 
    public function setProjeto($projeto){
        $this->projeto = $projeto;

    }
    public function getProjeto(){
        return $this->projeto;

    }

    public function setNumerocontrato($numerocontrato){
        $this->numerocontrato = $numerocontrato;

    }
    public function getNumerocontrato(){
        return $this->numerocontrato;

    }
    
    public function setCliente($cliente){
        $this->cliente = $cliente;

    }
    public function getCliente(){
        return $this->cliente;

    }

    public function setModalidade($modalidade){
        $this->modalidade = $modalidade;

    }
    public function getModalidade(){
        return $this->modalidade;

    }

    public function setDatacontrato($datacontrato){
        $this->datacontrato = $datacontrato;

    }
    public function getDatacontrato(){
        return $this->datacontrato;

    }

    public function setPrazo($prazo){
        $this->prazo = $prazo;

    }
    public function getPrazo(){
        return $this->prazo;

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

    public function setValorcontrato($valorcontrato){
        $this->valorcontrato = $valorcontrato;

    }
    public function getValorcontrato(){
        return $this->valorcontrato;

    }
    public function setHoracontrato($horacontrato){
        $this->horacontrato = $horacontrato;

    }
    public function getHoracontrato(){
        return $this->horacontrato;

    }
    public function setValorhora($valorhora){
        $this->valorhora = $valorhora;

    }
    public function getValorhora(){
        return $this->valorhora;

    }
    public function setValoradicional($valoradicional){
        $this->valoradicional = $valoradicional;

    }
    public function getValoradicional(){
        return $this->valoradicional;

    }
    public function setOpcao($opcao){
        $this->opcao = $opcao;

    }
    public function getOpcao(){
        return $this->opcao;

    }
    public function setDescricao($descricao){
        $this->descricao = $descricao;

    }
    public function getDescricao(){
        return $this->descricao;

    }

    public function setModalidade2($modalidade2){
        $this->modalidade2 = $modalidade2;

    }
    public function getModalidade2(){
        return $this->modalidade2;

    }

    public function setDataprojeto($dataprojeto){
        $this->dataprojeto = $dataprojeto;

    }
    public function getDataprojeto(){
        return $this->dataprojeto;

    }

    public function setPrazovalidade($prazovalidade){
        $this->prazovalidade = $prazovalidade;

    }
    public function getPrazovalidade(){
        return $this->prazovalidade;

    }

    public function setComplemento($complemento){
        $this->complemento = $complemento;

    }
    public function getComplemento(){
        return $this->complemento;

    }
}

?>