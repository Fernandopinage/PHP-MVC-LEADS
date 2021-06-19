<?php

include_once "../class/classGrupoUsuario.php";
include_once "../dao/GrupoUsuarioDAO.php";
include_once "../class/classUsuario.php";
include_once "../dao/UsuarioDao.php";

//session_start();

$GrupoUsuario = new ClassGrupoUsuarioDAO();
$dado =  $GrupoUsuario->selectGrupoUsuario();
/*************************************************************** */



if (isset($_POST['usuario'])) {

    $A = $_POST['senha'];
    $B = $_POST['confsenha'];
    if ($A != $B) {
        $_SESSION['danger'] = '<div class="alert alert-danger alert-dismissible fade show" role="alert" id="danger">Senha diferente <button type="button" class="close" data-dismiss="alert" aria-label="Close">    <span aria-hidden="true">&times;</span>  </button></div>';
    } else {

        $ClassUsuario = new ClassUsuario();
        $ClassUsuario->setNome($_POST['nome']);
        $ClassUsuario->setEmail($_POST['email']);
        $ClassUsuario->setFoto($_POST['foto']);
        $ClassUsuario->setSenha($_POST['senha']);
        $ClassUsuario->setFuncao($_POST['funcao']);
        $ClassUsuario->setData($_POST['data']);
        $ClassUsuario->setOption($_POST['option']);

        $usuario = new UsuarioDao();
        $usuario->insertUsuario($ClassUsuario);
    }
}


?>

<br><br>
<div class="card" style="margin-bottom: 20px;">
    <div class="navbar navbar-dark bg-dark navbar-expand-lg" style=" color:#fff; ">
        USUÁRIO
    </div>
</div>
<nav>
    <div class="nav nav-tabs" id="nav-tab" role="tablist">
        <a class="nav-item nav-link active" id="nav-usuario-tab" data-toggle="tab" href="#nav-usuario" role="tab" aria-controls="nav-usuario" aria-selected="true" style="color: #000;">Usuário</a>
        <!-- <a class="nav-item nav-link" id="nav-acesso-tab" data-toggle="tab" href="#nav-acesso" role="tab" aria-controls="nav-acesso" aria-selected="false" style="color: #000;">Acesso</a>
        <a class="nav-item nav-link" id="nav-aplicacao-tab" data-toggle="tab" href="#nav-aplicacao" role="tab" aria-controls="nav-aplicacao" aria-selected="false" style="color: #000;">Aplicação</a> -->
    </div>
</nav><br>

