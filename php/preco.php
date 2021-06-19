<?php
include_once "../class/classProduto.php";
include_once "../dao/Produto.php";
$produto = new ProdutoPAO();
$prod = $produto->buscarProduto();

?>

<br><br>
<div class="card" style="margin-bottom: 20px;">
    <div class="navbar navbar-dark bg-dark navbar-expand-lg" style=" color:#fff; ">
        TABELA DE PREÇO
    </div>
</div>
<nav>
    <div class="nav nav-tabs" id="nav-tab" role="tablist">
        <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true" style="color: #FF7F00;">Cadastro</a>

    </div>
</nav>
<br>

<form action="" method="POST">

    <div class="form-row">
        <div class="form-group col-md-2">
            <label for="exampleFormControlTextarea1">Código</label>
            <input class="form-control form-control-sm" name="codigo" id="decodigosc">
        </div>
        <div class="form-group col-md-6">
            <label for="exampleFormControlTextarea1">Descrição</label>
            <input class="form-control form-control-sm" name="desc" id="desc">
        </div>
        <div class="form-group col-md-2">
            <label for="exampleInputEmail1"> DT. Inicio</label>
            <input type="date" class="form-control form-control-sm" name="data_inicio" value="">
        </div>
        <div class="form-group col-md-2">
            <label for="exampleInputEmail1"> DT. Termino</label>
            <input type="date" class="form-control form-control-sm" name="data_termino" value="">
        </div>
    </div>
    <div class="form-row">
        <div class="form-group col-md-4">
            <label for="inputState">Produto</label>

            <select id="produto" name="produto" class="form-control form-control-sm">
                <?php
                foreach ($prod as $prod) {
                ?>
                    <option value="<?php echo $prod->getProduto(); ?>"><?php echo $prod->getProduto(); ?></option>
                <?php
                }

                ?>

            </select>

        </div>

        <div class="form-group col-md-2">

            <label for="inputState">Valor Unitário</label>
            <input type="text" class="form-control form-control-sm" name="valor" value="">
            
        </div>
        <div class="form-group col-md-1">
        <button type="button" class="btn btn-secondary btn-sm" id="mais">+</button>
        </div>
    </div>


        <table class="table">
            <thead>
                <tr>

                    <th scope="col">Produto</th>
                    <th scope="col">Valor Unitário</th>
                </tr>
            </thead>
            <tbody id="lista">


            </tbody>
        </table>
        <div class=text-right>
            <button type="submit" class="btn btn-success" name="cadastro_funcao">Cadastro Função</button>
        </div>
</form>

<script>
    // var div = $(this.rowproduto).clone(true);



    $('#mais').click(function() {
        var produto = document.getElementById('produto').options[document.getElementById('produto').selectedIndex].innerText;

        $('#lista').append('<tr><td><input type="text" class="form-control form-control-sm" name="produto[]" value="' + produto + '" ></td><td><input type="text" class="form-control form-control-sm" name="valor[]" value=""></td></tr>')

    });
</script>