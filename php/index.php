<?php 

    include_once "../class/classUsuario.php";
    include_once "../dao/UsuarioDao.php";

    if(isset($_POST['acessar'])){

        $ClassUsuario = new ClassUsuario();
        $ClassUsuario->setEmail($_POST['email']);
        $ClassUsuario->setSenha($_POST['password']);

        $Usuario = new UsuarioDao();
        $Usuario->validarUsuario($ClassUsuario);

    }   

?>
<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel='stylesheet' href="../css/index.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Tangerine">
    <title>index</title>
</head>

<body>


    <form class="form-signin" method="POST">
        <div class="text-center">
            <img id="logo" src="../img/logo.png" alt="">
            <hr>
        </div>

        <div class="input-group mb-3">
            <div class="input-group-prepend">
                <span class="input-group-text" id="basic-addon1"><img src="../img/outline_email_black_24dp.png"></span>
            </div>
            <input type="text" class="form-control" placeholder="Digite seu e-mail" name="email" aria-label="Username" aria-describedby="basic-addon1">
        </div>
       
        <div class="input-group mb-3">
            <div class="input-group-prepend">
                <span class="input-group-text" id="basic-addon1"><img src="../img/outline_lock_black_24dp.png"></span>
            </div>
            <input type="password" class="form-control" placeholder="Digite sua senha" name="password" aria-label="" aria-describedby="basic-addon1">
        </div>
        <br>
        <div class="text-left" id="cadastro">

        </div>

        <div class="text-right">
            <input type="submit" name="acessar" class="btn btn-dark btn-lg btn-block" value="ACESSAR">
        </div>

    </form>

</body>

</html>