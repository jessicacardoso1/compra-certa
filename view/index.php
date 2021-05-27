<?php

    require_once '../vendor/autoload.php';

    use compra_certa\controller\pessoa\ControladorLogin;
    use compra_certa\controller\pessoa\ControladorCliente;
    use compra_certa\controller\produto\ControladorCategoria;
    use compra_certa\controller\endereco\ControladorEndereco;


    ## página principal
    $cn = new ControladorCategoria(); # controlador de listagem das categorias
    $cn->processaQntProdutosPorCategoria();
    include "home.php";
    

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

        }
        
    }

?>
