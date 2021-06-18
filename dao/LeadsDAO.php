<?php 

include_once "../dao/DAO.php";
include_once "../class/classLeads.php";
include_once "../class/classParceiro.php";


Class ClassLeadsDAO extends Dao{


    public function insertLeads(Classleads $Classleads){

      
        $sql = "INSERT INTO `tab_leads`(`TAB_LEADS_ID`, `TAB_LEADS_FILIAL`, `TAB_LEADS_EMPRESA`, `TAB_LEADS_CONSULTOR`, `TAB_LEADS_ENDERECO`, `TAB_LEADS_TELEFONE`, `TAB_LEADS_CELULAR`, `TAB_LEADS_FASE`, `TAB_LEADS_STATUS`, `TAB_LEADS_PRODUTO`, `TAB_LEADS_VALOR`, `TAB_LEADS_UNIDADE`, `TAB_LEADS_DESC`, `TAB_LEADS_DATAINICIO`, `TAB_LEADS_DATAFIM`) VALUES (null , :TAB_LEADS_FILIAL, :TAB_LEADS_EMPRESA, :TAB_LEADS_CONSULTOR, :TAB_LEADS_ENDERECO, :TAB_LEADS_TELEFONE, :TAB_LEADS_CELULAR, :TAB_LEADS_FASE, :TAB_LEADS_STATUS, :TAB_LEADS_PRODUTO, :TAB_LEADS_VALOR, :TAB_LEADS_UNIDADE, :TAB_LEADS_DESC , :TAB_LEADS_DATAINICIO, :TAB_LEADS_DATAFIM)";
        $insert = $this->con->prepare($sql);
        $insert->bindValue(":TAB_LEADS_FILIAL",  $Classleads->getFilial());
        $insert->bindValue(":TAB_LEADS_EMPRESA", $Classleads->getEmpresa());
        $insert->bindValue(":TAB_LEADS_CONSULTOR", $Classleads->getConsultor());
        $insert->bindValue(":TAB_LEADS_ENDERECO", $Classleads->getEndereco());
        $insert->bindValue(":TAB_LEADS_TELEFONE", $Classleads->getTelefone());
        $insert->bindValue(":TAB_LEADS_CELULAR", $Classleads->getCelular());
        $insert->bindValue(":TAB_LEADS_FASE", $Classleads->getFase());
        $insert->bindValue(":TAB_LEADS_STATUS", $Classleads->getStatus());
        $insert->bindValue(":TAB_LEADS_PRODUTO", $Classleads->getProduto());
        $insert->bindValue(":TAB_LEADS_VALOR", $Classleads->getValor());
        $insert->bindValue(":TAB_LEADS_UNIDADE", $Classleads->getUnidade());
        $insert->bindValue(":TAB_LEADS_DESC", $Classleads->getDescricao());

        $insert->bindValue(":TAB_LEADS_DATAINICIO", $Classleads->getDatainicio());
        $insert->bindValue(":TAB_LEADS_DATAFIM", $Classleads->getDatafim());
        $insert->execute();
        
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
    
    public function valorProduto($id){

        $sql = "SELECT * FROM `crm_tdp`  where CRM_TDP_PRODUTO='$id'";
        $select = $this->con->prepare($sql);
        $select->execute();
        
        if ($row = $select->fetch(PDO::FETCH_ASSOC)) {
            ?>
            <input type="hidden" id="valor_hidder" class="form-control form-control-sm" value="<?php echo $row['CRM_TDP_VALOR'] ?>">
            <?php
        }else{
            echo "00,00";
        }
        
       // return json_encode($array);

    }
}

?>