<?php

    require_once '../vendor/autoload.php';

    #$rt = new \compra_certa\routes\Rota;
    #var_dump($rt->getRota());

    $despachante = new \compra_certa\routes\Despachante;

    /*
    use compra_certa\controller\pessoa\ControladorLogin;
    use compra_certa\controller\pessoa\ControladorCliente;
    use compra_certa\controller\produto\ControladorCategoria;
    use compra_certa\controller\endereco\ControladorEndereco;
    use compra_certa\controller\produto\ControladorPoduto;

    
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
                $cn = new ControladorPoduto();
                $cn->processaConsultarProdutos();
            }

        }
        
    }
    */

?>
