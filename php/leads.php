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
        <a class="nav-item nav-link active" id="nav-proposta-tab" data-toggle="tab" href="#nav-proposta" role="tab" aria-controls="nav-proposta" aria-selected="true" style="color: #000;">Proposta</a>
    </div>
</nav><br>

<div class="tab-content" id="nav-tabContent">
    <div class="tab-pane fade show active" id="nav-proposta" role="tabpanel" aria-labelledby="nav-proposta-tab">
        <p class="text-white bg-secondary text-center">DADOS DA PROPOSTA</p>


        <form action="" method="POST">
            <div class="form-row">

                <div class="form-group col-md-4">
                    <label for="inputState">Filial</label>
                    <select id="funcao" name="filial" class="form-control form-control-sm">
                        <option selected value="manaus">Manaus</option>
                        <option value="sao paulo">São Paulo</option>
                        <option value="macapa">Macapá</option>
                    </select>
                </div>
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
            </div>
            <div class="form-row">
                <div class="form-group col-md-4">
                    <label for="inputEmail4">Endereço</label>
                    <input type="text" class="form-control form-control-sm" name="endereco" id="endereco" placeholder="">
                </div>
                <div class="form-group col-md-2">
                    <label for="inputFoto" id="foto">Telefone</label>
                    <input type="text" class="form-control form-control-sm" id="foto" name="foto" placeholder="">
                </div>
                <div class="form-group col-md-2">
                    <label for="inputFoto" id="foto">Celular</label>
                    <input type="text" class="form-control form-control-sm" id="foto" name="foto" placeholder="">
                </div>
                <div class="form-group col-md-2">
                    <label for="inputState">Fase da Proposta</label>
                    <select id="funcao" name="fase" class="form-control form-control-sm">
                        <option selected value="elaboração">Elaboração</option>
                        <option value="negociação">Negociação</option>
                        <option value="contrato">Contrato</option>
                    </select>
                </div>
                <div class="form-group col-md-2">
                    <label for="inputState">Status</label>
                    <select id="funcao" name="status" class="form-control form-control-sm">
                        <option selected value="frio">Frio</option>
                        <option value="morno">Morno</option>
                        <option value="quente">Quente</option>
                    </select>
                </div>
            </div>

            <hr>
            <!-- Adicionando produtos -->
            <p class="text-white bg-secondary text-center">Lista de Produtos</p>
            <div id="lista">
                <p id="selecionar_produto" class="text-center">Nenhum produto na lista</p>

            </div>
            <!-- ******************** -->

            <p class="text-white bg-secondary text-center">Selecionar Produtos</p>
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

                <div class="form-group col-md-3">
                    <a href="#" data-id="1" id="adicionarCampo" class="btn btn-primary" style="margin-top: 25px; border-radius:17px;">Adicionar</a>
                    <a href="#" data-id="1" id="removerCampo" class="btn btn-danger" style="margin-top: 25px; border-radius:17px;" onclick="remover()">Remover</a>
                </div>
            </div>
            <!-- ***********************  -->
            <div class="text-right">
                <input type="submit" class="btn btn-success" name="salvar_leads" value="Salvar Leads">
            </div>
        </form>

    </div>
</div>



<script>
    $(document).ready(function() {

        $('#adicionarCampo').click(function() {
            var produto = document.getElementById('produto').value;
            var div = document.getElementById('lista').innerHTML;

            if (produto != '') {

                div += '<hr> <div class="form-row"><div class="form-check "><input class="form-check-input" type="checkbox" id="delete" onclick="myFunction()"></div><div class="form-group col-md-3"><label class="form-check-label" for="exampleCheck1">Produto</label><input type="text" class="form-control form-control-sm" name="produto[]" value="' + produto + '" readonly></div><div class="form-group col-md-2"><label for="exampleInputEmail1">Valor</label><input type="text" class="form-control form-control-sm" name="valor[]"></div><div class="form-group col-md-1"><label for="exampleInputEmail1">Unidade</label><input type="text" class="form-control form-control-sm" name="desconto[]"></div><div class="form-group col-md-4"><div class="form-group"><textarea class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Descrição"></textarea></div></div></div>';
                document.getElementById('lista').innerHTML = div;



            } else {

            }


        });


    });
</script>

<script>
    //$("#removerCampo").hide();

    function myFunction() {

    }
</script>

<script>
    function remover() {
        var a =  document.querySelectorAll("input:checked");
        
            console.log(a)

    }
</script>