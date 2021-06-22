<?php
include_once "../class/classProduto.php";
include_once "../dao/Produto.php";
include "../dao/PrecoDAO.php";

$produto = new ProdutoPAO();
$prod = $produto->buscarProduto();

if (isset($_POST['cadastro_preco'])) {

    $ClassPreco = new ClassPreco();

    $ClassPreco->setCod($_POST['codigo']);
    $ClassPreco->setDesc($_POST['desc']);
    $ClassPreco->setData($_POST['data_inicio']);
    $ClassPreco->setTermino($_POST['data_termino']);
    if (isset($_POST['produto'])) {
        $ClassPreco->setProduto(implode(",", $_POST['produto']));
        $ClassPreco->setValor(implode(",", $_POST['valor']));
    }

    $Preco = new PrecoDAO();
    $Preco->insertPreco($ClassPreco);

}

?>

<br><br>
<div class="card" style="margin-bottom: 20px;">
    <div class="navbar navbar-dark bg-dark navbar-expand-lg" style=" color:#fff; ">
        TABELA DE PREÇO
    </div>
</div>
<nav>
    <div class="nav nav-tabs" id="nav-tab" role="tablist">
        <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true" style="color: #000;">Cadastro</a>

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

            <select id="produto" class="form-control form-control-sm">
                <option></option>
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
            <input type="text" class="form-control form-control-sm" id="valor" onKeyPress="return(moeda(this,'.',',',event))" value="">

        </div>
        <div class="form-group col-md-2">
            <button type="button" class="btn btn-primary btn-sm" id="mais" style="margin-top: 28px;">+</button>

        </div>
    </div>

    <p class="text-white bg-secondary text-center" style="margin-top: 10px;">ADICIONAR PRODUTOS</p>
    <table class="table">
        <thead>
            <tr>

                <th scope="col" width='500'>Produto</th>
                <th scope="col" width='300'>Valor Unitário</th>
                <th scope="col" width='500'>Remover</th>
            </tr>
        </thead>
        <tbody id="lista">


        </tbody>
    </table>
    <div class="form-group col-md-2">
        <label for="exampleInputEmail1"> Total Saldo</label>
        <input type="teste" class="form-control form-control-sm" id="total" name="total" value="" readonly>
    </div>
    <div class=text-right>
        <button type="submit" class="btn btn-success" name="cadastro_preco">Cadastro Preço</button>
    </div>
</form>

<script src="../js/mascara_valor.js"> </script>
<script>
    var cont = 1;
    var somar;
    var uni = document.getElementById('valor').value;
    var result = document.getElementById('total').value;
    
    $('#mais').click(function() {
        var unidario = document.getElementById('valor').value;
        var total = document.getElementById('total').value;
        var produto = document.getElementById('produto').options[document.getElementById('produto').selectedIndex].innerText;

        $('#lista').append('<tr id="campo' + cont + '" class="btn-remover"><td> <input type="text" class="form-control form-control-sm" name="produto[]" value="' + produto + '" readonly></td><td> <input type="text" class="form-control form-control-sm"  name="valor[]" value="' + unidario + '" readonly></td><td> <a class="btn btn-danger"  id="' + cont + '" style="color: #fff;"> - </a>  </td></tr>')

        
        
        var produto = document.getElementById('produto').value = '';
        var unidario = document.getElementById('valor').value = '';
    });
    
        somar = (result + uni);

         total = document.getElementById('total').value = somar;
            console.log(somar)


    $("form").on("click", ".btn-danger", function() {

        var btn_id = $(this).attr("id");
        $('#campo' + btn_id + '').remove();
    });
</script>