<div class="tab-content" id="nav-tabContent">
    <div class="tab-pane fade show active" id="nav-usuario" role="tabpanel" aria-labelledby="nav-usuario-tab">
        <p class="text-white bg-secondary text-center">DADOS DO USUÁRIO</p><br>
        <!--
        <div class="text-right">
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
            <img src="../img/outline_add_white_24dp.png"> Nova Função
            </button>

        </div>
        -->
        <div>
            <?php
            if (!empty($_SESSION['danger'])) {

                echo $_SESSION['danger'];
                $_SESSION['danger'] = '';
            }
            if (!empty($_SESSION['MSG'])) {
            ?>
                <script>
                    $(document).ready(function() {

                        setTimeout(function() {

                            $("#msg").alert('close');
                        }, 3000);

                    });
                </script>
            <?php
                echo $_SESSION['MSG'];
                $_SESSION['MSG'] = '';
            }

            ?>

        </div>

        <form action="" method="POST">
            <div class="form-row">
                <div class="form-group col-md-4">
                    <label for="inputNome" id="nome">Nome Completo</label>
                    <input type="text" class="form-control form-control-sm" name="nome" id="nome" placeholder="">
                </div>
                <div class="form-group col-md-4">
                    <label for="inputEmail4" id="email">Email</label>
                    <input type="text" class="form-control form-control-sm" name="email" id="email" placeholder="">
                </div>
                <div class="form-group col-md-4">
                    <label for="inputFoto" id="foto">Foto</label>
                    <input type="file" class="form-control form-control-sm" id="foto" name="foto" placeholder="">
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-3">
                    <label for="inputSenha" id="senha">Senha</label>
                    <input type="password" class="form-control form-control-sm" name="senha" id="senha" placeholder="">
                </div>
                <div class="form-group col-md-3">
                    <label for="inputNovasenha" id="confsenha">Confirmar senha</label>
                    <input type="password" class="form-control form-control-sm" name="confsenha" id="confsenha" placeholder="">
                </div>
                <div class="form-group col-md-3">
                    <label for="inputState" id="funcao">Cargo</label>
                    <select id="funcao" name="funcao" class="form-control form-control-sm">
                        <option selected></option>
                        <?php
                        foreach ($dado as $dados) {
                            echo "<option value=' . $dados->getId() . '>" . $dados->getDesc() . "</option>";
                        }
                        ?>
                    </select>
                </div>
                <div class="form-group col-md-3">
                    <label for="inputEmail4" id="data">Data de Cadastro</label>
                    <input type="date" class="form-control form-control-sm" name="data" id="data" placeholder="" value="<?php echo date('Y-m-d'); ?>">
                </div>
            </div>
            <!--
            <div class="form-row">
                <div class="form-group col-md-4">
                    <label for="inputEmail4" id="option">Tempo de Expiração</label>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="option" id="option" value="m">
                        <label class="form-check-label" for="exampleRadios1">
                            1 Mês
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="option" id="option" value="s">
                        <label class="form-check-label" for="exampleRadios2">
                            6 Mêses
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="option" id="option" value="a">
                        <label class="form-check-label" for="exampleRadios2">
                            1 Anos
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="option" id="option" value="n" CHECKED>
                        <label class="form-check-label" for="exampleRadios2">
                            Senha nunca expira
                        </label>
                    </div>
                </div>
            </div>
            -->
    </div>
    <!--********************************************************************************************************* --->
    <!-- ****************************************** Aplicação ************************************************** -->

    <div class="tab-pane fade" id="nav-acesso" role="tabpanel" aria-labelledby="nav-acesso-tab">
        <p class="text-white bg-secondary text-center">ACESSO</p>
        <div class="form-row">

        </div>

    </div>
    <!-- **************************************************************************************************** -->
    <!-- ****************************************** Aplicação ************************************************** -->
    <div class="tab-pane fade" id="nav-aplicacao" role="tabpanel" aria-labelledby="nav-aplicacao-tab">
        <p class="text-white bg-secondary text-center">APLICAÇÃO</p>
        <div class="form-row">
        </div>

    </div>
    <!-- **************************************************************************************************** -->
    <div class="text-right">
        <input class="btn btn-success" name="usuario" type="submit" value="Salvar registro">
    </div>

    </form>
</div>

<!--************************************ Modal Nova Funçao ****************************************************-->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Novo Função</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="recebidos">
                </div>
                <form class="form-funcao" method="POST" action="">
                    <div class="form-row">
                        <div class="form-group col-md-2">
                            <label for="inputCodigo">Código</label>
                            <input type="type" class="form-control form-control-sm" name="codigo" id="codigo" placeholder="">
                        </div>
                        <div class="form-group col-md-2">
                            <label for="inputCodigo">Sigle</label>
                            <input type="type" class="form-control form-control-sm" name="sigla" id="sigla" placeholder="">
                        </div>
                        <div class="form-group col-md-8">
                            <label for="inputDescricao">Descrição</label>
                            <input type="type" class="form-control form-control-sm" name="descricao" id="descricao" placeholder="">
                        </div>
                    </div>
                    <div class=text-right>
                        <button type="submit" class="btn btn-success">Cadastro Função</button>
                    </div>
                </form>
            </div>

        </div>
    </div>
</div>

<script>
    $(function() {

        $('.form-funcao').submit(function() {

            $.ajax({

                url: '../ajax/funcao.php', // URL para onde vai ser enviados
                type: 'POST', // Formado de envio
                data: $('.form-funcao').serialize(), // class do formulario 
                success: function(data) { // caso der certo vai aparecer os dados dentro de uma div
                    $('.recebidos').html('<div class="alert alert-success alert-dismissible fade show" role="alert" id="msg">Registro salvo com sucesso  <button type="button" class="close" data-dismiss="alert" aria-label="Close">    <span aria-hidden="true">&times;</span>  </button></div>'); // imprimindo os dados do formulario na div
                    //document.location.reload(true);
                    setTimeout(function() {

                        $("#msg").alert('close');
                    }, 3000);
                }
            });
            return false;
        });
    });
</script>
<!-- **************************************************************************************************** -->