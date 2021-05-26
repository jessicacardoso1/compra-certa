<?php

    require_once '../../../vendor/autoload.php';

    use compra_certa\controller\pessoa\ControladorLogin;

    if(isset($_GET["ctrl"]) && isset($_GET["acao"])){
        $controller = $_GET["ctrl"];
        $acao = $_GET["acao"];
        
        if($controller == 'controlador_login'){ # controller login
            $cn = new ControladorLogin();
            $cn->processaLogin();
        }

    }

?>
