<?php 
include_once "../dao/DAO.php";
include_once "../class/classProduto.php";

Class ProdutoPAO extends Dao{


    public function insertProduto(ClassProduto  $ClassProduto){


     $sql = "INSERT INTO `crm_tdp`(`CRM_TDP_ID`, `CRM_TDP_COD`, `CRM_TDP_PRODUTO`, `CRM_TDP_REFERENTE`, `CRM_TDP_TIPO`, `CRM_TDP_CATEGORIA`, `CRM_TDP_CARACTERISTICA`, `CRM_TDP_CUSTO`, `CRM_TDP_VENDA`, `CRM_TDP_DESCRICAO`, `CRM_TDP_COMISSAO`) 
     VALUES (null, :CRM_TDP_COD, :CRM_TDP_PRODUTO, :CRM_TDP_REFERENTE, :CRM_TDP_TIPO, :CRM_TDP_CATEGORIA, :CRM_TDP_CARACTERISTICA, :CRM_TDP_CUSTO, :CRM_TDP_VENDA, :CRM_TDP_DESCRICAO, :CRM_TDP_COMISSAO)";
     $insert = $this->con->prepare($sql);
     $insert->bindValue(":CRM_TDP_COD", $ClassProduto->getCod());  
     $insert->bindValue(":CRM_TDP_PRODUTO", $ClassProduto->getProduto());   
     $insert->bindValue(":CRM_TDP_REFERENTE", $ClassProduto->getReferencia());  
     $insert->bindValue(":CRM_TDP_TIPO", $ClassProduto->getTipo());   
     $insert->bindValue(":CRM_TDP_CATEGORIA", $ClassProduto->getCategoria());  
     $insert->bindValue(":CRM_TDP_CARACTERISTICA", $ClassProduto->getCaracteristica());   
     $insert->bindValue(":CRM_TDP_CUSTO", $ClassProduto->getCusto());  
     $insert->bindValue(":CRM_TDP_VENDA", $ClassProduto->getVenda()); 
     $insert->bindValue(":CRM_TDP_DESCRICAO", $ClassProduto->getDesc());  
     $insert->bindValue(":CRM_TDP_COMISSAO", $ClassProduto->getComissao());
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

    public function listaProduto(){

        $sql = "SELECT * from `crm_tdp` ";
        $select = $this->con->prepare($sql);
        $select->execute();
        $array = array();
        while($row = $select->fetch(PDO::FETCH_ASSOC)){
            $classProduto = new ClassProduto();
            $classProduto->setID($row['CRM_TDP_ID']);
            $classProduto->setProduto($row['CRM_TDP_PRODUTO']);
            $classProduto->setVenda($row['CRM_TDP_VENDA']);
            
            $array[] = $classProduto;
        }
       
        return $array;
    }
}


?>