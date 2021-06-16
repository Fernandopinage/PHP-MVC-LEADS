

<?php

include_once "../dao/DAO.php";
include_once "../class/classContrato.php";

class Colaborador extends Dao
{


    public function insertColaborador(ClassColaborador $ClassColaborador)
    {

       

        $sql = "INSERT INTO `tab_col`(`TAB_COL_ID`, `TAB_COL_IDEMP`, `TAB_COL_BLOQ`, `TAB_COL_CONTROLE`, `TAB_COL_EXCLUIDO`, `TAB_COL_NOME`, `TAB_COL_NOMESOCIAL`, `TAB_COL_DATANASC`, `TAB_COL_ESTCIVIL`, `TAB_COL_GENERO`, `TAB_COL_NACIONALIDADE`, `TAB_COL_COR`, `TAB_COL_CIDNATAL`, `TAB_COL_UFNATAL`, `TAB_COL_NOMEMAE`, `TAB_COL_TELEFONE`, `TAB_COL_NOMEPAI`, `TAB_COL_EMAIL`, `TAB_COL_DEPARTAMENTO`, `TAB_COL_FUNCAO`, `TAB_COL_FOTO`, `TAB_COL_CPF`, `TAB_COL_CNH`, `TAB_COL_CNHCAT`, `TAB_COL_CNHVALIDADE`, `TAB_COL_CNHEMISSAO`, `TAB_COL_RG`, `TAB_COL_RGEMISSAO`, `TAB_COL_RGUF`, `TAB_COL_RGORGAO`, `TAB_COL_TITULO`, `TAB_COL_TLMUN`, `TAB_COL_TLZONA`, `TAB_COL_TLUF`, `TAB_COL_DTINICIO`, `TAB_COL_DTRESCISAO`, `TAB_COL_MOTIVO`, `TAB_COL_SALARIO`, `TAB_COL_BANCO`, `TAB_COL_AGENCIA`, `TAB_COL_CONTA`, `TAB_COL_CEP`, `TAB_COL_ENDERECO`, `TAB_COL_NUMERO`, `TAB_COL_COMPLEMENTO`, `TAB_COL_UF`, `TAB_COL_MUNICIPIO`, `TAB_COL_BAIRRO`, `TAB_COL_LATLON`, `TAB_COL_ESCOLARIDADE`, `TAB_COL_INSTITUICAO`, `TAB_COL_CURSO`, `TAB_COL_CONCLUSAO`, `TAB_COL_DEF`, `TAB_COL_DEFTIPO`, `TAB_COL_DEFOBS`, `TAB_COL_STATUS`, `TAB_COL_TIPO`, `TAB_COL_CODUSU`, `TAB_COL_TIPVEICULO`, `TAB_COL_ASSINATURA`) 
            VALUES (null, :idemp, :bloqueado, :controle, :excluido, :nome, :nomesocial, :datanasci, :estcivil, :genero, :nacionalidade, :cor, :cidadeNatal, :ufNatal, :mae, :telefone, :pai, :email, :departamento, :funcao, :foto, :cpf, :cnh, :cnhcat, :cnhvalid, :cnhemis, :rg, :rgemis, :rguf, :rgorg, :titulo, :titulonum, :titulozon, :titulouf, :datainicio, :datafim, :motivo, :salario, :banco, :agencia, :conta, :cep, :endereco, :num, :complemento, :uf, :municipio, :bairro, :latlog, :escolaridade, :instituicao, :curso, :conclussao, :deficiencia, :tipdefi,  :obs, :statuss, :pessoa, :usuario, :tipoveiculo, :assinatura)";

        $insert = $this->con->prepare($sql);
        $insert->bindValue(":idemp", '');
        $insert->bindValue(":bloqueado", '');
        $insert->bindValue(":controle", '');
        $insert->bindValue(":excluido", '');
        $insert->bindValue(":nome", $ClassColaborador->getNome());
        $insert->bindValue(":nomesocial", $ClassColaborador->getNomesocial());
        $insert->bindValue(":datanasci", $ClassColaborador->getNascimento());
        $insert->bindValue(":estcivil", $ClassColaborador->getEstato());
        $insert->bindValue(":genero", $ClassColaborador->getGenero());
        $insert->bindValue(":nacionalidade", $ClassColaborador->getNaturalidade());
        $insert->bindValue(":cor", $ClassColaborador->getCor());
        $insert->bindValue(":cidadeNatal", $ClassColaborador->getCidade());
        $insert->bindValue(":ufNatal", $ClassColaborador->getUf());
        $insert->bindValue(":mae", $ClassColaborador->getMae());
        $insert->bindValue(":telefone", $ClassColaborador->getTelefone());
        $insert->bindValue(":pai", $ClassColaborador->getPai());
        $insert->bindValue(":email", "");    /** */
        $insert->bindValue(":departamento", $ClassColaborador->getDepartamento());
        $insert->bindValue(":funcao", $ClassColaborador->getFuncao());
        $insert->bindValue(":foto", "");  /** */
        $insert->bindValue(":cpf", "");    /** */
        $insert->bindValue(":cnh", "");    /** */
        $insert->bindValue(":cnhcat", "");  /** */
        $insert->bindValue(":cnhvalid", "");  /** */
        $insert->bindValue(":cnhemis", "");    /** */
        $insert->bindValue(":rg", $ClassColaborador->getRg());
        $insert->bindValue(":rgemis",""); /** */
        $insert->bindValue(":rguf", ""); /** */
        $insert->bindValue(":rgorg", "");   /** */
        $insert->bindValue(":titulo", $ClassColaborador->getTitulo());
        $insert->bindValue(":titulonum", "");    /** */
        $insert->bindValue(":titulozon", "");    /** */
        $insert->bindValue(":titulouf", "");  /** */
        $insert->bindValue(":datainicio", '');  /** */
        $insert->bindValue(":datafim", ''); /** */
        $insert->bindValue(":motivo", $ClassColaborador->getMotivo());
        $insert->bindValue(":salario", $ClassColaborador->getSalario());
        $insert->bindValue(":banco", $ClassColaborador->getBanco());
        $insert->bindValue(":agencia", $ClassColaborador->getAgencia());
        $insert->bindValue(":conta", $ClassColaborador->getConta());
        $insert->bindValue(":cep", $ClassColaborador->getCepend());
        $insert->bindValue(":endereco", "");    /** */
        $insert->bindValue(":num", $ClassColaborador->getNend());
        $insert->bindValue(":complemento", $ClassColaborador->getCompleend());
        $insert->bindValue(":uf", $ClassColaborador->getUfend());
        $insert->bindValue(":municipio", $ClassColaborador->getMuniend());
        $insert->bindValue(":bairro", "");  /** */
        $insert->bindValue(":latlog", "");  /** */
        $insert->bindValue(":escolaridade", $ClassColaborador->getEscolaridade());
        $insert->bindValue(":instituicao", $ClassColaborador->getInstituto());
        $insert->bindValue(":curso", $ClassColaborador->getCurso());
        $insert->bindValue(":conclussao", $ClassColaborador->getDataacad());
        $insert->bindValue(":deficiencia", $ClassColaborador->getDeficiencia());
        $insert->bindValue(":tipdefi", $ClassColaborador->getDefitipo());
        $insert->bindValue(":obs", $ClassColaborador->getObservacao());
        $insert->bindValue(":statuss", $ClassColaborador->getStatus());
        $insert->bindValue(":pessoa", $ClassColaborador->getPessoa());
        $insert->bindValue(":usuario", $ClassColaborador->getUsuario());
        $insert->bindValue(":tipoveiculo", ''); /** */
        $insert->bindValue(":assinatura", '');  /** */
        $insert->execute();


       
    }
    public function selectColaborador(){

        $sql = "SELECT TAB_COL_ID,TAB_COL_NOMESOCIAL FROM `TAB_COL`";
        $select = $this->con->prepare($sql);
        $select->execute();
        $array = array();
        while($row = $select->fetch(PDO::FETCH_ASSOC)){

            $classColaborador = new CLassColaborador();

            $classColaborador->setID($row['TAB_COL_ID']);
            $classColaborador->setNome($row['TAB_COL_NOMESOCIAL']);

            $array[] = $classColaborador;
        }
           
            return $array;
    }
}
