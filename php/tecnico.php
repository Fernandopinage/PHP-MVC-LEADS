<?php

include_once "../class/classTecnico.php";
include_once "../dao/TecnicoDAO.php";


$classTecnico = new Tecnico();
$totalregistro = count($classTecnico->totalAgendamento()); // total de registro
$paginação = 10; // total de registro por pagina
$numpagina = ceil($totalregistro / $paginação); // calcular total de paginação 
$valor = (isset($_GET['p'])) ? $_GET['p'] : 1; // caso existe um numero de pagina
$inicio = ($paginação * $valor) - $paginação; // inicio do contador 1 ate 10 registro
$dado = $classTecnico->selectAgendaTecnico($inicio, $paginação);



?>
<br>
<br>

<div class="text-right">
    <a class="btn btn-success btn-sm" type="button" value="Editar" href="../php/painel.php?page=addtecnico/"><img src="../img/baseline_person_add_white_24dp.png">&nbsp Criar Agenda</a>
</div>

<br>
<table class="table table-striped table-hover table-sm">
    <thead>
        <tr>
            <th scope="col">Código</th>
            <th scope="col">Cliente</th>
            <th scope="col">Técnico/Consutor</th>
            <th scope="col">Resumo</th>
            <th scope="col">Hora Inicio</th>
            <th scope="col">Hora Final</th>
            <th scope="col"></th>
            <th scope="col"></th>
            <th scope="col"></th>

        </tr>
    </thead>
    <tbody>

        <?php

        foreach ($dado as $dados => $obj) {
        ?>
            <tr>
                <td><?php echo $obj->getID(); ?></td>
                <td scope="row">
                    <?php
                    $cliente = $obj->getCliente();
                    $classTecnico->selectCliente($cliente);
                    ?>
                </td>

                <td scope="row">
                    <?php

                    $usuario = $obj->getUsuario();
                    $classTecnico->selectUsuario($usuario);

                    ?>
                </td>
                <td><?php echo $obj->getResumo(); ?></td>
                <td><?php echo $obj->getHorainicio(); ?></td>
                <td><?php echo $obj->getHorafim(); ?></td>

                <td><a class="btn btn-primary btn-sm" type="button" value="Editar"><img src="../img/baseline_edit_white_24dp.png"></a></td>
                <td><a class="btn btn-danger btn-sm" type="button" value="Deletar"><img src="../img/baseline_delete_forever_white_24dp.png"></a></td>
                <td><a class="btn btn-secondary btn-sm" type="button" value="Visualizar"><img src="../img/baseline_remove_red_eye_white_24dp.png"></a></td>
            </tr>
        <?php

        }

        ?>
    </tbody>
</table>

<nav aria-label="Page navigation example">
    <ul class="pagination justify-content-center">


        <?php

        for ($i = 1; $i <= $numpagina; $i++) { ?>
            <li class="page-item"><a class="page-link" href="?p=<?php echo $i; ?>"><?php echo $i; ?></a></li>
        <?php
        }
        ?>
    </ul>
</nav>