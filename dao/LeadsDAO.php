<?php 

include_once "../dao/DAO.php";
include_once "../class/classLeads.php";
include_once "../class/classParceiro.php";
Class ClassLeadsDAO extends Dao{


    public function insertLeads(){


    }

    public function buscaEmpresa(){

        $sql = "SELECT * from `tab_cad` ";

        $select = $this->con->prepare($sql);
        $select->execute();
        $array = array();
        while($row = $select->fetch(PDO::FETCH_ASSOC)){

            $classParceiro = new ClassParceiro();

            $classParceiro->setID($row['TAB_CAD_ID']);
            $classParceiro->setNome($row['TAB_CAD_NOME']);

            $array[] = $classParceiro;
        }
           
            return $array;
    }

}

?>