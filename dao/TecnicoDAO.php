<?php
include_once "../dao/DAO.php";
include_once "../class/classTecnico.php";


class Tecnico extends Dao
{



    public function insertAgendaTecnico(ClassTecnico $ClassTecnico)
    {



        $sql = "INSERT INTO `crm_agt`(`CRM_AGT_IDEMP`, `CRM_AGT_HORA`, `CRM_AGT_CODCAD`, `CRM_AGT_RESUMO`, `CRM_AGT_RESUMO2`, `CRM_AGT_DETALHETEC`, `CRM_AGT_DURACAO`, `CRM_AGT_STATUS`, `CRM_AGT_EVENTO`, `CRM_AGT_CONTATO`, `CRM_AGT_BLOQ`, `CRM_AGT_CONTROLE`, `CRM_AGT_EXCLUIDO`, `CRM_AGT_HORA2`, `CRM_AGT_NUMCTR`, `CRM_AGT_ID`, `CRM_AGT_CODUSU`, `CRM_AGT_DATA`) 
    VALUES (:CRM_AGT_IDEMP, :CRM_AGT_HORA, :CRM_AGT_CODCAD, :CRM_AGT_RESUMO, :CRM_AGT_RESUMO2, :CRM_AGT_DETALHETEC, :CRM_AGT_DURACAO, :CRM_AGT_STATUS, :CRM_AGT_EVENTO, :CRM_AGT_CONTATO, :CRM_AGT_BLOQ, :CRM_AGT_CONTROLE, :CRM_AGT_EXCLUIDO, :CRM_AGT_HORA2, :CRM_AGT_NUMCTR, null, :CRM_AGT_CODUSU, :CRM_AGT_DATA)";

        $insert = $this->con->prepare($sql);
        $insert->bindValue(":CRM_AGT_IDEMP", '');
        $insert->bindValue(":CRM_AGT_HORA", $ClassTecnico->getHorainicio());
        $insert->bindValue(":CRM_AGT_CODCAD", $ClassTecnico->getCliente());
        $insert->bindValue(":CRM_AGT_RESUMO", $ClassTecnico->getResumo());
        $insert->bindValue(":CRM_AGT_RESUMO2", '');
        $insert->bindValue(":CRM_AGT_DETALHETEC", $ClassTecnico->getDetalhe());
        $insert->bindValue(":CRM_AGT_DURACAO", $ClassTecnico->getDuracao());
        $insert->bindValue(":CRM_AGT_STATUS", $ClassTecnico->getStatus());
        $insert->bindValue(":CRM_AGT_EVENTO", $ClassTecnico->getEvento());
        $insert->bindValue(":CRM_AGT_CONTATO", $ClassTecnico->getContato());
        $insert->bindValue(":CRM_AGT_BLOQ", '');
        $insert->bindValue(":CRM_AGT_CONTROLE", '');
        $insert->bindValue(":CRM_AGT_EXCLUIDO", '');
        $insert->bindValue(":CRM_AGT_HORA2", $ClassTecnico->getHorafim());
        $insert->bindValue(":CRM_AGT_NUMCTR", $ClassTecnico->getContrato());
        $insert->bindValue(":CRM_AGT_CODUSU", $ClassTecnico->getUsuario());
        $insert->bindValue(":CRM_AGT_DATA", $ClassTecnico->getData());
        $insert->execute();
    }


    public function totalAgendamento(){

        $sql = "SELECT * FROM `crm_agt`";

        $select = $this->con->prepare($sql);
        $select->execute();
        $array = array();
        while ($row = $select->fetch(PDO::FETCH_ASSOC)) {

            $ClassTecnico = new ClassTecnico();
            $ClassTecnico->setID($row['CRM_AGT_ID']);
            $ClassTecnico->setCliente($row['CRM_AGT_CODCAD']);
            $ClassTecnico->setUsuario($row['CRM_AGT_CODUSU']);
            $ClassTecnico->setData($row['CRM_AGT_DATA']);
            $ClassTecnico->setResumo($row['CRM_AGT_RESUMO']);
            $ClassTecnico->setContrato($row['CRM_AGT_NUMCTR']);
            $ClassTecnico->setHorainicio($row['CRM_AGT_HORA']);
            $ClassTecnico->setHorafim($row['CRM_AGT_HORA2']);
            $ClassTecnico->setDuracao($row['CRM_AGT_DURACAO']);
            $ClassTecnico->setEvento($row['CRM_AGT_EVENTO']);
            $ClassTecnico->setStatus($row['CRM_AGT_STATUS']);
            $ClassTecnico->setContato($row['CRM_AGT_CONTATO']);
            $ClassTecnico->setDetalhe($row['CRM_AGT_DETALHETEC']);
            $array[] =  $ClassTecnico;
        }
        return $array;
       
    }

    public function selectAgendaTecnico($inicio, $paginação)
    {
        $sql = "SELECT * FROM `crm_agt` Limit $inicio, $paginação";

        $select = $this->con->prepare($sql);
        $select->execute();
        $array = array();
        while ($row = $select->fetch(PDO::FETCH_ASSOC)) {

            $ClassTecnico = new ClassTecnico();
            $ClassTecnico->setID($row['CRM_AGT_ID']);
            $ClassTecnico->setCliente($row['CRM_AGT_CODCAD']);
            $ClassTecnico->setUsuario($row['CRM_AGT_CODUSU']);
            $ClassTecnico->setData($row['CRM_AGT_DATA']);
            $ClassTecnico->setResumo($row['CRM_AGT_RESUMO']);
            $ClassTecnico->setContrato($row['CRM_AGT_NUMCTR']);
            $ClassTecnico->setHorainicio($row['CRM_AGT_HORA']);
            $ClassTecnico->setHorafim($row['CRM_AGT_HORA2']);
            $ClassTecnico->setDuracao($row['CRM_AGT_DURACAO']);
            $ClassTecnico->setEvento($row['CRM_AGT_EVENTO']);
            $ClassTecnico->setStatus($row['CRM_AGT_STATUS']);
            $ClassTecnico->setContato($row['CRM_AGT_CONTATO']);
            $ClassTecnico->setDetalhe($row['CRM_AGT_DETALHETEC']);
            $array[] =  $ClassTecnico;
        }
        return $array;
    }


    public function selectCliente($cliente)
    {

        $sql = "SELECT TAB_CAD_NOME FROM `tab_cad` where TAB_CAD_ID ='$cliente'";
        $select = $this->con->prepare($sql);
        $select->execute();
        $row = $select->fetch(PDO::FETCH_ASSOC);
        echo $row['TAB_CAD_NOME'];
    }
    public function selectUsuario($usuario)
    {

        $sql = "SELECT TAB_COL_NOMESOCIAL FROM `tab_col` where TAB_COL_ID ='$usuario'";
        $select = $this->con->prepare($sql);
        $select->execute();
        $row = $select->fetch(PDO::FETCH_ASSOC);
        echo $row['TAB_COL_NOMESOCIAL'];
    }
}
