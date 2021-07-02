<?php
include_once "../class/classProduto.php";
include_once "../dao/Produto.php";

if (isset($_POST['produto_cadastro'])) {

    if (!empty($_POST['cod'])  and !empty($_POST['produto']) and !empty($_POST['venda'])) {


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
?>
        <script>
            Swal.fire({
                position: 'center',
                icon: 'success',
                title: 'Registro salvo com sucesso',
                showConfirmButton: false,
                timer: 1500
            })
        </script>

    <?php

    } else {
    ?>
        <script>
            Swal.fire({
                title: 'Atenção!',
                text: 'Preenchar todos os campos obrigatorios!',
                icon: 'warning',
                confirmButtonText: 'OK'
            })
        </script>

<?php


    }
}




?>

<style>
    #conteudo {
        border: 0px solid;
        padding: 10px;
        box-shadow: 3px 3px 4px 1px rgba(0, 0, 0, 0.342);
        border-radius: 10px;
        border-style: dashed;
        /*border-color: #f00; */
        padding: 15px 35px 45px 15px;
    }
</style>
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
<form action="" method="POST">
    <div class="tab-content" id="nav-tabContent">
        <div class="tab-pane fade show active" id="nav-produto" role="tabpanel" aria-labelledby="nav-produto-tab">
            <div id="conteudo">
                <p class="text-white bg-secondary text-center">DADOS DO PRODUTO</p>
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
                        <label for="cliente">Bloqueio de Tela</label>
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
                        <label for="cliente">Valor de Venda <spam style="color: red;"><strong>*</strong></spam></label>
                        <input type="text" class="form-control form-control-sm" name="venda" id="venda" onKeyPress="return(moeda(this,'.',',',event))" placeholder="">
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
                        <input type="number" class="form-control form-control-sm" name="comissao" id="comissao" step="1%" min="1" max="3" size="3" placeholder="">
                    </div>
                </div>
            </div>
            <hr>
            <div class="text-right">
                <input class="btn btn-success" name="produto_cadastro" type="submit" value="Salvar">
            </div>
        </div>
</form>

<script language="javascript" src="../js/mascara_valor.js">
    //onKeyPress="return(moeda(this,'.',',',event))   adicionar essa chamda de função no input
</script>