<?php 

    require '../../model/pessoa/login.php';

    class ControladorLogin
    {

        private $login;

        public function __construct(){
            $this->login = new Login();
            
        }

        public function processaLogin(){
            $this->login->setCpf($_POST["cpfLogin"]);
            $this->login->setSenha($_POST["senhaLogin"]);
            $this->login->setUsrTp($_POST["usr_tp"]);

            // variaveis de controle do fluxo de tela
            if($_POST["usr_tp"] == "funcionario"){
                $view_success_gerente = "../../view/adm_screens/dash_rel/home.php";
                $screen_dir = "../../view/adm_screens/";
                $view_success_preparador = $screen_dir."preparacao.php";
                $view_success_empacotador = $screen_dir."conf_embalagem.php";
                $view_success_entregador = $screen_dir."entrega.php";

                $view_failed  = "../../view/adm_screens/dash_rel/login.php";
            }
            else if ($_POST["usr_tp"] == "cliente"){
                $view_success = "../../view/home.php";

                $view_failed  = "../../view/login_cadastro.php";
            }

            // check login
            $check_login = $this->login->efetuarLogin();

            if(!$check_login){
                echo '<script>';
                echo 'alert("CPF ou senha incorreto!")';
                echo '</script>';
            
                header("location: $view_failed");
                return false;
            }
            // redirecionamento das telas
            if($_POST["usr_tp"] == "cliente"){
                header("location: $view_success");
            }
            else if($_POST["usr_tp"] == "funcionario"){
                if($check_login == 1)
                    header("location: $view_success_gerente");
                else if($check_login == 2)
                    header("location: $view_success_preparador");
                else if($check_login == 3)
                    header("location: $view_success_empacotador");
                else if($check_login == 4)
                    header("location: $view_success_entregador");
            }

        } // FIM método

    }

    $cn = new ControladorLogin();
    $cn->processaLogin();

?>
