<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link href='../css/body.css' rel='stylesheet' />
    <link href='../css/main.css' rel='stylesheet' />
    <link href='../css/css.css' rel='stylesheet' />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src='../js/main.js'></script>
    <script src='../js/locales-all.js'></script>
    <script src='../locales/pt-br.js'></script>
    <title>Empresas </title>
</head>

<body>

    <nav class="navbar navbar-dark bg-dark navbar-expand-lg">
        <a class="navbar-brand" href="?page=home/" style="color: #FF7F00;">HOME</a>

    </nav>

    <div class="container">

        <br><br>
        <div class=text-right>
            <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#exampleModal">
                Cadastro Grupo
            </button>
        </div>

        <div>
            <br>
            <?php

            include_once "../dao/GrupoDAO.php";
            include_once "../dao/UnidadeDAO.php";
            include_once "../class/classGrupo.php";
            include_once "../class/classUnidade.php";

            $grupo = new GrupoDao();
            $registro = $grupo->selectGrupo();


            if (isset($_POST['cadastrogrupo'])) {

                $empresa = $_POST['empresa'];
                $codigo = $_POST['codigo'];
                $descricao = $_POST['descricao'];
                $razao = $_POST['razao'];
                $reduzido = $_POST['reduzido'];
                $tipo = $_POST['tipo'];
                $foto = $_POST['foto'];
                $inscricao = $_POST['inscricao'];
                $barra = $_POST['barra'];
                $suframa = $_POST['suframa'];
                $cep = $_POST['cep'];
                $uf = $_POST['uf'];
                $logradouro = $_POST['logradouro'];
                $bairro = $_POST['bairro'];
                $complemento = $_POST['complemento'];

                $ClassUnidade = new ClassUnidade();
                $ClassUnidade->setEmpresa($empresa);
                $ClassUnidade->setCodigo($codigo);
                $ClassUnidade->setDescricao($descricao);
                $ClassUnidade->setRazao($razao);
                $ClassUnidade->setReduzido($reduzido);
                $ClassUnidade->setTipo($tipo);
                $ClassUnidade->setFoto($foto);
                $ClassUnidade->setInscricao($inscricao);
                $ClassUnidade->setBarra($barra);
                $ClassUnidade->setSuframa($suframa);
                $ClassUnidade->setCep($cep);
                $ClassUnidade->setUf($uf);
                $ClassUnidade->setLogradouro($logradouro);
                $ClassUnidade->setBairro($bairro);
                $ClassUnidade->setComplemento($complemento);

                $empresa = new UnidadeDao();
                $empresa->insertUnidade($ClassUnidade);
                if ($empresa == TRUE) {
                    echo '<div class="alert alert-success alert-dismissible fade show" role="alert" id="msg">  Registro salvo com sucesso!.  <button type="button" class="close" data-dismiss="alert" aria-label="Close">    <span aria-hidden="true">&times;</span>  </button></div>';
            ?>
                    <script>
                        $(document).ready(function() {

                            setTimeout(function() {

                                $("#msg").alert('close');
                            }, 3000);

                        });
                    </script>
            <?php

                }
            }
            ?>
        </div>



        <br><br>
        <form method="POST" action="">
            <div class="card border-dark mb-3" style="max-width: 118rem;">
                <div class="card-header bg-transparent ">Empresa</div>
                <div class="card-body text-dark">


                    <div class="form-row">
                        <div class="form-group col-md-4">
                            <label for="inputState">Grupo Empresa</label>
                            <select id="empresa" class="form-control" name="empresa">
                                <option selected></option>
                                <?php
                                foreach ($registro as $registros) {

                                    echo "<option value= '" . $registros->getCodigo() . "'> " . $registros->getCodigo() . " - " . $registros->getDescricao() . "</option>";
                                }


                                ?>

                            </select>
                        </div>
                        <div class="form-group col-md-1">
                            <label for="inputEmail4">Código</label>
                            <input type="type" class="form-control" name="codigo" id="codigo" placeholder="">
                        </div>
                        <div class="form-group col-md-7">
                            <label for="inputPassword4">Descrição</label>
                            <input type="type" class="form-control" name="descricao" id="descricao" placeholder="">
                        </div>
                    </div>

                </div>
            </div>
            <div class="card border-dark mb-3" style="max-width: 118rem;">

                <div class="card-body text-dark">


                    <div class="form-row">
                        <div class="form-group col-md-3">
                            <label for="inputRazao">Razão Social</label>
                            <input type="type" class="form-control form-control-sm" name="razao" id="razao" placeholder="">
                        </div>
                        <div class="form-group col-md-2">
                            <label for="inputReduzido">Nome Reduzido</label>
                            <input type="type" class="form-control form-control-sm" name="reduzido" id="reduzido" placeholder="">
                        </div>
                        <div class="form-group col-md-2">
                            <label for="inputState">Tipo</label>
                            <select id="tipo" class="form-control form-control-sm" name="tipo">
                                <option selected>CNPJ</option>
                                <option value="CPF">CPF</option>
                                <option value="CEI">CEI</option>
                            </select>
                        </div>
                        <div class="form-group col-md-5">
                            <label for="inputFoto">Foto</label>
                            <input type="file" class="form-control form-control-sm" id="foto" name="foto" placeholder="">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-3">
                            <label for="inputRazao">Nº Inscrição</label>
                            <input type="type" class="form-control form-control-sm" id="inscricao" name="inscricao" placeholder="">
                        </div>
                        <div class="form-group col-md-3">
                            <label for="inputRazao">Barra</label>
                            <input type="type" class="form-control form-control-sm" id="barra" name="barra" placeholder="">
                        </div>
                        <div class="form-group col-md-3">
                            <label for="inputReduzido">Inscrição Suframa</label>
                            <input type="type" class="form-control form-control-sm" id="suframa" name="suframa" placeholder="">
                        </div>

                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-2">
                            <label for="inputRazao">CEP</label>
                            <input type="type" class="form-control form-control-sm" id="cep" name="cep" placeholder="">
                        </div>
                        <div class="form-group col-md-1">
                            <label for="inputRazao">UF</label>
                            <input type="type" class="form-control form-control-sm" id="uf" name="uf" placeholder="">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="inputReduzido">Logradouro</label>
                            <input type="type" class="form-control form-control-sm" id="logradouro" name="logradouro" placeholder="">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-4">
                            <label for="inputReduzido">Bairro</label>
                            <input type="type" class="form-control form-control-sm" id="bairro" name="bairro" placeholder="">
                        </div>
                        <div class="form-group col-md-5">
                            <label for="inputReduzido">Complemento</label>
                            <input type="type" class="form-control form-control-sm" id="complemento" name="complemento" placeholder="">
                        </div>
                    </div>
                    <div class=text-right>
                        <button type="submit" name="cadastrogrupo" class="btn btn-success">Cadastro Grupo</button>
                    </div>
                </div>
            </div>
    </div>
    </form>
    <div class="card-footer bg-transparent"> </div>
    </div>


    <!---- MODAL -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Novo Grupo</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="recebidos">
                    </div>
                    <form class="form-empresa" method="POST" action="../negocio/empresa.php?">
                        <div class="form-row">
                            <div class="form-group col-md-2">
                                <label for="inputCodigo">Código</label>
                                <input type="type" class="form-control form-control-sm" name="codigo" id="codigo" placeholder="">
                            </div>
                            <div class="form-group col-md-10">
                                <label for="inputDescricao">Descrição</label>
                                <input type="type" class="form-control form-control-sm" name="descricao" id="descricao" placeholder="">
                            </div>
                        </div>
                        <div class=text-right>
                            <button type="submit" class="btn btn-success">Cadastro Grupo</button>
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </div>

    <script>
        $(function() {

            $('.form-empresa').submit(function() {

                $.ajax({

                    url: '../ajax/grupo.php', // URL para onde vai ser enviados
                    type: 'POST', // Formado de envio
                    data: $('.form-empresa').serialize(), // class do formulario 
                    success: function(data) { // caso der certo vai aparecer os dados dentro de uma div
                        $('.recebidos').html('<div class="alert alert-success alert-dismissible fade show" role="alert">Registro salvo com sucesso  <button type="button" class="close" data-dismiss="alert" aria-label="Close">    <span aria-hidden="true">&times;</span>  </button></div>'); // imprimindo os dados do formulario na div
                        document.location.reload(true);
                    }
                });
                return false;

            });
        });
    </script>

</body>
<footer>
    <nav class="navbar fixed-bottom navbar-expand-sm navbar-dark bg-dark">
        <div class="foot">

        </div>
    </nav>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script> <!-- jquery CDN  -->
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>


</footer>

</html>