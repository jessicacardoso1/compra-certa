<!doctype html>
<html lang="en">
    <head>
        <title>Legumes Preciosos</title>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Bootstrap CSS -->
        <?php
            require_once '../configs/config.php';
            echo '<link rel="stylesheet" href="'.DIRCSS.'style.min.css">';
            echo '<link rel="icon" type="image/png" href="'.DIRIMG.'ref_icon.png" />';
        ?>

        <!-- Google Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=VT323&display=swap" rel="stylesheet"> 

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    </head>
    <body>
        <?php
            require_once '../vendor/autoload.php';
            
            $despachante = new \compra_certa\routes\Despachante;
        
            require "footer.php" 
        ?>

        <script src="js/index.js"></script>
        <!-- <script src="jquerry.js"></script> -->
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    </body>
</html>

<?php


    #$rt = new \compra_certa\routes\Rota;
    #var_dump($rt->getRota());

    // $teste = new compra_certa\controller\produto\controladorProduto;

    /*
    use compra_certa\controller\pessoa\ControladorLogin;
    use compra_certa\controller\pessoa\ControladorCliente;
    use compra_certa\controller\produto\ControladorCategoria;
    use compra_certa\controller\endereco\ControladorEndereco;
    use compra_certa\controller\produto\ControladorProduto;

    
    $url = $_SERVER["REQUEST_URI"];
    ## página principal
    if(strstr($url, "index.php") || $url = "/compra-certa/view/"){
        $cn = new ControladorCategoria(); # controlador de listagem das categorias
        $cn->processaQntProdutosPorCategoria();
        include "home.php";
    }

    if(isset($_GET["controlador"]) && isset($_GET["acao"])){
        $controller = $_GET["controlador"];
        $acao = $_GET["acao"];

        if($controller == 'login'){

            if($acao == 'login'){
                $cn = new ControladorLogin();
                $cn->processaLogin();
            }

        } else if($controller == 'cliente'){

            if($acao == 'cadastro'){
                $cn = new ControladorCliente();
                $cn->processaCadastro();
            }

        } else if($controller == 'endereco'){

            if($acao == 'cadastro'){
                $cn = new ControladorEndereco();
                $cn->processaCadastro();
            }

        } else if($controller == 'produto'){

            if($acao == 'consulta'){
                $cn = new ControladorProduto();
                $cn->processaConsultarProdutos();
            }

        }
        
    }
    */

?>
