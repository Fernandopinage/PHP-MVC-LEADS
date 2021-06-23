<?php

include_once "../class/classParceiro.php";
include_once "../dao/ParceiroDAO.php";
include_once "../conection/conection.php";

$con = new ConnectFactory();
$con->getConection();

if (isset($_POST['cadastrar'])) {


    $ClassParceiro = new ClassParceiro();

    $ClassParceiro->setOpt($_POST['opt']);
    $ClassParceiro->setOption($_POST['option']);
    $ClassParceiro->setCpf($_POST['cpf']);
    $ClassParceiro->setNome($_POST['nome']);
    $ClassParceiro->setDatanasc($_POST['datanasc']);
    $ClassParceiro->setFantasia($_POST['fantasia']);
    $ClassParceiro->setEmail($_POST['email']);
    $ClassParceiro->setContato_emp($_POST['contato_emp']);
    $ClassParceiro->setTelefone($_POST['telefone']);
    $ClassParceiro->setCelular($_POST['celular']);
    $ClassParceiro->setPort($_POST['Port']);
    $ClassParceiro->setCnae($_POST['cnae']);
    $ClassParceiro->setCep($_POST['cep']);
    $ClassParceiro->setUf($_POST['uf']);
    $ClassParceiro->setNumero($_POST['numero']);
    $ClassParceiro->setMunicipio($_POST['municipio']);
    $ClassParceiro->setEndereco($_POST['endereco']);
    $ClassParceiro->setBairro($_POST['bairro']);
    $ClassParceiro->setComplemento($_POST['complemento']);
    $ClassParceiro->setNome_contato(implode(",", $_POST['nome_contato']));
    $ClassParceiro->setCargo_contato(implode(",", $_POST['cargo']));
    $ClassParceiro->setEmail_contato(implode(",", $_POST['email_contato']));
    $ClassParceiro->setTelefone_contato(implode(",", $_POST['telefone_contato']));
    $ClassParceiro->setInclusao($_POST['inclusao']);



    if ($_POST['opt'] != 'J') {
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
        <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true" style="color: #000;">Cadastro</a>
        <a class="nav-item nav-link" id="nav-endereco-tab" data-toggle="tab" href="#nav-endereco" role="tab" aria-controls="nav-endereco" aria-selected="false" style="color: #000;">Endereço</a>
        <a class="nav-item nav-link" id="nav-outro-tab" data-toggle="tab" href="#nav-outro" role="tab" aria-controls="nav-outro" aria-selected="false" style="color: #000;">Contatos</a>

    </div>
</nav>
<br>

<form action="" method="POST">
    <div class="tab-content" id="nav-tabContent">

        <!-- ******************************* Cadastro ***************************************************-->
        <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
            <p class="text-white bg-secondary text-center">DADOS PESSOAIS</p>

            <div class="form-row" id="div_pessoa">
                <div class="form-group col-md-4">
                    <label for="inputEmail4" id="pessoa">Tipo Pessoa</label>
                    <div class="form-check">
                        <input class="pessoa form-check-input" type="radio" name="opt" id="opt" value="J" CHECKED>
                        <label class="form-check-label" for="pessoa" id="juridica">
                            Pessoa juridica
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="pessoa form-check-input" type="radio" name="opt" id="opt" value="F">
                        <label class="form-check-label" for="pessoa" id="Fisica">
                            Pessoa Fisica
                        </label>
                    </div>
                </div>
                <div class="form-group col-md-4">
                    <label for="exampleFormControlSelect1">Categoria</label>
                    <select class="form-control form-control-sm" name="option" id="option">
                        <option value="pontecial">CLIENTE POTENCIAL (LEAD)</option>
                        <option value="base ativo">CLIENTE BASE (ATIVO)</option>
                        <option value="base inativo">CLIENTE BASE (INATIVO)</option>
                        <option value="perdido churn">CLIENTE PERDIDO (CHURN)</option>
                    </select>
                </div>

            </div>
            <div class="form-row">
                <div class="form-group col-md-3" id="cpf_leads">
                    <label for="inputEmail4" id="CPF-CNPJ">CPF</label>
                    <input type="text" class="form-control form-control-sm" onfocus="javascript: retirarFormatacao(this);" onblur="javascript: formatarCampo(this);" name="cpf" id="cpf" placeholder="99.999.999/9999-99">
                </div>
                <div class="form-group col-md-6" id="nome_leads">
                    <label for="inputEmail4" id="nome">Nome Completo</label>
                    <input type="text" class="form-control form-control-sm" name="nome" id="nome" placeholder="">
                </div>
                <div class="form-group col-md-3" id="data_funcao">
                    <label for="inputEmail4" id="nascimento-label">Data Nascimento</label>
                    <input type="date" class="form-control form-control-sm" name="datanasc" id="datanasc" placeholder="">
                </div>

            </div>

            <div class="form-row">
                <div class="form-group col-md-4" id="fantasia">
                    <label for="inputEmail4">Nome Fantasia</label>
                    <input type="text" class="form-control form-control-sm" name="fantasia" id="fantasia" placeholder="">
                </div>
                <div class="form-group col-md-4">
                    <label for="inputEmail4">E-mail</label>
                    <input type="email" class="form-control form-control-sm" name="email" id="email" placeholder="">
                </div>
                <div class="form-group col-md-4" id="contato_emp_leads">
                    <label for="inputEmail4" id="contato_emp">Contato</label>
                    <input type="text" class="form-control form-control-sm" name="contato_emp" placeholder="">
                </div>
            </div>
            <div class="form-row">

                <div class="form-group col-md-2">
                    <label for="inputEmail4">Telefone</label>
                    <input type="text" class="form-control form-control-sm" name="telefone" id="telefone" placeholder="" onkeypress="mask(this, mphone);" onblur="mask(this, mphone);">
                </div>
                <div class="form-group col-md-2">
                    <label for="inputEmail4">Celular</label>
                    <input type="text" class="form-control form-control-sm" name="celular" id="celular" placeholder="" onkeypress="mask(this, mphone);" onblur="mask(this, mphone);">
                </div>
                <div class="form-group col-md-4" id="port_leads">
                    <label for="inputEmail4">Port</label>
                    <input type="text" class="form-control form-control-sm" name="Port" id="Port" placeholder="">
                </div>
                <div class="form-group col-md-4" id="cnae_leads">
                    <label for="inputEmail4">CNAE</label>
                    <input type="text" class="form-control form-control-sm" name="cnae" id="cnae" placeholder="">
                </div>


                <input type="hidden" class="form-control form-control-sm" name="inclusao" id="inclusao" value="<?php echo date('Y-m-d'); ?>" placeholder="">

            </div>

            <div class="div-fisico">


            </div>

            <div class="div-juridico">


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
                    <input type="text" class="form-control form-control-sm" name="municipio" id="cidade" placeholder="">
                </div>
                <div class="form-group col-md-5">
                    <label for="inputEmail4">Endereço</label>
                    <input type="text" class="form-control form-control-sm" name="endereco" id="rua" placeholder="">
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

        <!-- ****************************************** Contatos ************************************************** -->
        <div class="tab-pane fade" id="nav-outro" role="tabpanel" aria-labelledby="nav-outro-tab">
            <p class="text-white bg-secondary text-center">Contatos</p>
            <div class="form-row">

                <div class="form-group col-md-3">
                    <label for="inputEmail4">Nome</label>
                    <input type="text" class="form-control form-control-sm" name="nome_contato[]" id="nome_contato" placeholder="">
                </div>
                <div class="form-group col-md-3">
                    <label for="inputEmail4">Email</label>
                    <input type="text" class="form-control form-control-sm" name="email_contato[]" id="email_contato" placeholder="">
                </div>
                <div class="form-group col-md-2">
                    <label for="exampleFormControlSelect1">Cargo</label>
                    <select class="form-control form-control-sm" id="cargo" name="cargo[]">
                        <option>1</option>
                        <option>2</option>
                        <option>3</option>
                        <option>4</option>
                        <option>5</option>
                    </select>
                </div>
                <div class="form-group col-md-2">
                    <label for="inputEmail4">Telefone</label>
                    <input type="text" class="form-control form-control-sm" name="telefone_contato[]" id="telefone_contato[]" placeholder="">
                </div>
                <div class="form-group col-md-2">
                    <button type="button" class="btn btn-primary btn-sm" id="mais" style="margin-top: 28px;">+</button>

                </div>
            </div>
            <div class="" id="row">

            </div>
        </div>
        <hr>
        <div class="text-right">
            <button type="submit" class="btn btn-success" value="cadastra dadados" name="cadastrar">Cadastra Dadados </button>
        </div>
        <!-- **************************************************************************************************** -->
        <!---  Mascara de CEP  ---->
        <script src="../js/mascaraCEP.js"></script>

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
                $('#email').toggleClass('form-control form-control-sm col-md-12');

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
        <!---  adicionando contatos na lista  ---->
        <script>
            $('#mais').click(function() {
                var cont = 1;

                $('#row').append(' <div class="form-row" id="campo' + cont + '" ><div class="form-group col-md-3"><label for="inputEmail4">Nome</label><input type="text" class="form-control form-control-sm" name="nome_contato[]" id="nome_contato" placeholder=""></div> <div class="form-group col-md-3"><label for="inputEmail4">Email</label><input type="text" class="form-control form-control-sm" name="email_contato[]" id="email_contato" placeholder=""></div> <div class="form-group col-md-2"> <label for="exampleFormControlSelect1">Cargo</label> <select class="form-control form-control-sm" id="cargo" name="cargo[]"><option>1</option> <option>2</option> <option>3</option></select></div> <div class="form-group col-md-2"> <label for="inputEmail4">Telefone</label> <input type="text" class="form-control form-control-sm" name="telefone_contato[]" id="telefone_contato" placeholder=""></div><div class="form-group col-md-2"><a class="btn btn-danger btn-sm" id="' + cont + '" style="margin-top:24px;color: #fff;"> - </a> </div> </div>');

            });
            $("form").on("click", ".btn-danger", function() {

                var btn_id = $(this).attr("id");
                $('#campo' + btn_id + '').remove();
            });
        </script>




</form>
</div>