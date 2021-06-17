<?php

include_once "../class/classParceiro.php";
include_once "../dao/ParceiroDAO.php";
include_once "../conection/conection.php";

$con = new ConnectFactory();
$con->getConection();

if (isset($_POST['cadastrar'])) {


    $ClassParceiro = new ClassParceiro();

    if (!empty($_POST['leads'])) {

        $ClassParceiro->setLeads($_POST['leads']);
        $ClassParceiro->setPessoa($_POST['pessoa']);
        $ClassParceiro->setOpcao($_POST['option']);
        $ClassParceiro->setSuframa($_POST['suframa']);
        $ClassParceiro->setEstadual($_POST['estadual']);
        $ClassParceiro->setMunicipal($_POST['municipal']);
    }
    $ClassParceiro->setNome($_POST['nome']);
    $ClassParceiro->setCpf($_POST['cpf']);
    $ClassParceiro->setDatanasc($_POST['datanasc']);
    $ClassParceiro->setEmail($_POST['email']);
    $ClassParceiro->setNacionalidade($_POST['nacionalidade']);
    $ClassParceiro->setFantasia($_POST['fantasia']);
    $ClassParceiro->setNacionalidade($_POST['naturalidade']);
    $ClassParceiro->setTelefone($_POST['telefone']);
    $ClassParceiro->setCelular($_POST['celular']);
    $ClassParceiro->setAtividade($_POST['atividade']);
    $ClassParceiro->setCep2($_POST['cep2']);
    $ClassParceiro->setUf2($_POST['uf2']);
    $ClassParceiro->setNumero2($_POST['numero2']);
    $ClassParceiro->setMunicipio2($_POST['municipio2']);
    $ClassParceiro->setEndereco2($_POST['endereco2']);
    $ClassParceiro->setComplemento2($_POST['complemento2']);
    $ClassParceiro->setCep($_POST['cep']);
    $ClassParceiro->setUf($_POST['uf']);
    $ClassParceiro->setNumero($_POST['numero']);
    $ClassParceiro->setMunicipio($_POST['municipio']);
    $ClassParceiro->setEndereco($_POST['endereco']);
    $ClassParceiro->setComplemento($_POST['complemento']);
    $ClassParceiro->setOrgao($_POST['orgao']);
    $ClassParceiro->setUfexp($_POST['ufexp']);
    $ClassParceiro->setDataexp($_POST['dataexp']);
    $ClassParceiro->setInss($_POST['inss']);
    $ClassParceiro->setPiss($_POST['piss']);

    if ($_POST['pessoa'] != 'J') {
        $ClassParceiro->setCnh($_POST['cnh']);
        $ClassParceiro->setRg($_POST['rg']);
    }



    $Parceiro = new ParceiroDao();
    $Parceiro->insert($ClassParceiro);
}

?>


<br><br>
<div class="card" style="margin-bottom: 20px;">
    <div class="navbar navbar-dark bg-dark navbar-expand-lg" id="titulo" style=" color:#fff; ">

    </div>
</div>
<nav>
    <div class="nav nav-tabs" id="nav-tab" role="tablist">
        <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true" style="color: #FF7F00;">Cadastro</a>
        <a class="nav-item nav-link" id="nav-atividade-tab" data-toggle="tab" href="#nav-atividade" role="tab" aria-controls="nav-atividade" aria-selected="false" style="color: #FF7F00;">Atividade</a>
        <a class="nav-item nav-link" id="nav-endereco-tab" data-toggle="tab" href="#nav-endereco" role="tab" aria-controls="nav-endereco" aria-selected="false" style="color: #FF7F00;">Endereço</a>
        <a class="nav-item nav-link" id="nav-outro-tab" data-toggle="tab" href="#nav-outro" role="tab" aria-controls="nav-outro" aria-selected="false" style="color: #FF7F00;">Outros</a>

    </div>
</nav>
<br>

