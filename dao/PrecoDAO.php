<?php 


include_once "../dao/DAO.php";
include_once "../class/classPreco.php";


Class PrecoDAO extends DAO{

    public function insertPreco( ClassPreco $ClassPreco){

        $sql = "INSERT INTO `tab_tpp`(`TAB_TPP_ID`, `TAB_TPP_COD`, `TAB_TPP_DESC`, `TAB_TPP_DATA`, `TAB_TPP_TERMINO`, `TAB_TPP_PRODUTO`, `TAB_TPP_VALOR`) VALUES (null, :TAB_TPP_COD, :TAB_TPP_DESC, :TAB_TPP_DATA, :TAB_TPP_TERMINO, :TAB_TPP_PRODUTO, :TAB_TPP_VALOR)";
        $insert = $this->con->prepare($sql);
        $insert->bindValue(':TAB_TPP_COD',$ClassPreco->getCod());
        $insert->bindValue(':TAB_TPP_DESC',$ClassPreco->getDesc());
        $insert->bindValue(':TAB_TPP_DATA',$ClassPreco->getData());
        $insert->bindValue(':TAB_TPP_TERMINO',$ClassPreco->getTermino());
        $insert->bindValue(':TAB_TPP_PRODUTO',$ClassPreco->getProduto());
        $insert->bindValue(':TAB_TPP_VALOR',$ClassPreco->getValor());  
        $insert->execute();
    }


    public function buscaPreco(){
        
        $sql = "SELECT * from `TAB_TPP` ";

        $select = $this->con->prepare($sql);
        $select->execute();
        $array = array();
        while($row = $select->fetch(PDO::FETCH_ASSOC)){

            $classPreco = new ClassPreco();

            $classPreco->setID($row['TAB_TPP_ID']);
            $classPreco->setDesc($row['TAB_TPP_DESC']);
            $classPreco->setValor($row['TAB_TPP_VALOR']);
            $array[] = $classPreco;
        }
           
            return $array;
    }
}

?>