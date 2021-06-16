<?php

include_once '../function/function.php';
include_once '../class/classParceiro.php';
include_once '../dao/ParceiroDAO.php';
include_once '../class/classContrato.php';
include_once '../dao/ContratoDao.php';
// delclarando a funçao da OS
$numOS = new Função();

// chamando o Parceiro no campo cliente
$ClassParceiro = new ParceiroDao();
$dado = $ClassParceiro->contratoParceiro();



if (isset($_POST['salvarcontrato'])) {

    $ClassContrato = new ClassContrato();
    if (!empty($_POST['projeto'])) {

        $ClassContrato->setProjeto($_POST['projeto']);
    }
    $ClassContrato->setNumerocontrato($_POST['numerocontrato']);
    $ClassContrato->setCliente($_POST['cliente']);
    $ClassContrato->setProjeto($_POST['modalidade']);
    $ClassContrato->setDatacontrato($_POST['datacontrato']);
    $ClassContrato->setPrazo($_POST['prazo']);
    $ClassContrato->setDatainicio($_POST['datainicio']);
    $ClassContrato->setDatafim($_POST['datafim']);
    $ClassContrato->setValorcontrato($_POST['valorcontrato']);
    $ClassContrato->setHoracontrato($_POST['horacontrato']);
    $ClassContrato->setValorhora($_POST['valorhora']);
    $ClassContrato->setValoradicional($_POST['valoradicional']);
    $ClassContrato->setOpcao($_POST['opcao']);
    $ClassContrato->setComplemento($_POST['complemento']);

    $contrato = new ContratoDao();
    $contrato->insertContrato($ClassContrato);
}

?>

<br><br>
<div class="card" style="margin-bottom: 20px;">
    <div class="navbar navbar-dark bg-dark navbar-expand-lg" style=" color:#fff; ">
        CONTRATO
    </div>
</div>
<nav>
    <div class="nav nav-tabs" id="nav-tab" role="tablist">
        <a class="nav-item nav-link active" id="nav-contrato-tab" data-toggle="tab" href="#nav-contrato" role="tab" aria-controls="nav-contrato" aria-selected="true" style="color: #FF7F00;">Contrato</a>
        <a class="nav-item nav-link" id="nav-projeto-tab" data-toggle="tab" href="#nav-projeto" name="projection" role="tab" aria-controls="nav-projeto" aria-selected="true" style="color: #FF7F00;">Projeto</a>
    </div>
</nav>
<br>

