<?php
include_once "../class/classProduto.php";
include_once "../dao/Produto.php";

if (isset($_POST['produto_cadastro'])) {

    $ClassProduto = new ClassProduto();
    $ClassProduto->setCod($_POST['cod']);
    $ClassProduto->setProduto($_POST['produto']);
    $ClassProduto->setReferencia($_POST['referencia']);
    $ClassProduto->setTipo($_POST['tipo']);
    $ClassProduto->setCategoria($_POST['categoria']);
    $ClassProduto->setCaracteristica($_POST['caracteristica']);
    $ClassProduto->setCusto($_POST['custo']);
    $ClassProduto->setVenda($_POST['venda']);
    $ClassProduto->setDesc($_POST['desc']);
    $ClassProduto->setComissao($_POST['comissao']);
    $Produto = new ProdutoPAO();
    $Produto->insertProduto($ClassProduto);
    
}




?>
<br><br>
<div class="card" style="margin-bottom: 20px;">
    <div class="navbar navbar-dark bg-dark navbar-expand-lg" style=" color:#fff; ">
        PRODUTO
    </div>
</div>
<nav>
    <div class="nav nav-tabs" id="nav-tab" role="tablist">
        <a class="nav-item nav-link active" id="nav-produto-tab" data-toggle="tab" href="#nav-produto" role="tab" aria-controls="nav-produto" aria-selected="true" style="color: #000;">Produto</a>
    </div>
</nav>
<br>
<hr><br>
<form action="" method="POST">
    <div class="tab-content" id="nav-tabContent">
        <div class="tab-pane fade show active" id="nav-produto" role="tabpanel" aria-labelledby="nav-produto-tab">

            <div class="form-row">
                <div class="form-group col-md-1">
                    <label for="cliente">Cód Unico<spam style="color: red;"><strong>*</strong></spam></label>
                    <input type="text" class="form-control form-control-sm" name="cod" id="cod" placeholder="">
                </div>
                <div class="form-group col-md-5">
                    <label for="cliente">Descrição <spam style="color: red;"><strong>*</strong></spam></label>
                    <input type="text" class="form-control form-control-sm" name="produto" id="produto" placeholder="">
                </div>
                <div class="form-group col-md-4">
                    <label for="cliente">Referencia</label>
                    <input type="text" class="form-control form-control-sm" name="referencia" id="referencia" placeholder="">
                </div>
                <div class="form-group col-md-2">
                    <label for="cliente">Tipo</label>
                    <select class="form-control form-control-sm" id="tipo" name="tipo">
                        <option selected value="Ativo">Ativo</option>
                        <option value="Inativo">Inativo</option>
                    </select>
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-4">
                    <label for="cliente">Categoria </label>
                    <input type="text" class="form-control form-control-sm" name="categoria" id="categoria" placeholder="">
                </div>
                <div class="form-group col-md-4">
                    <label for="cliente">Caracteristicas</label>
                    <input type="text" class="form-control form-control-sm" name="caracteristica" id="caracteristica" placeholder="">
                </div>
                <div class="form-group col-md-2">
                    <label for="cliente">Custo</label>
                    <input type="text" class="form-control form-control-sm" name="custo" id="custo" placeholder="">
                </div>
                <div class="form-group col-md-2">
                    <label for="cliente">Valor de Venda</label>
                    <input type="text" class="form-control form-control-sm" name="venda" id="venda" placeholder="">
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-12">
                    <label for="cliente">Descrição</label>
                    <textarea class="form-control" id="exampleFormControlTextarea1" name="desc" rows="3"></textarea>
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-1">
                    <label for="cliente">Comissão(%)</label>
                    <input type="text" class="form-control form-control-sm" name="comissao" id="comissao" placeholder="">
                </div>
            </div>
            <div class="text-right">
                <input class="btn btn-success" name="produto_cadastro" type="submit" value="Salvar Produto">
            </div>
</form>
</div>

<script language="javascript" src="../js/mascara_valor.js">
    //onKeyPress="return(moeda(this,'.',',',event))   adicionar essa chamda de função no input
</script>