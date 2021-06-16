<?php

include_once "../dao/DAO.php";
include_once "../class/classGrupo.php";
include_once "../dao/GrupoDAO.php";
include_once "../conection/conection.php";

  
      $ClassGrupo = new ClassGrupo();
      $grupo = new GrupoDao();

      if(isset($_POST['codigo']) && isset($_POST['descricao'])){

        $cod = $_POST['codigo'];
        $desc = $_POST['descricao'];

        $ClassGrupo->setCodigo($cod);
        $ClassGrupo->setDescricao($desc);
        

       $grupo->insertGrupo($ClassGrupo);

    
      }



  

   
