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
        <div class="form-group col-md-10" id="rowproduto">
            <label for="inputState">Produto</label>
            <div class="input-group-prepend">
                <select id="produto" name="produto[]" class="form-control form-control-sm">
                    <option selected></option>
                    <?php
                    foreach ($prod as $prod) {
                    ?>
                        <option value="<?php echo $prod->getProduto(); ?>"><?php echo $prod->getProduto(); ?></option>
                    <?php
                    }

                    ?>

                </select>
                <button class="btn btn-outline-success btn-sm" id="mais" name="mais" type="button">+</button>
            </div>
        </div>

    </div>
    <div class="row" id="lista">
    </div>

    <div class="form-row">
        <div class="form-group col-md-2">
            <label for="exampleInputEmail1"> Valor Unitário</label>
            <input type="text" class="form-control form-control-sm" name="valor" value="">
        </div>
        <div class="form-group col-md-2">
            <label for="exampleInputEmail1"> DT. Inicio</label>
            <input type="date" class="form-control form-control-sm" name="data_inicio" value="">
        </div>
        <div class="form-group col-md-2">
            <label for="exampleInputEmail1"> DT. Termino</label>
            <input type="date" class="form-control form-control-sm" name="data_termino" value="">
        </div>
        <div class="form-group col-md-8">
            <label for="exampleFormControlTextarea1">Descrição</label>
            <input class="form-control" name="desc" id="desc">
        </div>
    </div>



    <div class=text-right>
        <button type="submit" class="btn btn-success" name="cadastro_funcao">Cadastro Função</button>
    </div>
</form>

<script>
   var div = $(this.rowproduto).clone(true);
   
    $('#mais').click(function() {

        $('#lista').append(div);
    });
</script>