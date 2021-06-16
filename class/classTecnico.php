<?php


class ClassTecnico
{

    private $id;
    private $cliente;
    private $usuario;
    private $data;
    private $resumo;
    private $contrato;
    private $horainicio;
    private $horafim;
    private $duracao;
    private $evento;
    private $status;
    private $contato;
    private $detalhe;


    public function setID($id)
    {
        $this->id = $id;
    }

    public function getID()
    {
        return $this->id;
    }

    public function setCliente($cliente)
    {
        $this->cliente = $cliente;
    }

    public function getCliente()
    {
        return $this->cliente;
    }
    public function setUsuario($usuario)
    {
        $this->usuario = $usuario;
    }

    public function getUsuario()
    {
        return $this->usuario;
    }
    public function setData($data)
    {
        $this->data = $data;
    }

    public function getData()
    {
        return $this->data;
    }
    public function setResumo($resumo)
    {
        $this->resumo = $resumo;
    }

    public function getResumo()
    {
        return $this->resumo;
    }
    public function setContrato($contrato)
    {
        $this->contrato = $contrato;
    }

    public function getContrato()
    {
        return $this->contrato;
    }
    public function setHorainicio($horainicio)
    {
        $this->horainicio = $horainicio;
    }

    public function getHorainicio()
    {
        return $this->horainicio;
    }
    public function setHorafim($horafim)
    {
        $this->horafim = $horafim;
    }

    public function getHorafim()
    {
        return $this->horafim;
    }
    public function setDuracao($duracao)
    {
        $this->duracao = $duracao;
    }

    public function getDuracao()
    {
        return $this->duracao;
    }
    public function setEvento($evento)
    {
        $this->evento = $evento;
    }

    public function getEvento()
    {
        return $this->evento;
    }
    public function setStatus($status)
    {
        $this->status = $status;
    }

    public function getStatus()
    {
        return $this->status;
    }
    public function setContato($contato)
    {
        $this->contato = $contato;
    }

    public function getContato()
    {
        return $this->contato;
    }
    public function setDetalhe($detalhe)
    {
        $this->detalhe = $detalhe;
    }

    public function getDetalhe()
    {
        return $this->detalhe;
    }
}
