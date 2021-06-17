<?php 


Class ClassProduto{

    private $id;
    private $produto;
    private $unidade;
    private $valor;
    private $data;
    private $termino;
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
    public function setDataInicio($data)
    {
        $this->data = $data;
    }

    public function getDataInicio()
    {
        return $this->data;
    }

    public function setTermino($termino)
    {
        $this->termino = $termino;
    }

    public function getTermino()
    {
        return $this->termino;
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