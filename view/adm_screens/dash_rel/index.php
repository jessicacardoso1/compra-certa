<?php

    require_once '../../../vendor/autoload.php';

    use compra_certa\controller\pessoa\ControladorLogin;
    use compra_certa\controller\adm\dashboard\ControladorDashboard;

    if(isset($_GET["controlador"]) && isset($_GET["acao"])){
        $controller = $_GET["controlador"];
        $acao = $_GET["acao"];
        
        if($controller == 'login'){

            if($acao == 'login'){
                $cn = new ControladorLogin();
                if($cn->processaLogin() == 1){
                    # tipo gerente -- dashboard
                    $cn = new ControladorDashboard();
                    $cn->processaDadosHome();
                }
            }

        }

    }

?>
