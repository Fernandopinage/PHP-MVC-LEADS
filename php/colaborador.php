<?php
include_once "../class/classColaborador.php";
include_once "../dao/Colaborador.php";

$ClassColaborador  = new  CLassColaborador();

if (isset($_POST['cadastrar'])) {

    //$ClassColaborador->getCodigo($_POST['codigo']);
    $ClassColaborador->getPessoa($_POST['pessoa']);
    $ClassColaborador->getNome($_POST['nome']);
    $ClassColaborador->getGenero($_POST['genero']);
    $ClassColaborador->getUsuario($_POST['usuario']);
    $ClassColaborador->getNascimento($_POST['nascimento']);
    $ClassColaborador->getEstato($_POST['estato']);
    $ClassColaborador->getUf($_POST['uf']);
    $ClassColaborador->getCidade($_POST['cidade']);
    $ClassColaborador->getNaturalidade($_POST['naturalidade']);
    $ClassColaborador->getCor($_POST['cor']);
    $ClassColaborador->getTelefone($_POST['telefone']);
    $ClassColaborador->getCelular($_POST['celular']);
    $ClassColaborador->getMae($_POST['mae']);
    $ClassColaborador->getPai($_POST['pai']);
    $ClassColaborador->getDepartamento($_POST['departamento']);
    $ClassColaborador->getFuncao($_POST['funcao']);
    $ClassColaborador->getTransporte($_POST['transporte']);
    $ClassColaborador->getRg($_POST['rg']);
    $ClassColaborador->getDataemissao($_POST['dataemissao']);
    $ClassColaborador->getUfdoc($_POST['ufdoc']);
    $ClassColaborador->getOrgaoemissao($_POST['orgaoemissao']);
    $ClassColaborador->getTitulo($_POST['titulo']);
    $ClassColaborador->getZona($_POST['zona']);
    $ClassColaborador->getUfdocumento($_POST['ufdocumento']);
    $ClassColaborador->getMunicipio($_POST['municipio']);
    $ClassColaborador->getNumerodoc($_POST['numerodoc']);
    $ClassColaborador->getCategoria($_POST['categoria']);
    $ClassColaborador->getDatadoc($_POST['datadoc']);
    $ClassColaborador->getDatavalidoc($_POST['datavalidoc']);
    $ClassColaborador->getDatainfo($_POST['datainfo']);
    $ClassColaborador->getStatus($_POST['status']);
    $ClassColaborador->getDataresci($_POST['dataresci']);
    $ClassColaborador->getMotivo($_POST['motivo']);
    $ClassColaborador->getSalario($_POST['salario']);
    $ClassColaborador->getBanco($_POST['banco']);
    $ClassColaborador->getAgencia($_POST['agencia']);
    $ClassColaborador->getConta($_POST['conta']);
    $ClassColaborador->getCepend($_POST['cepend']);
    $ClassColaborador->getUfend($_POST['ufend']);
    $ClassColaborador->getNend($_POST['nend']);
    $ClassColaborador->getMuniend($_POST['muniend']);
    $ClassColaborador->getCompleend($_POST['compleend']);
    $ClassColaborador->getInstituto($_POST['instituto']);
    $ClassColaborador->getEscolaridade($_POST['escolaridade']);
    $ClassColaborador->getCurso($_POST['curso']);
    $ClassColaborador->getDataacad($_POST['dataacad']);
    $ClassColaborador->getDeficiencia($_POST['deficiencia']);
    $ClassColaborador->getDefitipo($_POST['tipo']);
    $ClassColaborador->getObservacao($_POST['observacao']);
    $Colaborador = new Colaborador();
    $Colaborador->insertColaborador($ClassColaborador);
  

}



?>



<br><br>
<div class="card" style="margin-bottom: 20px;">
    <div class="navbar navbar-dark bg-dark navbar-expand-lg" style=" color:#fff; ">
        COLABORADOR
    </div>
