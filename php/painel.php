<?php include_once "../layout/head.php"; ?>

<div class="container">

    <?php

    if (isset($_GET['page'])) {


        $pagina = $_GET['page'];

        switch ($pagina) {
            case 'home/':
                //include_once "../php/calendario.php";
                break;

            case 'parceiro/':
                include_once "../php/parceiro.php";
                break;


            case 'colaborador/':
                include_once "../php/colaborador.php";
                break;

            case 'contrato/':
                include_once "../php/contrato.php";
                break;
            case 'tecnico/':
                include_once "../php/tecnico.php";
                break;
            case 'addtecnico/':
                include_once "../php/addtecnico.php";
                break;
            case 'OS/':
                include_once "../php/ordem.php";
                break;
            case 'usuario/':
                include_once "../php/usuario.php";
                break;
            case 'proposta/':
                include_once "../php/leads.php";
                break;
            case 'produto/':
                include_once "../php/produto.php";
                break;
            case 'cargo/':
                include_once "../php/cargo.php";
                break;

            case 'preco/':
                include_once "../php/preco.php";
                break;    

            case 'pagamento/':
                include_once "../php/pagamento.php";
                break;    

            default:
                # code...
                break;
        }
    }

    if (isset($_GET['p'])) {

        $paginacao = $_GET['p'];

        switch ($paginacao) {

            case !null:
                include_once "../php/tecnico.php";
                break;

            default:
                # code...
                break;
        }
    }

    ?>

</div>
<br><br><br>
<?php include_once "../layout/footer.php"; ?>