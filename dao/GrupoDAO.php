<?php 


include_once "../dao/DAO.php";
include_once "../class/classGrupo.php";


    class GrupoDao extends Dao{



        public function insertGrupo(ClassGrupo $ClassGrupo){

           $sql ="INSERT INTO `tab_gde`(`TAB_GDE_COD`, `TAB_GDE_DESCRICAO`) VALUES (:cod,:descr)";
           $insert = $this->con->prepare($sql);
           $insert->bindValue(":cod",$ClassGrupo->getCodigo());
           $insert->bindValue(":descr", $ClassGrupo->getDescricao());
           $insert->execute();
           
        }


        public function selectGrupo(){

            $sql ="SELECT `TAB_GDE_ID`, `TAB_GDE_COD`, `TAB_GDE_DESCRICAO` FROM `tab_gde` WHERE 1";
            $select = $this->con->prepare($sql);
            $select->execute();
            $array = array();
            while($row = $select->fetch(PDO::FETCH_ASSOC)){

                $grupo = new ClassGrupo();
                $grupo->setID($row['TAB_GDE_ID']);
                $grupo->setCodigo($row['TAB_GDE_COD']);
                $grupo->setDescricao($row['TAB_GDE_DESCRICAO']);
                $array[] = $grupo;
            }
                return $array;
        }


    }
?>