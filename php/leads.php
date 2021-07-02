<?php

include_once "../dao/LeadsDAO.php";
$leades = new ClassLeadsDAO();
$dados = $leades->listarProposta();

?>
<br><br>
<div class="text-right">
<a class="btn btn-outline-success" href="?page=add/proposta/">Criar Proposta</a>
</div>
<br><br>
<table class="table">
    <thead class="thead-dark">
        <tr>
            <th scope="col">Cód</th>
            <th scope="col">Filial</th>
            <th scope="col">Empresa</th>
            <th scope="col">Fase da Proposta</th>
            <th scope="col">Status</th>
            <th scope="col">Data da Proposta</th>

        </tr>
    </thead>
    <tbody>
        <?php

        foreach ($dados as $dados) {
        ?>
            <tr>
                <th scope="col"><?php echo $dados->getID(); ?></th>
                <th scope="col"><?php echo $dados->getFilial(); ?></th>
                <th scope="col"><?php echo $dados->getEmpresa(); ?></th>

                <th scope="col"><?php echo $dados->getFase(); ?></th>
                <th scope="col"><?php echo $dados->getStatus(); ?></th>
                <th scope="col"><?php echo $dados->getDatainicio(); ?></th>

            </tr>


        <?php
        }


        ?>

    </tbody>
</table>