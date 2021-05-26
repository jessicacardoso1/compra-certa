<?php

    require_once '../vendor/autoload.php';

    use compra_certa\controller\pessoa\ControladorLogin;
    use compra_certa\controller\pessoa\ControladorCliente;

    if(isset($_GET["ctrl"]) && isset($_GET["acao"])){
        $controller = $_GET["ctrl"];
        $acao = $_GET["acao"];
        
        if($controller == 'controlador_login' && $acao == 'login'){ # controller login
            $cn = new ControladorLogin();
            $cn->processaLogin();
        }
        else if($controller == 'controlador_cliente' && $acao == 'cadastro'){ # controller cadastro cliente
            $cn = new ControladorCliente();
            $cn->processaCadastroCliente();
        }

    }

?>
