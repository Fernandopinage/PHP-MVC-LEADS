<?php


include_once "../dao/LeadsDAO.php";

if(isset($_POST['id'])){

    $id = $_POST['id'];

    $valor = new ClassLeadsDAO();
    $valor->valorProduto($id); 
    

}
