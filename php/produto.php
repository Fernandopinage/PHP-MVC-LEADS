<?php

include_once "../dao/Produto.php";
$produto = new ProdutoPAO();
$dados = $produto->listaProduto();

?>
<br><br>
<link href='../css/table.css' rel='stylesheet' />
<div class="text-right">
<a class="btn btn-outline-success" href="?page=add/produto/">Adicionar Produto</a>
</div>
<br><br>
<table class="table">
    <thead class="thead-dark">
        <tr>
            <th scope="col">Cód</th>
            <th scope="col">Descrição</th>
            <th scope="col">Valor de Venda</th>

        </tr>
    </thead>
    <tbody>
        <?php

        foreach ($dados as $dados) {
        ?>
            <tr>
                <th scope="col"><?php echo $dados->getID(); ?></th>
                <th scope="col"><?php echo $dados->getProduto(); ?></th>
                <th scope="col"><?php echo $dados->getVenda(); ?></th>

            </tr>


        <?php
        }


        ?>

    </tbody>
</table>