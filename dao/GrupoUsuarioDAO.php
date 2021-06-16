<?php 

include_once "../dao/DAO.php";
include_once "../class/classGrupoUsuario.php";


    Class ClassGrupoUsuarioDAO extends Dao{


        public function insertGrupoUsuario(ClassGrupoUsuario $ClassGrupoUsuario){

            $sql = "INSERT INTO `crm_gru`(`CRM_GRU_ID`, `CRM_GRU_COD`, `CRM_GRU_DESC`, `CRM_GRU_SIGLA`, `CRM_GRU_IDEMP`, `CRM_GRU_COMPLEMENTO`, `CRM_GRU_BLOQ`, `CRM_GRU_EXCLUIDO`) VALUES (null, :cod, :descr, :sigla, :idemp, :complemento, :bloqueio, :excluido)";
            $insert = $this->con->prepare($sql);
            $insert->bindValue(':cod',$ClassGrupoUsuario->getCod());
            $insert->bindValue(':descr',$ClassGrupoUsuario->getDesc());
            $insert->bindValue(':sigla',$ClassGrupoUsuario->getSigla());
            
            $insert->bindValue(':idemp',"");
            $insert->bindValue(':complemento',"");
            $insert->bindValue(':bloqueio',"");
            $insert->bindValue(':excluido',"");
            $insert->execute();
        }

        public function selectGrupoUsuario(){

              $sql = "SELECT * FROM `crm_gru`";  
              $select = $this->con->prepare($sql);
              $select->execute();
              $array = array();

              while($row = $select->fetch(PDO::FETCH_ASSOC)){

                $GrupoUsuario = new ClassGrupoUsuario();
                $GrupoUsuario->setId($row['CRM_GRU_ID']);
                $GrupoUsuario->setCod($row['CRM_GRU_COD']);
                $GrupoUsuario->setSigla($row['CRM_GRU_SIGLA']);
                $GrupoUsuario->setDesc($row['CRM_GRU_DESC']);

                $array[] = $GrupoUsuario;
              }
              return $array;
        }
        
    }



?>