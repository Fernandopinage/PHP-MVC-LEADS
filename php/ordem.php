<?php

if (isset($_POST['cadastroagenda'])) {
}


?>
<br><br>
<div class="card" style="margin-bottom: 20px;">
    <div class="navbar navbar-dark bg-dark navbar-expand-lg" style=" color:#fff; ">
        Ordem de Serviço
    </div>
</div>
<nav>
    <div class="nav nav-tabs" id="nav-tab" role="tablist">
        <a class="nav-item nav-link active" id="nav-agendamento-tab" data-toggle="tab" href="#nav-agendamento" role="tab" aria-controls="nav-agendamento" aria-selected="true" style="color: #FF7F00;">Agendamento</a>
        <a class="nav-item nav-link" id="nav-participante-tab" data-toggle="tab" href="#nav-participante" role="tab" aria-controls="nav-participante" aria-selected="true" style="color: #FF7F00;">Participante</a>
    </div>
</nav>
<br>
<hr><br>
<form action="" method="POST">
    <div class="tab-content" id="nav-tabContent">
        <div class="tab-pane fade show active" id="nav-agendamento" role="tabpanel" aria-labelledby="nav-agendamento-tab">

            <div class="form-row">
                <div class="form-group col-md-5">
                    <label for="cliente">Cliente Agendado <span style="color: red;">*</span></label>
                    <select id="cliente" name="cliente" class="form-control form-control-sm is-invalid">
                        <option value=""></option>
                        <?php
                        foreach ($cliente as $clientes) {

                            echo "<option   value='" . $clientes->getID() . "'>" . $clientes->getNome() . "</option>";
                        }
                        ?>

                    </select>

                </div>
                <div class="form-group col-md-3">
                    <label for="usuario">Técnico/Usuario <span style="color: red;">*</span></label>
                    <select id="usuario" name="usuario" class="form-control form-control-sm is-invalid" required>
                        <option value=""></option>
                        <?php
                        foreach ($dado as $dados) {

                            echo "<option value=' . $dados->getId() . '>" . $dados->getNome() . "</option>";
                        }


                        ?>
                    </select>

                </div>

                <div class="form-group col-md-2">
                    <label for="data">Data Agendamento</label>
                    <input type="date" class="form-control form-control-sm" name="data" id="data" placeholder="" value="<?php echo date("Y-m-d"); ?>">
                </div>
                <div class="form-group col-md-2">
                    <label for="resumo">Resumo</label>
                    <input type="text" class="form-control form-control-sm" name="resumo" id="resumo" placeholder="">
                </div>
            </div>

            <div class="form-row">

                <div class="form-group col-md-4">
                    <label for="contrato">Nº Contrato <span style="color: red;">*</span></label>
                    <select id="contrato" name="contrato" class="form-control form-control-sm is-invalid">
                        <option value=""></option>
                    </select>

                </div>

                <div class="form-group col-md-2">
                    <label for="horainicio">Hora Inicio <span style="color: red;">*</span></label>
                    <input type="time" class="form-control form-control-sm is-invalid" name="horainicio" id="horainicio" placeholder="">
                </div>
                <div class="form-group col-md-2">
                    <label for="horafim">Hora Final <span style="color: red;">*</span></label>
                    <input type="time" class="form-control form-control-sm is-invalid" name="horafim" id="horafim" placeholder="">
                </div>
                <div class="form-group col-md-2">
                    <label for="duracao">Translado</label>
                    <input type="time" class="form-control form-control-sm" name="translado" id="translado" placeholder="">
                </div>
                <div class="form-group col-md-2">
                    <label for="duracao">Duração <span style="color: red;">*</span></label>
                    <input type="time" class="form-control form-control-sm" name="duracao" id="duracao" placeholder="">
                </div>


            </div>
            <div class="form-row">

                <div class="form-group col-md-4">
                    <label for="status">Status</label>
                    <select id="status" name="status" class="form-control form-control-sm">
                        <option selected></option>
                        <option value="G" selected>Geral em aberto</option>
                        <option value="A">Aguardando confirmação</option>
                        <option value="P">Particular ou cancelado</option>
                        <option value="M">Em atentimento</option>
                        <option value="E">Encerrado atendimento</option>
                        <option value="F">Finalizado</option>

                    </select>

                </div>
                <div class="form-group col-md-2">
                    <label for="cliente">Evento</label>
                    <select id="evento" name="evento" class="form-control form-control-sm">
                        <option selected value="com hora">Com Hora</option>
                        <option value="sem hora">Sem Hora</option>
                    </select>

                </div>
                <div class="form-group col-md-4">
                    <label for="contato">Contato do Cliente</label>
                    <input type="type" class="form-control form-control-sm" name="contato" id="contato" placeholder="">
                </div>

            </div>
            <div class="form-row">

                <div class="form-group col-md-12">
                    <label for="detalhe">Detalhe da OS</label>
                    <textarea class="form-control form-control-sm" name="detalhe" id="detalhe" rows="6"></textarea>
                </div>

            </div>
        </div>
        <!---*******************************************************************************************************************-->
        <div class="tab-pane fade" id="nav-participante" role="tabpanel" aria-labelledby="nav-participante-tab">

            <div class="input-group mb-3 form-group col-md-3">

                <!--   <a class="dropdown-item" class="btn btn-success" href="../pdf/os.php">Usuário</a> -->
            </div>

        </div>
        <div class="text-right">
            <input class="btn btn-success" name="cadastroagenda" type="submit" value="Salvar Agendamento">

        </div>


