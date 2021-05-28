<?php

    require_once '../../../vendor/autoload.php';

    use compra_certa\controller\pessoa\ControladorLogin;
    use compra_certa\controller\dashboard\ControladorDashboard;

    $cn = new ControladorDashboard();

    $cn->processaDadosHome();

    if(isset($_GET["controlador"]) && isset($_GET["acao"])){
        $controller = $_GET["controlador"];
        $acao = $_GET["acao"];
        
        if($controller == 'login'){

            if($acao == 'login'){
                $cn = new ControladorLogin();
                $cn->processaLogin();
            }

        }

    }

?>