<form action="" method="POST">
    <div class="tab-content" id="nav-tabContent">

        <!-- ******************************* Cadastro ***************************************************-->
        <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
            <p class="text-white bg-secondary text-center">DADOS PESSOAIS</p>

            <div class="form-row">
                <div class="form-group col-md-4">
                    <div class="form-check">
                        <input type="checkbox" class="form-check-input" value="1" name="leads" id="leads">
                        <label class="form-check-label" for="exampleCheck1" id="label_leads">Parceiro</label>
                    </div>
                </div>
            </div>

            <div class="form-row" id="div_pessoa">
                <div class="form-group col-md-4">
                    <label for="inputEmail4" id="pessoa">Tipo Pessoa</label>
                    <div class="form-check">
                        <input class="pessoa form-check-input" type="radio" name="pessoa" id="opt" value="J" CHECKED>
                        <label class="form-check-label" for="pessoa" id="juridica">
                            Pessoa juridica
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="pessoa form-check-input" type="radio" name="pessoa" id="opt" value="F">
                        <label class="form-check-label" for="pessoa" id="Fisica">
                            Pessoa Fisica
                        </label>
                    </div>
                </div>
                <div class="form-group col-md-4">
                    <label for="inputEmail4" id="option">Tipo Cadastro</label>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="option" id="exampleRadios1" value="fornecedor">
                        <label class="form-check-label" for="exampleRadios1">
                            Fornecedor
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="option" id="exampleRadios2" value="cliente">
                        <label class="form-check-label" for="exampleRadios2">
                            Cliente
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="option" id="exampleRadios2" value="ambos" CHECKED>
                        <label class="form-check-label" for="exampleRadios2">
                            Ambos For/CLi
                        </label>
                    </div>
                </div>

            </div>
            <div class="form-row">
                <div class="form-group col-md-5" id="nome_leads">
                    <label for="inputEmail4" id="nome">Nome Completo</label>
                    <input type="text" class="form-control form-control-sm" name="nome" id="nome" placeholder="">
                </div>
                <div class="form-group col-md-4" id="cpf_leads">
                    <label for="inputEmail4" id="CPF-CNPJ">CPF</label>
                    <input type="text" class="form-control form-control-sm" name="cpf" id="cpf" placeholder="">
                </div>
                <div class="form-group col-md-3" id="data_funcao">
                    <label for="inputEmail4" id="nascimento-label">Data Nascimento</label>
                    <input type="date" class="form-control form-control-sm" name="datanasc" id="datanasc" placeholder="">
                </div>

            </div>
            <div class="form-row">
                <div class="form-group col-md-5">
                    <label for="inputEmail4">Email</label>
                    <input type="email" class="form-control form-control-sm" name="email" id="email" placeholder="">
                </div>
                <div class="form-group col-md-4">
                    <label for="inputEmail4" id="nacionalidade">Nacionalidade</label>
                    <input type="text" class="form-control form-control-sm" name="nacionalidade" id="nacionalidade" placeholder="">
                </div>
                <div class="form-group col-md-3">
                    <label for="inputEmail4" id="fantasia-label">Nome Fantasia</label>
                    <input type="text" class="form-control form-control-sm" name="fantasia" id="fantasia" placeholder="">
                </div>
            </div>
            <div class="form-row">

                <div class="form-group col-md-4">
                    <label for="inputEmail4">Telefone</label>
                    <input type="text" class="form-control form-control-sm" name="telefone" id="telefone" placeholder="">
                </div>
                <div class="form-group col-md-4">
                    <label for="inputEmail4">Celular</label>
                    <input type="text" class="form-control form-control-sm" name="celular" id="celular" placeholder="">
                </div>
                <div class="form-group col-md-4" id="leads_naturalidade">
                    <label for="inputEmail4">Naturalidade</label>
                    <input type="text" class="form-control form-control-sm" name="naturalidade" id="naturalidade" placeholder="">
                </div>

            </div>

            <div class="div-fisico">


            </div>

            <div class="div-juridico">


            </div>


        </div>
        <!-- **************************************************************************************************** -->

        <!-- *************************************** Ramo de Atividade *************************************************** -->
        <div class="tab-pane fade" id="nav-atividade" role="tabpanel" aria-labelledby="nav-atividade-tab">
            <p class="text-white bg-secondary text-center">RAMO DE ATIVIDADE</p>
            <div class="form-row">

                <div class="form-group col-md-12">
                    <label for="inputEmail4">Ramo de Atividade</label>
                    <input type="text" class="form-control form-control-sm" name="atividade" id="atividade" placeholder="">
                </div>
                <div class="form-group col-md-2">
                    <label for="inputEmail4">CEP</label>
                    <input type="text" class="form-control form-control-sm" name="cep2" id="cep2" placeholder="">
                </div>
                <div class="form-group col-md-1">
                    <label for="inputEmail4">UF</label>
                    <input type="text" class="form-control form-control-sm" name="uf2" id="uf2" placeholder="">
                </div>
                <div class="form-group col-md-1">
                    <label for="inputEmail4">Nº</label>
                    <input type="text" class="form-control form-control-sm" name="numero2" id="numero2" placeholder="">
                </div>
                <div class="form-group col-md-3">
                    <label for="inputEmail4">Municipio</label>
                    <input type="text" class="form-control form-control-sm" name="municipio2" id="municipio2" placeholder="">
                </div>
                <div class="form-group col-md-5">
                    <label for="inputEmail4">Endereço</label>
                    <input type="text" class="form-control form-control-sm" name="endereco2" id="endereco2" placeholder="">
                </div>
                <div class="form-group col-md-4">
                    <label for="inputEmail4">Bairro</label>
                    <input type="text" class="form-control form-control-sm" name="bairro2" id="bairro2" placeholder="">
                </div>
                <div class="form-group col-md-8">
                    <label for="inputEmail4">Complemento</label>
                    <input type="text" class="form-control form-control-sm" name="complemento2" id="complemento2" placeholder="">
                </div>


            </div>

        </div>
        <!-- **************************************************************************************************** -->

        <!-- *************************************** Endereço *************************************************** -->
        <div class="tab-pane fade" id="nav-endereco" role="tabpanel" aria-labelledby="nav-endereco-tab">
            <p class="text-white bg-secondary text-center ">ENDEREÇO</p>
            <div class="form-row">

                <div class="form-group col-md-2">
                    <label for="inputEmail4">CEP</label>
                    <input type="text" class="form-control form-control-sm" name="cep" id="cep" placeholder="">
                </div>
                <div class="form-group col-md-1">
                    <label for="inputEmail4">UF</label>
                    <input type="text" class="form-control form-control-sm" name="uf" id="uf" placeholder="">
                </div>
                <div class="form-group col-md-1">
                    <label for="inputEmail4">Nº</label>
                    <input type="text" class="form-control form-control-sm" name="numero" id="numero" placeholder="">
                </div>
                <div class="form-group col-md-3">
                    <label for="inputEmail4">Municipio</label>
                    <input type="text" class="form-control form-control-sm" name="municipio" id="municipio" placeholder="">
                </div>
                <div class="form-group col-md-5">
                    <label for="inputEmail4">Endereço</label>
                    <input type="text" class="form-control form-control-sm" name="endereco" id="endereco" placeholder="">
                </div>
                <div class="form-group col-md-4">
                    <label for="inputEmail4">Bairro</label>
                    <input type="text" class="form-control form-control-sm" name="bairro" id="bairro" placeholder="">
                </div>
                <div class="form-group col-md-8">
                    <label for="inputEmail4">Complemento</label>
                    <input type="text" class="form-control form-control-sm" name="complemento" id="complemento" placeholder="">
                </div>


            </div>

        </div>
        <!-- **************************************************************************************************** -->

        <!-- ****************************************** Outros ************************************************** -->
        <div class="tab-pane fade" id="nav-outro" role="tabpanel" aria-labelledby="nav-outro-tab">
            <p class="text-white bg-secondary text-center">DOCUMENTO</p>
            <div class="form-row">

                <div class="form-group col-md-3">
                    <label for="inputEmail4">Órgão Expedidor</label>
                    <input type="text" class="form-control form-control-sm" name="orgao" id="orgao" placeholder="">
                </div>
                <div class="form-group col-md-1">
                    <label for="inputEmail4">UF exp</label>
                    <input type="text" class="form-control form-control-sm" name="ufexp" id="ufexp" placeholder="">
                </div>
                <div class="form-group col-md-2">
                    <label for="inputEmail4">Data Expedição</label>
                    <input type="date" class="form-control form-control-sm" name="dataexp" id="dataexp" placeholder="">
                </div>
                <div class="form-group col-md-3">
                    <label for="inputEmail4">Iscrição INSS/CEI</label>
                    <input type="text" class="form-control form-control-sm" name="inss" id="inss" placeholder="">
                </div>
                <div class="form-group col-md-3">
                    <label for="inputEmail4">Nº PISS</label>
                    <input type="text" class="form-control form-control-sm" name="piss" id="piss" placeholder="">
                </div>


            </div>

        </div>
        <div class="text-right">
        <button type="submit" class="btn btn-success" value="cadastra dadados" name="cadastrar">Cadastra Dadados </button>
        </div>
        <!-- **************************************************************************************************** -->
        <script>
            var opt = document.getElementById('opt').value;

            if (opt === 'F') {
                $('#nome').html('<label for="inputEmail4"  id="nome">Nome Completo</label>');
                $('#CPF-CNPJ').html('<label for="inputEmail4"  id="CPF-CNPJ">CPF</label>');
                $('#nascimento-label').html('<label for="inputEmail4"  id="CPF-CNPJ">Data Nascimento</label>');
                $('.div-juritico').hide(); /** */
                $('.div-fisico').show();
                $('.div-juridico').hide();
                $('.div-fisico').html('<div class="form-row"> <div class="form-group col-md-4"> <label for="inputEmail4">RG</label> <input type="text" class="form-control form-control-sm" name="rg" id="rg" placeholder=""></div><div class="form-group col-md-4"><label for="inputEmail4">CNH</label><input type="text" class="form-control form-control-sm" name="cnh" id="nome" placeholder=""></div></div>');
                $('#fantasia-label').hide();
                $('#fantasia').hide();

            } else {

                $('#nome').html('<label for="inputEmail4" id="nome">Razão Social</label>');
                $('#CPF-CNPJ').html('<label for="inputEmail4"  id="CPF-CNPJ">CNPJ</label>');
                $('#nascimento-label').html('<label for="inputEmail4"  id="CPF-CNPJ">Data Função</label>');
                $('#fantasia').show();
                $('#fantasia-label').show();
                $('.div-juridico').show();
                $('.div-fisico').hide();
                $('.div-juridico').html('<div class="form-row"><div class="form-group col-md-2"> <label for="inputEmail4">Suframa</label> <input type="text" class="form-control form-control-sm" name="suframa" id="suframa" placeholder=""></div><div class="form-group col-md-4"><label for="inputEmail4">Incrição Estadual</label> <input type="text" class="form-control form-control-sm" name="estadual" id="nome" placeholder=""></div><div class="form-group col-md-4"> <label for="inputEmail4">Incrição Municipal</label> <input type="text" class="form-control form-control-sm" name="municipal" id="nome" placeholder=""></div></div>');

            }
        </script>
        <!----------------- checkbox responsavel por perguntar se é LEADS ---------------------->
        <script>
            $(document).ready(function() {

                $('#titulo').html('<div>LEADS</div>');
                $('#label_leads').html('<label>Marque para virar um Parceiro</label>');
                $('#nav-atividade-tab').hide();
                $('#nav-endereco-tab').hide();
                $('#nav-outro-tab').hide();
                $('#data_funcao').hide();
                $('#div_pessoa').hide();
                $('.div-juridico').html('');

                $('#nome_leads').toggleClass('form-group col-md-8');
                // $('#cpf_leads').toggleClass('form-group col-md-6');
                $('#leads').change(function() {
                    if ($("#leads:checked").val() == undefined) {
                        $("#leads").prop('checked', false);
                        $('#nav-atividade-tab').hide();
                        $('#nav-endereco-tab').hide();
                        $('#nav-outro-tab').hide();
                        $('#div_pessoa').hide();
                        $('#data_funcao').hide();
                        $('.div-juridico').html('');
                        $('#nome_leads').toggleClass('form-group col-md-8');
                        $('#titulo').html('<div>LEADS</div>');
                        $('#label_leads').html('<label>Marque para virar um Parceiro</label>');

                    } else {
                        $("#leads").prop('checked', true);
                        $('#nav-atividade-tab').show();
                        $('#nav-endereco-tab').show();
                        $('#nav-outro-tab').show();
                        $('#div_pessoa').show();
                        $('#data_funcao').show();
                        $('.div-juridico').html('<div class="form-row"><div class="form-group col-md-2"> <label for="inputEmail4">Suframa</label> <input type="text" class="form-control form-control-sm" name="suframa" id="suframa" placeholder=""></div><div class="form-group col-md-4"><label for="inputEmail4">Incrição Estadual</label> <input type="text" class="form-control form-control-sm" name="estadual" id="nome" placeholder=""></div><div class="form-group col-md-4"> <label for="inputEmail4">Incrição Municipal</label> <input type="text" class="form-control form-control-sm" name="municipal" id="nome" placeholder=""></div></div>');

                        $('#titulo').html('<div>PARCEIRO</div>');
                        $('#label_leads').html('<labe>Desmarque para virar Leads</label>');
                        $('#nome_leads').removeClass('form-group col-md-8');
                    }
                });



            });
        </script>
        <!--************************************************************************************************ -->



        <script>
            $(document).ready(function() {

                $(".pessoa").change(function() {
                    if ($(this).val() === 'F') {
                        $('#nome').html('<label for="inputEmail4"  id="nome">Nome Completo</label>');
                        $('#CPF-CNPJ').html('<label for="inputEmail4"  id="CPF-CNPJ">CPF</label>');
                        $('#nascimento-label').html('<label for="inputEmail4"  id="CPF-CNPJ">Data Nascimento</label>');
                        $('.div-juritico').hide(); /** */
                        $('.div-fisico').show();
                        $('.div-juridico').hide();
                        $('.div-fisico').html('<div class="form-row"> <div class="form-group col-md-4"> <label for="inputEmail4">RG</label> <input type="text" class="form-control form-control-sm" name="rg" id="rg" placeholder=""></div><div class="form-group col-md-4"><label for="inputEmail4">CNH</label><input type="text" class="form-control form-control-sm" name="cnh" id="nome" placeholder=""></div></div>');
                        $('#fantasia-label').hide();
                        $('#fantasia').hide();
                    }
                    if ($(this).val() === 'J') {
                        $('#nome').html('<label for="inputEmail4" id="nome">Razão Social</label>');
                        $('#CPF-CNPJ').html('<label for="inputEmail4"  id="CPF-CNPJ">CNPJ</label>');
                        $('#nascimento-label').html('<label for="inputEmail4"  id="CPF-CNPJ">Data Função</label>');
                        $('#fantasia').show();
                        $('#fantasia-label').show();
                        $('.div-juridico').show();
                        $('.div-fisico').hide();
                        $('.div-juridico').html('<div class="form-row"><div class="form-group col-md-2"> <label for="inputEmail4">Suframa</label> <input type="text" class="form-control form-control-sm" name="suframa" id="nome" placeholder=""></div><div class="form-group col-md-4"><label for="inputEmail4">Incrição Estadual</label> <input type="text" class="form-control form-control-sm" name="estadual" id="nome" placeholder=""></div><div class="form-group col-md-4"> <label for="inputEmail4">Incrição Municipal</label> <input type="text" class="form-control form-control-sm" name="municipal" id="nome" placeholder=""></div></div>');

                    }
                });

            });
        </script>


</form>
</div>