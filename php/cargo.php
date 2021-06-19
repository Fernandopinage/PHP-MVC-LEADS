<?php 
include_once "../class/classGrupoUsuario.php";
include_once "../dao/GrupoUsuarioDAO.php";

if(isset($_POST['cadastro_funcao'])){

    $ClassGrupoUsuario = new ClassGrupoUsuario();
    $ClassGrupoUsuario->setCod($_POST['codigo']);
    $ClassGrupoUsuario->setSigla($_POST['sigla']);
    $ClassGrupoUsuario->setDesc($_POST['descricao']);
    $GrupoUsuario = new ClassGrupoUsuarioDAO();
    $GrupoUsuario->insertGrupoUsuario($ClassGrupoUsuario);


}


?>

<br><br>
<div class="card" style="margin-bottom: 20px;">
    <div class="navbar navbar-dark bg-dark navbar-expand-lg" style=" color:#fff; ">
        CARGO
    </div>
</div>
<nav>
    <div class="nav nav-tabs" id="nav-tab" role="tablist">
        <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true" style="color: #FF7F00;">Cadastro</a>

    </div>
</nav>
<br>

<form action="" method="POST">
    <div class="form-row">
        <div class="form-group col-md-2">
            <label for="inputCodigo">Código</label>
            <input type="type" class="form-control form-control-sm" name="codigo" id="codigo" placeholder="">
        </div>
        <div class="form-group col-md-2">
            <label for="inputCodigo">Sigla</label>
            <input type="type" class="form-control form-control-sm" name="sigla" id="sigla" placeholder="">
        </div>
        <div class="form-group col-md-8">
            <label for="inputDescricao">Descrição</label>
            <input type="type" class="form-control form-control-sm" name="descricao" id="descricao" placeholder="">
        </div>
    </div>
    <div class=text-right>
        <button type="submit" class="btn btn-success" name="cadastro_funcao">Cadastro Função</button>
    </div>
</form>