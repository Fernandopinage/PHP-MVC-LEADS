<?php

class ClassUsuario
{

    private $ID;
    private $nome;
    private $email;
    private $foto;
    private $senha;
    private $funcao;
    private $data;
    private $option;


    public function setID($ID)
    {
        $this->ID = $ID;
    }
    public function getID()
    {
        return $this->ID;
    }
    public function setNome($nome)
    {
        $this->nome = $nome;
    }
    public function getNome()
    {
        return $this->nome;
    }
    public function setEmail($email)
    {
        $this->email = $email;
    }
    public function getEmail()
    {
        return $this->email;
    }
    public function setFoto($foto)
    {
        $this->foto = $foto;
    }
    public function getFoto()
    {
        return $this->foto;
    }
    public function setSenha($senha)
    {
        $this->senha = $senha;
    }
    public function getSenha()
    {
        return $this->senha;
    }
    public function setFuncao($funcao)
    {
        $this->funcao = $funcao;
    }
    public function getFuncao()
    {
        return $this->funcao;
    }
    public function setData($data)
    {
        $this->data = $data;
    }
    public function getData()
    {
        return $this->data;
    }
    public function setOption($option)
    {
        $this->option = $option;
    }
    public function getOption()
    {
        return $this->option;
    }
}
?>
