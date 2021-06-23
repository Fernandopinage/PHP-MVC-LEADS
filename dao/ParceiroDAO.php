<?php 

include_once "../dao/DAO.php";
include_once "../class/classParceiro.php";

    class ParceiroDao extends Dao{


        /************** INSERINDO PARCEIRO **************/

        public function insert(ClassParceiro $classParceiro){

            $sql = "INSERT INTO `tab_cad`(`TAB_CAD_ID`, `TAB_CAD_OPT`, `TAB_CAD_CPF`, `TAB_CAD_NOME`, `TAB_CAD_FANTASIA`, `TAB_CAD_NASC`, `TAB_CAD_EMAIL`, `TAB_CAD_CONT_EMP`, `TAB_CAD_TELELEFONE`, `TAB_CAD_CELULAR`, `TAB_CAD_PORT`, `TAB_CAD_CNAE`, `TAB_CAD_CEP`, `TAB_CAD_UF`, `TAB_CAD_NUM`, `TAB_CAD_MUNICIPIO`, `TAB_CAD_ENDERECO`, `TAB_CAD_BAIRRO`, `TAB_CAD_COMPLEMENTO`, `TAB_CAD_CONTATO_NOME`, `TAB_CAD_CONTATO_EMAIL`, `TAB_CAD_CONTATO_CARGO`, `TAB_CAD_CONTATO_TELEFONE`, `TAB_CAD_RG`, `TAB_CAD_CNH`, `TAB_CAD_DATA_INCLUSAOUS`, `TAB_CAD_DATA_ALTER`) 
            VALUES (null, :TAB_CAD_OPT, :TAB_CAD_CPF, :TAB_CAD_NOME, :TAB_CAD_FANTASIA, :TAB_CAD_NASC, :TAB_CAD_EMAIL, :TAB_CAD_CONT_EMP, :TAB_CAD_TELELEFONE, :TAB_CAD_CELULAR, :TAB_CAD_PORT, :TAB_CAD_CNAE, :TAB_CAD_CEP, :TAB_CAD_UF, :TAB_CAD_NUM, :TAB_CAD_MUNICIPIO, :TAB_CAD_ENDERECO, :TAB_CAD_BAIRRO, :TAB_CAD_COMPLEMENTO, :TAB_CAD_CONTATO_NOME, :TAB_CAD_CONTATO_EMAIL, :TAB_CAD_CONTATO_CARGO, :TAB_CAD_CONTATO_TELEFONE, :TAB_CAD_RG, :TAB_CAD_CNH, :TAB_CAD_DATA_INCLUSAOUS, :TAB_CAD_DATA_ALTER)";   
                
 
            $insert = $this->con->prepare($sql);
            $insert->bindValue(":TAB_CAD_OPT", $classParceiro->getOpt());
            $insert->bindValue(":TAB_CAD_CPF", $classParceiro->getCpf());
            $insert->bindValue(":TAB_CAD_NOME", $classParceiro->getNome());
            $insert->bindValue(":TAB_CAD_FANTASIA", $classParceiro->getFantasia());
            $insert->bindValue(":TAB_CAD_NASC", $classParceiro->getDatanasc());
            $insert->bindValue(":TAB_CAD_EMAIL", $classParceiro->getEmail());
            $insert->bindValue(":TAB_CAD_CONT_EMP", $classParceiro->getContato_emp());
            $insert->bindValue(":TAB_CAD_TELELEFONE", $classParceiro->getTelefone());
            $insert->bindValue(":TAB_CAD_CELULAR", $classParceiro->getCelular());
            $insert->bindValue(":TAB_CAD_PORT", $classParceiro->getPort());
            $insert->bindValue(":TAB_CAD_CNAE", $classParceiro->getCnae());
            $insert->bindValue(":TAB_CAD_CEP", $classParceiro->getCep());
            $insert->bindValue(":TAB_CAD_UF", $classParceiro->getUf());
            $insert->bindValue(":TAB_CAD_NUM", $classParceiro->getNumero());
            $insert->bindValue(":TAB_CAD_MUNICIPIO", $classParceiro->getMunicipio());
            $insert->bindValue(":TAB_CAD_ENDERECO", $classParceiro->getEndereco());
            $insert->bindValue(":TAB_CAD_BAIRRO", $classParceiro->getBairro());
            $insert->bindValue(":TAB_CAD_COMPLEMENTO", $classParceiro->getComplemento());
            $insert->bindValue(":TAB_CAD_CONTATO_NOME", $classParceiro->getNome_contato());
            $insert->bindValue(":TAB_CAD_CONTATO_EMAIL", $classParceiro->getEmail_contato());
            $insert->bindValue(":TAB_CAD_CONTATO_CARGO", $classParceiro->getCargo_contato());
            $insert->bindValue(":TAB_CAD_CONTATO_TELEFONE", $classParceiro->getTelefone_contato());
            $insert->bindValue(":TAB_CAD_RG", $classParceiro->getRg());
            $insert->bindValue(":TAB_CAD_CNH", $classParceiro->getCnh());
            $insert->bindValue(":TAB_CAD_DATA_INCLUSAOUS", $classParceiro->getInclusao());
            $insert->bindValue(":TAB_CAD_DATA_ALTER", '');
            $insert->execute();
            

        /************************ FIM ************************/


        }

        public function contratoParceiro(){

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