</form>
</div>

<script>
    $('#horainicio').change(function() {

        var horainicio = document.getElementById('horainicio').value
        var horainicio = horainicio.split(':');
        var horafim = document.getElementById('horafim').value
        var horafim = horafim.split(':');
        var translado = document.getElementById('translado').value
        var translado = translado.split(':');

        if (document.getElementById('horafim').value == "") {

            var duracao = document.getElementById('duracao').value = horainicio.join(':')


        } else {

            /** convertendo hora inicio em minutos */
            var segundoinicio = parseInt((+horainicio[0]) * 60);
            var segundoinicio = (segundoinicio + parseInt(horainicio[1]))


            /** convertendo hora final em minutos */
            var segundofinal = parseInt((+horafim[0]) * 60);
            var segundofinal = (segundofinal + parseInt(horafim[1]))


            /** convertendo hora translado em minutos */
            var segundotranslado = parseInt((+translado[0]) * 60);
            var segundotranslado = (segundotranslado + parseInt(translado[1]))

            var totalHora = (segundofinal - segundoinicio) / 60 * 100;
            var hora = totalHora.toString()



            console.log(hora)
            var duracao = document.getElementById('duracao').value = hora
        }

    });
</script>

<!-- Função responsavel por preencher o campo do contrato de acordo com a consulta do cliente -->

<script>
    $("#cliente").change(function() {

        var id = document.getElementById('cliente').value

        $('#contrato').html('');

        $.ajax({

            type: 'POST', // Formado de envio
            url: '../ajax/contrato.php', // URL para onde vai ser enviados
            data: {
                id: id
            },
            success: function(data) {
                $('#contrato').html(data);
            }


        });
        return false;


    });
</script>
<script>
    $("#cliente").change(function() {

        $('#cliente').removeClass("form-control form-control-sm is-invalid").addClass("form-control form-control-sm is-valid");


    });
    $("#usuario").change(function() {

        $('#usuario').removeClass("form-control form-control-sm is-invalid").addClass("form-control form-control-sm is-valid");

        var usuario = document.getElementById('usuario').value
        console.log(usuario);
    });
    $("#contrato").change(function() {

        $('#contrato').removeClass("form-control form-control-sm is-invalid").addClass("form-control form-control-sm is-valid");


    });
    $("#horainicio").change(function() {

        $('#horainicio').removeClass("form-control form-control-sm is-invalid").addClass("form-control form-control-sm is-valid");


    });
    $("#horafim").change(function() {

        $('#horafim').removeClass("form-control form-control-sm is-invalid").addClass("form-control form-control-sm is-valid");


    });;
</script>
<!-- --------------------------------------------------------------------------------------- -->
<!-- Função responsavel por preencher o campo do numero cadastro  ----------------------------->



<!-- -------------------------------------------------------------------------------------- -->