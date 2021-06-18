<?php 


Class ClassProduto{

    private $id;
    private $produto;
    private $unidade;
    private $valor;
    private $cod;
    private $status;
    private $descrcao;

    public function setID($id)
    {
        $this->id = $id;
    }

    public function getID()
    {
        return $this->id;
    }

    public function setProduto($produto)
    {
        $this->produto = $produto;
    }

    public function getProduto()
    {
        return $this->produto;
    }

    public function setUnidade($unidade)
    {
        $this->unidade = $unidade;
    }

    public function getUnidade()
    {
        return $this->unidade;
    }

    public function setValor($valor)
    {
        $this->valor = $valor;
    }

    public function getValor()
    {
        return $this->valor;
    }
    public function setCodigo($cod)
    {
        $this->cod = $cod;
    }

    public function getCodigo()
    {
        return $this->cod;
    }

    public function setStatus($status)
    {
        $this->status = $status;
    }

    public function getStatus()
    {
        return $this->status;
    }
    public function setDescricao($descrcao)
    {
        $this->descrcao = $descrcao;
    }

    public function getDescricao()
    {
        return $this->descrcao;
    }
}


?>