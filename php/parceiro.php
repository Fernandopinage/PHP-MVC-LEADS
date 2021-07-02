<?php

include_once "../dao/ParceiroDAO.php";
$parceiro = new ParceiroDao();
$dados = $parceiro->contratoParceiro();

?>
<br><br>
<link href='../css/table.css' rel='stylesheet' />
<div class="text-right">
<a class="btn btn-outline-success" href="?page=add/parceiro/">Adicionar Empresa</a>
</div>
<br><br>
<table class="table">
    <thead class="thead-dark">
        <tr>
            <th scope="col">Cód</th>
            <th scope="col">Empresa</th>
            <th scope="col">CNPJ</th>

        </tr>
    </thead>
    <tbody>
        <?php

        foreach ($dados as $dados) {
        ?>
            <tr>
                <th scope="col"><?php echo $dados->getID(); ?></th>
                <th scope="col"><?php echo $dados->getFantasia(); ?></th>
                <th scope="col"><?php echo $dados->getCpf(); ?></th>

            </tr>


        <?php
        }


        ?>

    </tbody>
</table>