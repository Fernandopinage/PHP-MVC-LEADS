<?php 

include_once "../conection/conection.php";
include_once "../dao/DAO.php";
include_once "../class/classUnidade.php";


    class UnidadeDao extends Dao{

        public function insertUnidade(ClassUnidade $ClassUnidade){

         
            $sql = "INSERT INTO `tab_uni`(`TAB_UNI_ID`, `TAB_UNI_COD`, `TAB_UNI_EPS`, `TAB_UNI_KEY`, `TAB_UNI_DESCRICAO`, `TAB_UNI_NOME`, `TAB_UNI_CNPJ`, `TAB_UNI_INSC`, `TAB_UNI_BARRA`, `TAB_UNI_SUFRAMA`, `TAB_UNI_CEP`, `TAB_UNI_UF`, `TAB_UNI_CIDADE`, `TAB_UNI_BAIRRO`, `TAB_UNI_COMPLEMENTO`, `TAB_UNI_IMAGEM`, `TAB_UNI_NOMEFANTASIA`) VALUES (null,:cod, :esp, :chave, :descr, :nome, :cnpj, :insc, :barra, :suframa, :cep, :uf, :cidade, :bairro, :complemento, :imagem, :nomefan)";
            $insert = $this->con->prepare($sql);
            $insert->bindValue(":cod",$ClassUnidade->getCodigo());
            $insert->bindValue("esp",$ClassUnidade->getEmpresa());
            $insert->bindValue(":chave",$ClassUnidade->getKey());
            $insert->bindValue(":descr",$ClassUnidade->getDescricao());
            $insert->bindValue(":nome",$ClassUnidade->getRazao());
            $insert->bindValue(":cnpj",$ClassUnidade->getTipo());
            $insert->bindValue(":insc",$ClassUnidade->getInscricao());
            $insert->bindValue(":barra",$ClassUnidade->getBarra());
            $insert->bindValue(":suframa",$ClassUnidade->getSuframa());
            $insert->bindValue(":cep",$ClassUnidade->getCep());
            $insert->bindValue(":uf",$ClassUnidade->getUf());
            $insert->bindValue(":cidade",$ClassUnidade->getLogradouro());
            $insert->bindValue(":bairro",$ClassUnidade->getBairro());
            $insert->bindValue(":complemento",$ClassUnidade->getComplemento());
            $insert->bindValue(":imagem",$ClassUnidade->getFoto());
            $insert->bindValue(":nomefan",$ClassUnidade->getReduzido());
            $insert->execute();

           if($insert->rowCount()){
            return true;
           }

        }



    }
?>