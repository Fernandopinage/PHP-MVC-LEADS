<?php

include_once "../conection/conection.php";
include_once "../dao/DAO.php";
include_once "../class/classUsuario.php";




class UsuarioDao extends Dao
{

    public function validarUsuario($email, $password)
    {

        $sql = "SELECT CRM_USU_id,CRM_USU_EMAIL,CRM_USU_NOMERED,CRM_USU_ADMINISTRADOR FROM `crm_usu` WHERE CRM_USU_EMAIL = :CRM_USU_EMAIL and CRM_USU_SENHA = :CRM_USU_SENHA";
        $select = $this->con->prepare($sql);
        $select->bindValue(':CRM_USU_EMAIL', $email);
        $select->bindValue(':CRM_USU_SENHA', $password);
        $select->execute();
        
        session_start();
        $_SESSION['user'] = array();

        if ($row = $select->fetch(PDO::FETCH_ASSOC)) {

            $_SESSION['user'] = array(
                'id' => $row['CRM_USU_id'],
                'email' => $row['CRM_USU_EMAIL'],
                'nome' => $row['CRM_USU_NOMERED'],
                'funcao' => $row['CRM_USU_ADMINISTRADOR']
            );
        }

        
        header('Location: ../php/painel.php?page=home/');

    }

    public function insertUsuario(ClassUsuario $ClassUsuario)
    {

        $sql = "INSERT INTO `crm_usu`(`CRM_USU_ID`, `CRM_USU_NOMERED`, `CRM_USU_SENHA`, `CRM_USU_ADMINISTRADOR`, `CRM_USU_TIPEXPIRACAO`, `CRM_USU_DIAEXPIRACAO`, `CRM_USU_IMAGEM`, `CRM_USU_FOTO`, `CRM_USU_NOME`, `CRM_USU_EMAIL`, `CRM_USU_DIGITAL`, `CRM_USU_INICIOEXPIRACAO`, `CRM_USU_CONTROLE`) 
        VALUES (null, :nomereduzido, :senha, :administrador, :tipexpiracao, :diaexpiracao, :imagem, :foto, :nome, :email, :digital, :inicioexpiracao, :controle)";
        $insert = $this->con->prepare($sql);
        $insert->bindValue(':nomereduzido', $ClassUsuario->getNome());
        $insert->bindValue(':senha', $ClassUsuario->getSenha());
        $insert->bindValue(':administrador', $ClassUsuario->getFuncao());
        $insert->bindValue(':tipexpiracao', $ClassUsuario->getOption());
        $insert->bindValue(':diaexpiracao', '');
        $insert->bindValue(':imagem', '');
        $insert->bindValue(':foto', $ClassUsuario->getFoto());
        $insert->bindValue(':nome', '');
        $insert->bindValue(':email', $ClassUsuario->getEmail());
        $insert->bindValue(':digital', '');
        $insert->bindValue(':inicioexpiracao', $ClassUsuario->getData());
        $insert->bindValue(':controle', '');
        $insert->execute();
    }

    public function logaout(){
        session_destroy();
        session_unset();
       
    }
}
