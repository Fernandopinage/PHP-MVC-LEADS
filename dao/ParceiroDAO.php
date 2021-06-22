<?php 

include_once "../dao/DAO.php";
include_once "../class/classParceiro.php";

    class ParceiroDao extends Dao{


        /************** INSERINDO PARCEIRO **************/

        public function insert(ClassParceiro $classParceiro){

            $sql = "INSERT INTO `tab_cad`( `TAB_CAD_ID`,
                `TAB_CAD_CODIGO`,
                `TAB_CAD_TPCAD`,
                `TAB_CAD_TIPO`,
                `TAB_CAD_NOME`,
                `TAB_CAD_NOMEF`,
                `TAB_CAD_CNPJ`,
                `TAB_CAD_INSC1`, 
                `TAB_CAD_INSC2`,
                `TAB_CAD_FOTO`,
                `TAB_CAD_TELEFONE`,
                `TAB_CAD_RG`,
                `TAB_CAD_ORGEXPED`,
                `TAB_CAD_UFEXPED`,
                `TAB_CAD_DTEXPED`,
                `TAB_CAD_CNH`,
                `TAB_CAD_CEP`,
                `TAB_CAD_ENDERECO`,
                `TAB_CAD_NREND`,
                `TAB_CAD_COMPLEND`,
                `TAB_CAD_UF`,
                `TAB_CAD_IDMUNIC`, 
                `TAB_CAD_MUNICIPIO`, 
                `TAB_CAD_BAIRRO`, 
                `TAB_CAD_DTNASC`, 
                `TAB_CAD_INSCSUF`, 
                `TAB_CAD_EMAIL`, 
                `TAB_CAD_NATURAL`, 
                `TAB_CAD_NACIONAL`, 
                `TAB_CAD_ATIVA2`, 
                `TAB_CAD_CEP2`, 
                `TAB_CAD_ENDER2`, 
                `TAB_CAD_NREND2`, 
                `TAB_CAD_COMPLEND2`, 
                `TAB_CAD_UF2`, 
               /* `TAB_CAD_IDMUNIC2`, */
                `TAB_CAD_MUNIC2`, 
                `TAB_CAD_BAIRRO2`, 
                `TAB_CAD_BUSCA`, 
                `TAB_CAD_ATIVIDADE`, 
                `TAB_CAD_LOCALIZA`, 
                `TAB_CAD_IDEMP`, 
                `TAB_CAD_BLOQ`, 
                `TAB_CAD_CONTROLE`, 
                `TAB_CAD_EXCLUIDO`, 
                `TAB_CAD_CELULAR`, 
                `TAB_CAD_ASSINATURA`,
                `TAB_CAD_PESSOA`,
                `TAB_CAD_CONTATO`) 
                VALUES 
                (
                null, 
                :codigo,
                :opcao,
                :tipo,
                :nome,
                :fantasia,
                :cpf,
                :estadual,
                :municipal,
                :foto,
                :telefone,
                :rg,
                :orgao,
                :ufexp,
                :dataexp,
                :cnh,
                :cep,
                :endereco, 
                :numero,
                :complemento,
                :uf,
                :idmunicipal,
                :municipal,
                :bairro,
                :datanasc,
                :suframa,
                :email,
                :natural,
                :nacional,
                :atividade2,
                :cep2,
                :endereco2, 
                :numero2,
                :complemento2,
                :uf2,
                /*:idmunicipal2,*/
                :municipal2,
                :bairro2,
                :busca,
                :atividade,
                :localiza,
                :idemp, 
                :bloqueado, 
                :controle, 
                :excluido, 
                :celular, 
                :assinatura,
                :pessoa,
                :TAB_CAD_CONTATO)";   
                
 
            $insert = $this->con->prepare($sql);
            $insert->bindValue(":codigo",'');
            $insert->bindValue(":opcao", $classParceiro->getOpcao());
            $insert->bindValue(":tipo", $classParceiro->getPessoa());
            $insert->bindValue(":nome", $classParceiro->getNome());
            $insert->bindValue(":fantasia", $classParceiro->getFantasia());
            $insert->bindValue(":cpf",$classParceiro->getCpf());
            $insert->bindValue(":estadual",$classParceiro->getEstadual());
            $insert->bindValue(":municipal", $classParceiro->getMunicipal());
            $insert->bindValue(":foto",'');
            $insert->bindValue(":telefone", $classParceiro->getTelefone());
            $insert->bindValue(":rg",$classParceiro->getRg());
            $insert->bindValue(":orgao",$classParceiro->getOrgao());
            $insert->bindValue(":ufexp",$classParceiro->getUfexp());
            $insert->bindValue(":dataexp",$classParceiro->getDataexp());
            $insert->bindValue(":cnh",$classParceiro->getCnh());
            $insert->bindValue(":cep", $classParceiro->getCep());
            $insert->bindValue(":endereco",$classParceiro->getEndereco());
            $insert->bindValue(":numero",$classParceiro->getNumero());
            $insert->bindValue(":complemento",$classParceiro->getComplemento());
            $insert->bindValue(":uf",$classParceiro->getUf());
            $insert->bindValue(":idmunicipal",'');
            $insert->bindValue(":municipal",$classParceiro->getMunicipal());
            $insert->bindValue(":bairro",$classParceiro->getBairro());
            $insert->bindValue(":datanasc",$classParceiro->getDatanasc());
            $insert->bindValue(":suframa", $classParceiro->getSuframa());
            $insert->bindValue(":email",$classParceiro->getEmail());
            $insert->bindValue(":natural", $classParceiro->getNaturalidade());
            $insert->bindValue(":nacional", $classParceiro->getNacionalidade());
            $insert->bindValue(":atividade2",'');
            $insert->bindValue(":cep2",$classParceiro->getCep2());
            $insert->bindValue(":endereco2",$classParceiro->getEndereco2());
            $insert->bindValue(":numero2",$classParceiro->getNumero2());
            $insert->bindValue(":complemento2",$classParceiro->getComplemento2());
            $insert->bindValue(":uf2",$classParceiro->getUf2());
            //$insert->bindValue(":idmunicipal2","");
            $insert->bindValue(":municipal2",$classParceiro->getMunicipio2());
            $insert->bindValue(":bairro2", $classParceiro->getBairro2());
            $insert->bindValue(":busca",'');
            $insert->bindValue(":atividade",$classParceiro->getAtividade());
            $insert->bindValue(":localiza",'');
            $insert->bindValue(":idemp", '');
            $insert->bindValue(":bloqueado", '');
            $insert->bindValue(":controle", '');
            $insert->bindValue(":excluido", '');
            $insert->bindValue(":celular", $classParceiro->getCelular());
            $insert->bindValue(":assinatura", '');

            $insert->bindValue(":pessoa", '');
            $insert->bindValue(":TAB_CAD_CONTATO", $classParceiro->getContato());
            #var_dump($insert);
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