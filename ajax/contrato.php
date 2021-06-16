<?php


include_once "../dao/ContratoDao.php";

if(isset($_POST['id'])){

    $id = $_POST['id'];

    $contrato = new ContratoDao();
    $contrato->AgendaTecnicoContrato($id);


}