<form action="" method="POST">
    <div class="tab-content" id="nav-tabContent">
        <div class="tab-pane fade show active" id="nav-contrato" role="tabpanel" aria-labelledby="nav-contrato-tab">

            <div class="form-row">
                <div class="form-group col-md-2">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="projeto" id="projeto">
                        <label class="form-check-label" for="flexCheckDefault">
                            Projeto
                        </label>
                    </div>
                </div>
            </div><br><br>
            <div class="form-row">
                <div class="form-group col-md-2">
                    <label for="inputEmail4">Número do Contrato</label>
                    <input type="email" class="form-control form-control-sm" name="numerocontrato" id="numerocontrato" value="<?php $numOS->NumOS(); ?>" placeholder="" readonly>

                </div>

            </div>
            <div class="form-row">
                <div class="form-group col-md-5">
                    <label for="inputState">Cliente Agendado</label>
                    <select id="cliente" name="cliente" class="form-control form-control-sm">
                        <option selected> </option>
                        <?php
                        foreach ($dado as $dados) {

                            echo "<option value=' " . $dados->getID() . " '>" . $dados->getNome() . "</option>";
                        }


                        ?>
                    </select>

                </div>
                <div class="form-group col-md-3">
                    <label for="inputEmail4">Modalidade</label>
                    <input type="text" class="form-control form-control-sm" name="modalidade" id="modalidade" placeholder="">
                </div>
                <div class="form-group col-md-2">
                    <label for="inputEmail4">Data do Contrato</label>
                    <input type="date" class="form-control form-control-sm" name="datacontrato" id="datacontrato" placeholder="">
                </div>
                <div class="form-group col-md-2">
                    <label for="inputEmail4">Prazo Validade</label>
                    <input type="date" class="form-control form-control-sm" name="prazo" id="prazo" placeholder="">
                </div>
            </div>

            <div class="form-row">

                <div class="form-group col-md-2">
                    <label for="inputEmail4">Data Inicio</label>
                    <input type="date" class="form-control form-control-sm" name="datainicio" id="datainicio" placeholder="">
                </div>
                <div class="form-group col-md-2">
                    <label for="inputEmail4">Data Final</label>
                    <input type="date" class="form-control form-control-sm" name="datafim" id="datafim" placeholder="">
                </div>
                <div class="form-group col-md-2">
                    <label for="inputEmail4">Valor do Contrato</label>
                    <input type="email" class="form-control form-control-sm" name="valorcontrato" id="valorcontrato" placeholder="R$">

                </div>
                <div class="form-group col-md-2">
                    <label for="inputEmail4">Hora Contrato</label>
                    <input type="time" class="form-control form-control-sm" name="horacontrato" id="horacontrato" placeholder="">
                </div>
                <div class="form-group col-md-2">
                    <label for="inputEmail4">Valor p/ Hora</label>
                    <input type="type" class="form-control form-control-sm" name="valorhora" id="valorhora" placeholder="R$">
                </div>
                <div class="form-group col-md-2">
                    <label for="inputEmail4">Valor Adicional</label>
                    <input type="type" class="form-control form-control-sm" name="valoradicional" id="valoradicional" placeholder="R$">
                </div>



            </div>
            <div class="form-row">

                <div class="form-group col-md-3">
                    <label for="inputState">Tipo de Contrato</label>
                    <select id="opcao" name="opcao" class="form-control form-control-sm">
                        <option selected>COM HORA</option>
                        <option>SEM HORA</option>
                    </select>

                </div>
                <div class="form-group col-md-8">
                    <label for="inputEmail4">Complemento</label>
                    <input type="type" class="form-control form-control-sm" name="complemento" id="complemento" placeholder="">
                </div>
            </div>


        </div>

        <!----------------------------------------- PROJETO ---------------------------------------->


        <div class="tab-pane fade" id="nav-projeto" name="tabprojeto" role="tabpanel" aria-labelledby="nav-projeto-tab">

            <div class="form-row">
                <!--
                <div class="form-group col-md-5">
                    <label for="inputEmail4">Descrição</label>
                    <input type="text" class="form-control form-control-sm" name="descricao" id="descricao" placeholder="">
                </div>
                <div class="form-group col-md-3">
                    <label for="inputEmail4">Modalidade</label>
                    <input type="text" class="form-control form-control-sm" name="modalidade2" id="modalidade2" placeholder="">
                </div>
                <div class="form-group col-md-2">
                    <label for="inputEmail4">Data do Projeto</label>
                    <input type="date" class="form-control form-control-sm" name="dataprojeto" id="dataprojeto" placeholder="">
                </div>
                <div class="form-group col-md-2">
                    <label for="inputEmail4">Prazo Projeto</label>
                    <input type="date" class="form-control form-control-sm" name="prazovalidade" id="prazovalidade" placeholder="">
                </div>
                -->
            </div>



        </div>

        <div class="text-right">
            <input class="btn btn-success" name="salvarcontrato" type="submit" value="Salvar Contrato">
        </div>
        <!----------------------------------------- -------------------------------------------------->
</form>
</div>

<script>
    $(document).ready(function() {

        var elemento = document.getElementById('projeto').value;


        if (elemento != elemento.checked) {
            var b = document.getElementById('nav-projeto-tab').style.display = "none"
        } else {
            var b = document.getElementById('nav-projeto-tab').style.display = "block"
        }

    });
</script>
<script>
    

        $("#projeto").change(function() {
            if (projeto.checked) {

                var a = document.getElementById('nav-projeto-tab').style.display = "block"

            } else {

                var b = document.getElementById('nav-projeto-tab').style.display = "none"

            }

        });

   
</script>