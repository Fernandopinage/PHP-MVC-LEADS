<?php 


Class ClassProduto{

    private $id;
    private $cod;
    private $produto;
    private $referencia;
    private $tipo;
    private $categoria;
    private $caracteristica;
    private $custo;
    private $venda;
    private $desc;
    private $comissao;

    public function setID($id)
    {
        $this->id = $id;
    }

    public function getID()
    {
        return $this->id;
    }

    public function setCod($cod)
    {
        $this->cod = $cod;
    }

    public function getCod()
    {
        return $this->cod;
    }

    public function setProduto($produto)
    {
        $this->produto = $produto;
    }

    public function getProduto()
    {
        return $this->produto;
    }

    public function setReferencia($referencia)
    {
        $this->referencia = $referencia;
    }

    public function getReferencia()
    {
        return $this->referencia;
    }

    public function setTipo($tipo)
    {
        $this->tipo = $tipo;
    }

    public function getTipo()
    {
        return $this->tipo;
    }

    public function setCategoria($categoria)
    {
        $this->categoria = $categoria;
    }

    public function getCategoria()
    {
        return $this->categoria;
    }

    public function setCaracteristica($caracteristica)
    {
        $this->caracteristica = $caracteristica;
    }

    public function getCaracteristica()
    {
        return $this->caracteristica;
    }
    
    public function setCusto($custo)
    {
        $this->custo = $custo;
    }

    public function getCusto()
    {
        return $this->custo;
    }

    public function setVenda($venda)
    {
        $this->venda = $venda;
    }

    public function getVenda()
    {
        return $this->venda;
    }
    
    public function setDesc($desc)
    {
        $this->desc = $desc;
    }

    public function getDesc()
    {
        return $this->desc;
    }

    public function setComissao($comissao)
    {
        $this->comissao = $comissao;
    }

    public function getComissao()
    {
        return $this->comissao;
    }
}


?>