</div>
<nav>
    <div class="nav nav-tabs" id="nav-tab" role="tablist">
        <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true" style="color: #FF7F00;">Cadastro</a>
        <a class="nav-item nav-link" id="nav-funcao-tab" data-toggle="tab" href="#nav-funcao" role="tab" aria-controls="nav-funcao" aria-selected="true" style="color: #FF7F00;">Função</a>
        <a class="nav-item nav-link" id="nav-documentos-tab" data-toggle="tab" href="#nav-documentos" role="tab" aria-controls="nav-documentos" aria-selected="false" style="color: #FF7F00;">Documentos</a>
        <a class="nav-item nav-link" id="nav-administrativo-tab" data-toggle="tab" href="#nav-administrativo" role="tab" aria-controls="nav-administrativo" aria-selected="false" style="color: #FF7F00;">Administrativo</a>
        <a class="nav-item nav-link" id="nav-endereco-tab" data-toggle="tab" href="#nav-endereco" role="tab" aria-controls="nav-endereco" aria-selected="false" style="color: #FF7F00;">Endereço</a>
        <a class="nav-item nav-link" id="nav-formacao-tab" data-toggle="tab" href="#nav-formacao" role="tab" aria-controls="nav-formacao" aria-selected="false" style="color: #FF7F00;">Formação Academica</a>
        <a class="nav-item nav-link" id="nav-outro-tab" data-toggle="tab" href="#nav-outro" role="tab" aria-controls="nav-outro" aria-selected="false" style="color: #FF7F00;">Outros</a>
    </div>
</nav>
<br>

