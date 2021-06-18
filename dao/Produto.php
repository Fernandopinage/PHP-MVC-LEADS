<?php 
include_once "../dao/DAO.php";
include_once "../class/classProduto.php";

Class ProdutoPAO extends Dao{


    public function insertProduto(ClassProduto  $ClassProduto){


     $sql = "INSERT INTO `crm_tdp`(`CRM_TDP_ID`, `CRM_TDP_BLOQ`, `CRM_TDP_EXCLUIDO`, `CRM_TDP_IDEMP`, `CRM_TDP_COMPLEMENTO`, `CRM_TDP_COD`, `CRM_TDP_STATUS`, `CRM_TDP_DESCRICAO`, `CRM_TDP_PRODUTO`, `CRM_TDP_VALOR`, `CRM_TDP_UNIDADE`) 
     VALUES (null, :CRM_TDP_BLOQ, :CRM_TDP_EXCLUIDO, :CRM_TDP_IDEMP, :CRM_TDP_COMPLEMENTO, :cod, :statuss, :descrcao, :produto, :valor, :unidade)";
     $insert = $this->con->prepare($sql);
     $insert->bindValue(":CRM_TDP_BLOQ",'');
     $insert->bindValue(":CRM_TDP_EXCLUIDO",'');
     $insert->bindValue(":CRM_TDP_IDEMP",'');
     $insert->bindValue(":CRM_TDP_COMPLEMENTO",'');
     $insert->bindValue(":cod",$ClassProduto->getCodigo());
     $insert->bindValue(":statuss",$ClassProduto->getStatus());
     $insert->bindValue(":descrcao",$ClassProduto->getDescricao());
     $insert->bindValue(":produto",$ClassProduto->getProduto());
     $insert->bindValue(":valor",$ClassProduto->getValor());
     $insert->bindValue(":unidade",$ClassProduto->getUnidade());
     $insert->execute();
    }

    public function buscarProduto(){

        $sql = "SELECT * from `crm_tdp` ";

        $select = $this->con->prepare($sql);
        $select->execute();
        $array = array();
        while($row = $select->fetch(PDO::FETCH_ASSOC)){

            $classProduto = new ClassProduto();

            $classProduto->setID($row['CRM_TDP_ID']);
            $classProduto->setProduto($row['CRM_TDP_PRODUTO']);

            $array[] = $classProduto;
        }
           
            return $array;
    }
}


?>