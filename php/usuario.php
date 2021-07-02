<?php

include_once "../dao/UsuarioDao.php";
$usuario = new UsuarioDao();
$dados = $usuario->listaUsuario();

?>
<br><br>
<div class="text-right">
<a class="btn btn-outline-success" href="?page=add/usuario/">Adicionar Usuário</a>
</div>
<br><br>
<table class="table">
    <thead class="thead-dark">
        <tr>
            <th scope="col">Cód</th>
            <th scope="col">Usuário</th>
            <th scope="col">E-mail</th>

        </tr>
    </thead>
    <tbody>
        <?php

        foreach ($dados as $dados) {
        ?>
            <tr>
                <th scope="col"><?php echo $dados->getID(); ?></th>
                <th scope="col"><?php echo $dados->getNome(); ?></th>
                <th scope="col"><?php echo $dados->getEmail(); ?></th>

            </tr>


        <?php
        }


        ?>

    </tbody>
</table>