<form action="" method="POST">
    <div class="tab-content" id="nav-tabContent">

        <!--- ******************************************* Cadastro ************************************************** -->
        <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">

            <div class="form-row">
            <!--
                <div class="form-group col-md-2">
                    <label for="inputEmail4">Codigo</label>
                    <input type="text" class="form-control form-control-sm" name="codigo" id="codigo" placeholder="">

                </div>
            -->

                <div class="form-group col-md-4">
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="pessoa" id="fisica" value="F" CHECKED>
                        <label class="form-check-label" for="pessoa">
                            Pessoa Fisica
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="pessoa" id="juridica" value="J">
                        <label class="form-check-label" for="pessoa">
                            Pessoa juridica
                        </label>
                    </div>
                </div>


            </div>
            <div class="form-row">
                <div class="form-group col-md-5">
                    <label for="inputEmail4">Nome Completo</label>
                    <input type="text" class="form-control form-control-sm" name="nome" id="nome" placeholder="">
                </div>
                <div class="form-group col-md-3">
                    <label for="inputEmail4">Gênero</label>
                    <input type="text" class="form-control form-control-sm" name="genero" id="genero" placeholder="">
                </div>
                <div class="form-group col-md-4">
                    <label for="inputEmail4">Usúario</label>
                    <input type="email" class="form-control form-control-sm" name="usuario" id="usuario" placeholder="">
                </div>
            </div>

            <div class="form-row">

                <div class="form-group col-md-3">
                    <label for="inputEmail4">Data Nascimento</label>
                    <input type="date" class="form-control form-control-sm" name="nascimento" id="nascimento" placeholder="">
                </div>
                <div class="form-group col-md-4">
                    <label for="inputEmail4">Estato Civil</label>
                    <input type="email" class="form-control form-control-sm" name="estato" id="estato" placeholder="">
                </div>
                <div class="form-group col-md-2">
                    <label for="inputEmail4">UF Natal</label>
                    <input type="email" class="form-control form-control-sm" name="uf" id="uf" placeholder="">
                </div>
                <div class="form-group col-md-3">
                    <label for="inputEmail4">Cidade Natal</label>
                    <input type="email" class="form-control form-control-sm" name="cidade" id="cidade" placeholder="">
                </div>

            </div>
            <div class="form-row">

                <div class="form-group col-md-4">
                    <label for="inputEmail4">Naturalidade</label>
                    <input type="email" class="form-control form-control-sm" name="naturalidade" id="naturalidade" placeholder="">
                </div>
                <div class="form-group col-md-2">
                    <label for="inputEmail4">Cor Racial</label>
                    <input type="email" class="form-control form-control-sm" name="cor" id="cor" placeholder="">
                </div>
                <div class="form-group col-md-3">
                    <label for="inputEmail4">Telefone</label>
                    <input type="email" class="form-control form-control-sm" name="telefone" id="telefone" placeholder="">
                </div>
                <div class="form-group col-md-3">
                    <label for="inputEmail4">Celular</label>
                    <input type="email" class="form-control form-control-sm" name="celular" id="celular" placeholder="">
                </div>
            </div>

            <div class="form-row">

                <div class="form-group col-md-6">
                    <label for="inputEmail4">Nome Mãe</label>
                    <input type="email" class="form-control form-control-sm" name="mae" id="mae" placeholder="">
                </div>
                <div class="form-group col-md-6">
                    <label for="inputEmail4">Nome Pai</label>
                    <input type="email" class="form-control form-control-sm" name="pai" id="pai" placeholder="">
                </div>


            </div>

        </div>
        <!--- ********************************************************************************************************* -->
        <div class="tab-pane fade" id="nav-funcao" role="tabpanel" aria-labelledby="nav-funcao-tab">

            <div class="form-row">

                <div class="form-group col-md-3">
                    <label for="inputState" id="departamento">Departamento</label>
                    <select id="departamento" name="departamento" class="form-control form-control-sm">
                        <option selected></option>
                        <option> Departamento 1</option>
                        <option> Departamento 2</option>
                        <option> Departamento 3</option>
                        <?php
                        /*
                        foreach ($dado as $dados) {

                            echo "<option value=' . $dados->getId() . '>" . $dados->getDesc() . "</option>";
                        }
                        */

                        ?>
                    </select>
                </div>
                <div class="form-group col-md-3">
                    <label for="inputState" id="funcao">Função</label>
                    <select id="funcao" name="funcao" class="form-control form-control-sm">
                        <option selected></option>
                        <option> Função 1</option>
                        <option> Função 2</option>
                        <option> Função 3</option>
                        <?php
                        /*
                        foreach ($dado as $dados) {

                            echo "<option value=' . $dados->getId() . '>" . $dados->getDesc() . "</option>";
                        }
                        */

                        ?>
                    </select>
                </div>
                <div class="form-group col-md-4">
                    <label for="inputEmail4">Meio de Transporte</label>
                    <input type="email" class="form-control form-control-sm" name="transporte" id="transporte" placeholder="">
                </div>

            </div>


        </div>
        <!--- ********************************************************************************************************* -->
        <!--- ******************************************* Documentos ************************************************** -->
        <div class="tab-pane fade" id="nav-documentos" role="tabpanel" aria-labelledby="nav-documentos-tab">
            <p class="text-white bg-secondary text-center">RG</p>
            <div class="form-row">

                <div class="form-group col-md-4">
                    <label for="inputEmail4">Nº RG</label>
                    <input type="email" class="form-control form-control-sm" name="rg" id="rg" placeholder="">
                </div>
                <div class="form-group col-md-3">
                    <label for="inputEmail4">Data Emissão</label>
                    <input type="date" class="form-control form-control-sm" name="dataemissao" id="dataemisao" placeholder="">
                </div>
                <div class="form-group col-md-1">
                    <label for="inputEmail4">UF</label>
                    <input type="email" class="form-control form-control-sm" name="ufdoc" id="ufdoc" placeholder="">
                </div>
                <div class="form-group col-md-4">
                    <label for="inputEmail4">Órgão de Emissão</label>
                    <input type="email" class="form-control form-control-sm" name="orgaoemissao" id="orgaoemissao" placeholder="">
                </div>

            </div>
            <br><br>
            <p class="text-white bg-secondary text-center">Titulo Eleitor</p>
            <div class="form-row">

                <div class="form-group col-md-4">
                    <label for="inputEmail4">Nº Documento</label>
                    <input type="email" class="form-control form-control-sm" name="titulo" id="titulo" placeholder="">
                </div>
                <div class="form-group col-md-3">
                    <label for="inputEmail4">Zona Eleitoral</label>
                    <input type="type" class="form-control form-control-sm" name="zona" id="zona" placeholder="">
                </div>
                <div class="form-group col-md-1">
                    <label for="inputEmail4">UF</label>
                    <input type="email" class="form-control form-control-sm" name="ufdocumento" id="ufdocumento" placeholder="">
                </div>
                <div class="form-group col-md-4">
                    <label for="inputEmail4">Municipios</label>
                    <input type="type" class="form-control form-control-sm" name="municipio" id="municipio" placeholder="">
                </div>

            </div>
            <br><br>
            <p class="text-white bg-secondary text-center">CNH</p>
            <div class="form-row">

                <div class="form-group col-md-3">
                    <label for="inputEmail4">Nº Documento</label>
                    <input type="email" class="form-control form-control-sm" name="numerodoc" id="numerodoc" placeholder="">
                </div>
                <div class="form-group col-md-3">
                    <label for="inputEmail4">Categoria</label>
                    <input type="type" class="form-control form-control-sm" name="categoria" id="categoria" placeholder="">
                </div>
                <div class="form-group col-md-3">
                    <label for="inputEmail4">Data de Emissão</label>
                    <input type="date" class="form-control form-control-sm" name="datadoc" id="datadoc" placeholder="">
                </div>
                <div class="form-group col-md-3">
                    <label for="inputEmail4">Data de Validade</label>
                    <input type="date" class="form-control form-control-sm" name="datavalidoc" id="datavalidoc" placeholder="">
                </div>
            </div>


        </div>
        <!--- ********************************************************************************************************* -->
        <!--- ********************************************** administrativo ******************************************** -->
        <div class="tab-pane fade" id="nav-administrativo" role="tabpanel" aria-labelledby="nav-administrativo-tab">

            <p class="text-white bg-secondary text-center">INFORMAÇÔES</p>
            <div class="form-row">

                <div class="form-group col-md-3">
                    <label for="inputEmail4">Data Inicio</label>
                    <input type="date" class="form-control form-control-sm" name="datainfo" id="datainfo" placeholder="">
                </div>
                <div class="form-group col-md-3">
                    <label for="inputEmail4">Status</label>
                    <input type="type" class="form-control form-control-sm" name="status" id="status" placeholder="">
                </div>
                <div class="form-group col-md-3">
                    <label for="inputEmail4">Data Rescisão</label>
                    <input type="date" class="form-control form-control-sm" name="dataresci" id="dataresci" placeholder="">
                </div>
                <div class="form-group col-md-3">
                    <label for="inputEmail4">Motivo</label>
                    <input type="type" class="form-control form-control-sm" name="motivo" id="motivo" placeholder="">
                </div>
            </div>
            <br><br>
            <p class="text-white bg-secondary text-center">DADOS BANCARIOS</p>
            <div class="form-row">

                <div class="form-group col-md-3">
                    <label for="inputEmail4">Salario</label>
                    <input type="type" class="form-control form-control-sm" name="salario" id="salario" placeholder="">
                </div>
                <div class="form-group col-md-3">
                    <label for="inputEmail4">Banco</label>
                    <input type="type" class="form-control form-control-sm" name="banco" id="banco" placeholder="">
                </div>
                <div class="form-group col-md-3">
                    <label for="inputEmail4">Agêcia</label>
                    <input type="type" class="form-control form-control-sm" name="agencia" id="agencia" placeholder="">
                </div>
                <div class="form-group col-md-3">
                    <label for="inputEmail4">Conta</label>
                    <input type="type" class="form-control form-control-sm" name="conta" id="conta" placeholder="">
                </div>
            </div>



        </div>
        <!--- ********************************************************************************************************* -->

        <!--- ********************************************** Endereço ******************************************** -->
        <div class="tab-pane fade" id="nav-endereco" role="tabpanel" aria-labelledby="nav-endereco-tab">
            <p class="text-white bg-secondary text-center">ENDEREÇO</p>
            <div class="form-row">
                <div class="form-group col-md-3">
                    <label for="inputEmail4">CEP</label>
                    <input type="email" class="form-control form-control-sm" name="cepend" id="cepend" placeholder="">
                </div>
                <div class="form-group col-md-1">
                    <label for="inputEmail4">UF</label>
                    <input type="email" class="form-control form-control-sm" name="ufend" id="ufend" placeholder="">
                </div>
                <div class="form-group col-md-1">
                    <label for="inputEmail4">Nº</label>
                    <input type="email" class="form-control form-control-sm" name="nend" id="nend" placeholder="">
                </div>
                <div class="form-group col-md-7">
                    <label for="inputEmail4">Municipio</label>
                    <input type="email" class="form-control form-control-sm" name="muniend" id="muniend" placeholder="">
                </div>
                <div class="form-group col-md-12">
                    <label for="inputEmail4">Complemento</label>
                    <input type="email" class="form-control form-control-sm" name="compleend" id="compleend" placeholder="">
                </div>


            </div>
        </div>
        <!--- ********************************************************************************************************* -->

        <!--- ************************************************ Formação Academica *********************************************** -->
        <div class="tab-pane fade" id="nav-formacao" role="tabpanel" aria-labelledby="nav-formacao-tab">
            <p class="text-white bg-secondary text-center">FORMAÇÂO ACADÊMICA</p>
            <div class="form-row">
                <div class="form-group col-md-5">
                    <label for="inputEmail4">Instituto de Ensino</label>
                    <input type="email" class="form-control form-control-sm" name="instituto" id="instituto" placeholder="">
                </div>
                <div class="form-group col-md-3">
                    <label for="inputEmail4">Escolaridade</label>
                    <input type="email" class="form-control form-control-sm" name="escolaridade" id="escolaridade" placeholder="">
                </div>
                <div class="form-group col-md-3">
                    <label for="inputEmail4">Curso</label>
                    <input type="email" class="form-control form-control-sm" name="curso" id="curso" placeholder="">
                </div>

                <div class="form-group col-md-3">
                    <label for="inputEmail4">Data de Conclusão</label>
                    <input type="date" class="form-control form-control-sm" name="dataacad" id="dataacad" placeholder="">
                </div>


            </div>
        </div>

        <!--- ********************************************************************************************************* -->
        <!--- ************************************************ Outros *********************************************** -->

        <div class="tab-pane fade" id="nav-outro" role="tabpanel" aria-labelledby="nav-outro-tab">
            <p class="text-white bg-secondary text-center">OUTROS</p>
            <div class="form-row">

                <div class="form-group col-md-1">
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="deficiencia" id="" value="S" CHECKED>
                        <label class="form-check-label" for="pessoa">
                            Sim
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="deficiencia" id="" value="N">
                        <label class="form-check-label" for="pessoa">
                            Não
                        </label>
                    </div>
                </div>

                <div class="form-group col-md-6">
                    <label for="inputEmail4">Tipo PCD</label>
                    <input type="type" class="form-control form-control-sm" name="tipo" id="tipo" placeholder="">
                </div>
            </div>
            <div class="form-row">

                <div class="form-group col-md-12">
                    <label for="inputEmail4">Observação</label>
                    <textarea class="form-control form-control-sm" id="observacao" rows="6" name="observacao"></textarea>
                </div>

            </div>
            <button type="submit" class="btn btn-success" value="cadastra dadados" name="cadastrar">cadastra dadados </button>
        </div>
        <!--- *********************************************************************************************************************** -->
</form>
</div>