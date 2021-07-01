<?php 

session_start();

if(isset($_SESSION['valor'])){

    echo $_SESSION['valor'];
    //header('Location: ../php/index.php');
}else{

    echo "nao existe";
}

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link href='../css/body.css' rel='stylesheet' />
    <link href='../css/main.css' rel='stylesheet' />
    <link href='../css/css.css' rel='stylesheet' />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@10"></script>
    <script src='../js/main.js'></script>
    <script src='../js/locales-all.js'></script>
    <script src='../locales/pt-br.js'></script>
    <title>Progride® </title>
</head>

<body>
    <nav class="navbar navbar-dark bg-dark navbar-expand-lg">
    <a class="navbar-brand" href="#">
    <img src="../img/progride_logo.png" width="100" height="40" alt="">
  </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Cadastro
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        <a class="dropdown-item" href="?page=parceiro/">Parceiros</a>
                        <a class="dropdown-item" href="?page=produto/">Produtos</a>
                        <!-- <a class="dropdown-item" href="?page=cargo/">Cargo</a> -->
                        <!-- <a class="dropdown-item" href="?page=preco/">Tabela de Preço</a> -->
                        <!-- <a class="dropdown-item" href="?page=colaborador/">Colaborador</a> -->
                        <!-- <a class="dropdown-item" href="?page=contrato/">Negócios</a> -->
                        <!--<a class="dropdown-item" href="?page=pagamento/">Pagamentos</a> -->
                        <a class="dropdown-item" href="?page=usuario/">Usuário</a>
                    </div>
                </li>

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Proposta
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        <a class="dropdown-item" href="?page=proposta/">Criar Proposta</a>
                    </div>
                </li>


                <!--
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Agendamento
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        <a class="dropdown-item" href="?page=tecnico/">Agendamento Tecnico</a>
                    </div>
                </li>
               
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Gerenciar OS
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        <a class="dropdown-item" href="?page=OS/">Ordem de Serviço</a>
                    </div>
                </li>
                 -->

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="color: #f9d228;">
                        Logout
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        <a class="dropdown-item" href="?page=sair/">Sair</a>
                        <a class="dropdown-item" href="?page=senha/">Alter Senha</a>
                        <a class="dropdown-item" href="?page=sobre/">Sobre</a>

                    </div>
                </li>

            </ul>
        </div>

    </nav>

</body>