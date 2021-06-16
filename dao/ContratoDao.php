<?php 
include_once "../dao/DAO.php";
include_once "../class/classContrato.php";


Class ContratoDao extends Dao{

    public function insertContrato(ClassContrato $ClassContrato){

        $sql = "INSERT INTO `crm_ctr`(`CRM_CTR_IDEMP`, `CRM_CTR_NUMERO`, `CRM_CTR_CODCAD`, `CRM_CTR_MODALID`, `CRM_CTR_DTCTR`, `CRM_CTR_VALIDAD`, `CRM_CTR_DTVALID`, `CRM_CTR_VALOR`, `CRM_CTR_OBS`, `CRM_CTR_HRSCTR`, `CRM_CTR_VLRHORA`, `CRM_CTR_VLRADIC`, `CRM_CTR_BLOQ`, `CRM_CTR_CONTROLE`, `CRM_CTR_EXCLUIDO`, `CRM_CTR_DATA`, `CRM_CTR_PAG`, `CRM_CTR_FORPAG`, `CRM_CTR_ID`, `CRM_CTR_TIPO`, `CRM_CTR_DATAC`, `CRM_CTR_STATUS`, `CRM_CTR_DESCRICAO`, `CRM_CTR_DESPRO`, `CRM_CTR_DURACAO`, `CRM_CTR_VLHORA`, `CRM_CTR_HRUSADO`, `CRM_CTR_PERCENT`, `CRM_CTR_DETALHE`, `CRM_CTR_TIPOCTR`)
         VALUES (:CRM_CTR_IDEMP, :CRM_CTR_NUMERO, :CRM_CTR_CODCAD, :CRM_CTR_MODALID, :CRM_CTR_DTCTR, :CRM_CTR_VALIDAD, :CRM_CTR_DTVALID, :CRM_CTR_VALOR, :CRM_CTR_OBS, :CRM_CTR_HRSCTR, :CRM_CTR_VLRHORA, :CRM_CTR_VLRADIC, :CRM_CTR_BLOQ, :CRM_CTR_CONTROLE, :CRM_CTR_EXCLUIDO, :CRM_CTR_DATA, :CRM_CTR_PAG, :CRM_CTR_FORPAG, null, :CRM_CTR_TIPO, :CRM_CTR_DATAC, :CRM_CTR_STATUS, :CRM_CTR_DESCRICAO, :CRM_CTR_DESPRO, :CRM_CTR_DURACAO, :CRM_CTR_VLHORA, :CRM_CTR_HRUSADO, :CRM_CTR_PERCENT, :CRM_CTR_DETALHE, :CRM_CTR_TIPOCTR)";
        
        $insert = $this->con->prepare($sql);
        $insert->bindValue(":CRM_CTR_IDEMP",'');
        $insert->bindValue(":CRM_CTR_NUMERO",$ClassContrato->getNumerocontrato());
        $insert->bindValue(":CRM_CTR_CODCAD",$ClassContrato->getCliente());
        $insert->bindValue(":CRM_CTR_MODALID",$ClassContrato->getModalidade());
        $insert->bindValue(":CRM_CTR_DTCTR",$ClassContrato->getDatacontrato());
        $insert->bindValue(":CRM_CTR_VALIDAD",$ClassContrato->getDatafim());
        $insert->bindValue(":CRM_CTR_DTVALID",$ClassContrato->getPrazo());
        $insert->bindValue(":CRM_CTR_VALOR",$ClassContrato->getValorcontrato());
        $insert->bindValue(":CRM_CTR_OBS",$ClassContrato->getComplemento());
        $insert->bindValue(":CRM_CTR_HRSCTR",$ClassContrato->getHoracontrato());
        $insert->bindValue(":CRM_CTR_VLRHORA",$ClassContrato->getValorhora());
        $insert->bindValue(":CRM_CTR_VLRADIC",$ClassContrato->getValoradicional());
        $insert->bindValue(":CRM_CTR_BLOQ",'');
        $insert->bindValue(":CRM_CTR_CONTROLE",'');
        $insert->bindValue(":CRM_CTR_EXCLUIDO",'');
        $insert->bindValue(":CRM_CTR_DATA",$ClassContrato->getDatainicio());
        $insert->bindValue(":CRM_CTR_PAG",'');
        $insert->bindValue(":CRM_CTR_FORPAG",'');
        $insert->bindValue(":CRM_CTR_TIPO",$ClassContrato->getOpcao());
        $insert->bindValue(":CRM_CTR_DATAC",'');
        $insert->bindValue(":CRM_CTR_STATUS",'');
        $insert->bindValue(":CRM_CTR_DESCRICAO",$ClassContrato->getDescricao());
        $insert->bindValue(":CRM_CTR_DESPRO",'');
        $insert->bindValue(":CRM_CTR_DURACAO",'');
        $insert->bindValue(":CRM_CTR_VLHORA",'');
        $insert->bindValue(":CRM_CTR_HRUSADO",'');
        $insert->bindValue(":CRM_CTR_PERCENT",'');
        $insert->bindValue(":CRM_CTR_DETALHE",'');
        $insert->bindValue(":CRM_CTR_TIPOCTR",$ClassContrato->getProjeto());
        $insert->execute();

    }

    public function AgendaTecnicoContrato($id){

        $sql = "SELECT CRM_CTR_NUMERO, CRM_CTR_DESCRICAO from CRM_CTR where CRM_CTR_TIPOCTR='$id'";
        $select = $this->con->prepare($sql);
        $select->execute();
        $array = array();
        echo  "<option value=''></option>";
        while ($row = $select->fetch(PDO::FETCH_ASSOC)) {


            echo  "<option value=".$row['CRM_CTR_NUMERO'].">".$row['CRM_CTR_NUMERO']." - ".$row['CRM_CTR_DESCRICAO']."</option>";
            //echo "<option value='".$row['CRM_CTR_NUMERO ']."'>".$row['CRM_CTR_NUMERO']." - ".$row['CRM_CTR_DESCRICAO']."</option>";
        }
        
       // return json_encode($array);

    }



   
}


?>