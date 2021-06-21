<?php

include_once "../dao/LeadsDAO.php";
include_once "../class/classParceiro.php";
include_once "../class/classProduto.php";
include_once "../dao/Produto.php";
include_once "../class/classLeads.php";

include_once "../dao/PrecoDAO.php";


$empresa = new ClassLeadsDAO();
$dados = $empresa->buscaEmpresa();



$produto = new PrecoDAO();
$prod = $produto->buscaPreco();


if (isset($_POST['salvar_leads'])) {

    $Classleads = new ClassLeads();
    $Classleads->setFilial($_POST['filial']);
    $Classleads->setEmpresa($_POST['empresa']);
    $Classleads->setConsultor($_POST['consultor']);
    $Classleads->setEndereco($_POST['endereco']);
    $Classleads->setTelefone($_POST['telefone']);
    $Classleads->setCelular($_POST['celular']);
    $Classleads->setFase($_POST['fase']);
    $Classleads->setStatus($_POST['status']);

    if (isset($_POST['produto'])) {

        $Classleads->setProduto(implode(",",$_POST['produto']));
        $Classleads->setValor(implode(",",$_POST['valor']));
        $Classleads->setUnidade(implode(",",$_POST['unidade']));
    }
    $Classleads->setDescricao($_POST['descricao']);
    $Classleads->setDatainicio($_POST['data_inicio']);
    $Classleads->setDatafim($_POST['data_fim']);

    $Leads = new ClassLeadsDAO();
    $Leads->insertLeads($Classleads);
    
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
                        foreach ($dados as $dados) {
                        ?>
                            <option value="<?php echo $dados->getNome()?>"><?php echo $dados->getNome() ?></option>
                        <?php
                        }

                        ?>
                    </select>
                </div>
                <div class="form-group col-md-4">
                    <label for="inputEmail4" id="email">Consultor</label>
                    <input type="text" class="form-control form-control-sm" name="consultor" id="consultor" placeholder="">
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-4">
                    <label for="inputEmail4">Endereço</label>
                    <input type="text" class="form-control form-control-sm" name="endereco" id="endereco" placeholder="">
                </div>
                <div class="form-group col-md-2">
                    <label for="inputFoto" id="foto">Telefone</label>
                    <input type="text" class="form-control form-control-sm" id="telefone" name="telefone" placeholder="" onkeypress="mask(this, mphone);" onblur="mask(this, mphone);">
                </div>
                <div class="form-group col-md-2">
                    <label for="inputFoto" id="celular">Celular</label>
                    <input type="text" class="form-control form-control-sm" id="celular" name="celular" placeholder="" onkeypress="mask(this, mphone);" onblur="mask(this, mphone);">
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
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="inputState">Detalhamento da Proposta</label>
                    <div class="form-group">
                        <textarea class="form-control" name="descricao" id="exampleFormControlTextarea1" rows="3" placeholder="Descrição"></textarea>
                    </div>
                </div>
                <div class="form-group col-md-3">
                    <label for="inputEmail4" id="email">DT. Inicio</label>
                    <input type="date" class="form-control form-control-sm" name="data_inicio" id="data_inicio" value="<?php echo date('Y-m-d');?>" placeholder="">
                </div>
                <div class="form-group col-md-3">
                    <label for="inputEmail4" id="email">DT. Termino</label>
                    <input type="date" class="form-control form-control-sm" name="data_fim" id="data_fim" placeholder="">
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
                    <select id="produto" class="form-control form-control-sm">
                        <option selected></option>
                        <?php
                        foreach ($prod as $prod) {
                        ?>
                            <option value="<?php echo $prod->getDesc(); ?>"><?php echo $prod->getDesc(); ?></option>
                        <?php
                        }

                        ?>

                    </select>
                </div>

                <div class="form-group col-md-2">
                    <div id="hiddenValor">
                    </div>
                </div>
                <div class="form-group col-md-3">
                    <a href="#" data-id="1" id="adicionarCampo" class="btn btn-primary" style="margin-top: 25px; border-radius:17px;">Adicionar</a>
                    <!-- <a href="#" data-id="1" id="removerCampo" class="btn btn-danger" style="margin-top: 25px; border-radius:17px;" onclick="remover()">Remover</a> -->
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
    $("#produto").change(function() {

        var id = document.getElementById('produto').value
        $('#hiddenValor').html('');

        $.ajax({

            type: 'POST', // Formado de envio
            url: '../ajax/produtoLeads.php', // URL para onde vai ser enviados
            data: {
                id: id
            },
            success: function(data) {
                $('#hiddenValor').html(data);
            }


        });
        return false;


    });
</script>


<script>
    $(document).ready(function() {

        $('#adicionarCampo').click(function() {
            var produto = document.getElementById('produto').value;
            var valor_hidder = document.getElementById('valor_hidder').value;
            var div = document.getElementById('lista').innerHTML;


            if (produto != '') {

                //<div class="form-check "><input class="form-check-input" type="checkbox" id="delete" onclick="myFunction()"></div>
                div += '<hr> <div class="form-row"><div class="form-group col-md-4"><label for="exampleInputEmail1">Produto</label><input type="text" class="form-control form-control-sm" name="produto[]" value="' + produto + '" readonly></div><div class="form-group col-md-2"><label for="exampleInputEmail1"> Valor Unitário</label><input type="text" class="form-control form-control-sm" name="valor[]" value="' + valor_hidder + '"readonly></div><div class="form-group col-md-1"><label for="exampleInputEmail1">Unidade</label><input type="text" class="form-control form-control-sm" name="unidade[]"></div></div>';
                document.getElementById('lista').innerHTML = div;

            } else {

            }


        });


    });
</script>



<script>
    function remover() {
        var a = document.querySelectorAll("input:checked");
    }
</script>