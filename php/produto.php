<?php
include_once "../class/classProduto.php";
include_once "../dao/Produto.php";

if(isset($_POST['produto_cadastro'])){

    $ClassProduto = new ClassProduto();
    $ClassProduto->setProduto($_POST['produto']);
    $ClassProduto->setUnidade($_POST['unidade']);
    $ClassProduto->setValor($_POST['valor']);
    $ClassProduto->setDataInicio($_POST['data']);
    $ClassProduto->setTermino($_POST['termino']);
    $ClassProduto->setDescricao($_POST['descrcao']);

    $Produto = new ProdutoPAO();
    $Produto->insertProduto($ClassProduto);
}




?>
<br><br>
<div class="card" style="margin-bottom: 20px;">
    <div class="navbar navbar-dark bg-dark navbar-expand-lg" style=" color:#fff; ">
        PRODUTOS
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
                <div class="form-group col-md-5">
                    <label for="cliente">Produto <spam style="color: red;"><strong>*</strong></spam></label>
                    <input type="text" class="form-control form-control-sm" name="produto" id="produto" placeholder="">
                </div>
                <div class="form-group col-md-1">
                    <label for="cliente">Unidade</label>
                    <input type="text" class="form-control form-control-sm" name="unidade" id="unidade" placeholder="" value="1">
                </div>
                <div class="form-group input-group-sm col-md-2">
                    <label for="inputEmail4" id="email">Valor</label>
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="inputGroup-sizing-sm">R$</span>
                        <input type="text" class="form-control form-control-sm" name="valor" id="valor" onKeyPress="return(moeda(this,'.',',',event))">
                    </div>
                </div>
                <div class="form-group col-md-2">
                    <label for="cliente">Dt. Inicio</label>
                    <input type="date" class="form-control form-control-sm" name="data" id="data" value="<?php echo date('Y-m-d'); ?>" placeholder="">
                </div>
                <div class="form-group col-md-2">
                    <label for="cliente">Dt. Término</label>
                    <input type="date" class="form-control form-control-sm" name="termino" id="termino" placeholder="" value="<?php echo date('Y-m-d'); ?>">
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-12">
                    <label for="exampleFormControlTextarea1">Descrição do Produto</label>
                    <textarea class="form-control" id="descrcao" name="descrcao" rows="3"></textarea>
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