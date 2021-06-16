<?php

if (isset($_POST['salvar_leads'])) {

    echo "<pre>";
    var_dump($_POST['valor']);
    echo "</pre>";
}

?>

<br><br>
<div class="card" style="margin-bottom: 20px;">
    <div class="navbar navbar-dark bg-dark navbar-expand-lg" style=" color:#fff; ">
        LEADS
    </div>
</div>
<nav>
    <div class="nav nav-tabs" id="nav-tab" role="tablist">
        <a class="nav-item nav-link active" id="nav-proposta-tab" data-toggle="tab" href="#nav-proposta" role="tab" aria-controls="nav-proposta" aria-selected="true" style="color: #FF7F00;">Proposta</a>
    </div>
</nav><br>

<div class="tab-content" id="nav-tabContent">
    <div class="tab-pane fade show active" id="nav-proposta" role="tabpanel" aria-labelledby="nav-proposta-tab">
        <p class="text-white bg-secondary text-center">DADOS DA PROPOSTA</p>


        <form action="" method="POST">
            <div class="form-row">
                <div class="form-group col-md-4">
                    <label for="inputState" id="empresa">Empresa</label>
                    <select id="funcao" name="empresa" class="form-control form-control-sm">
                        <option selected></option>
                        <?php
                        foreach ($dado as $dados) {

                            echo "<option value=' . $dados->getId() . '>" . $dados->getDesc() . "</option>";
                        }


                        ?>
                    </select>
                </div>
                <div class="form-group col-md-4">
                    <label for="inputEmail4" id="email">Email</label>
                    <input type="text" class="form-control form-control-sm" name="email" id="email" placeholder="">
                </div>
                <div class="form-group col-md-2">
                    <label for="inputFoto" id="foto">Telefone</label>
                    <input type="text" class="form-control form-control-sm" id="foto" name="foto" placeholder="">
                </div>
                <div class="form-group col-md-2">
                    <label for="inputFoto" id="foto">Celular</label>
                    <input type="text" class="form-control form-control-sm" id="foto" name="foto" placeholder="">
                </div>
            </div>
            <hr>
            <!-- Adicionando produtos -->

            <p class="text-white bg-secondary">Adicione produtos</p>
            <div class="form-row">
                <div class="form-group col-md-4">
                    <label for="inputState">Produto</label>
                    <select name="produto" id="produto" class="form-control form-control-sm">
                        <option selected></option>
                        <option value="Volvo">Volvo</option>
                        <option value="Saab">Saab</option>
                        <?php
                        /*
                        foreach ($dado as $dados) {

                            echo "<option value=' . $dados->getDesc() . '>" . $dados->getDesc() . "</option>";
                        }*/
                        ?>

                    </select>
                </div>
                <div class="form-group input-group-sm col-md-2">
                    <label for="inputEmail4" id="email">valor</label>
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="inputGroup-sizing-sm">R$</span>
                        <input type="text" class="form-control form-control-sm" id="valor">
                    </div>
                </div>
                <div class="form-group input-group-sm col-md-2" id="formulario">
                    <label for="inputEmail4" id="email">Desconto</label>
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="inputGroup-sizing-sm">%</span>
                        <input type="text" class="form-control form-control-sm" id="desconto">
                    </div>
                </div>
                <div class="form-group input-group-sm col-md-2">

                    <a href="#" data-id="1" id="adicionarCampo" class="btn btn-success" style="margin-top: 25px;">Adicionar produto</a>
                </div>
            </div>
            <p class="text-white bg-secondary">Lista de Produtos</p>
            <div id="lista">
            </div>
            <!-- ***********************  -->
            <input type="submit" class="btn btn-primary" name="salvar_leads" value="Salvar">
        </form>

    </div>
</div>

<style>
form-control:disabled, .form-control[readonly]{
    background-color: #fff;
}

</style>

<script>
    $(document).ready(function() {

        $('#adicionarCampo').click(function() {
            var produto = document.getElementById('produto').value;
            var valor = document.getElementById('valor').value;
            var desconto = document.getElementById('desconto').value;
            var div = document.getElementById('lista').innerHTML;

            if (produto != '') {

                div += '<hr> <div class="form-row" ><div class="form-group col-sl-1"><input type="checkbox"> <label class="form-check-label" for="exampleCheck1"></label></div><div class="form-group col-md-3"><input type="text" class="form-control form-control-sm"  name="produto[]"value="' + produto + '" readonly></div><div class="form-group col-md-2"><input type="text" class="form-control form-control-sm"  name="valor[]" value="' + valor + '"readonly></div><div class="form-group col-md-1"><input type="text" class="form-control form-control-sm"  name="desconto[]" value="' + desconto + '"readonly></div><div class="form-group col-md-4"><div class="form-group"><textarea class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Descrição"></textarea></div></div>';
                document.getElementById('lista').innerHTML = div;



            } else {

            }
        });

    });
</script>