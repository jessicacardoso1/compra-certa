<?php 

    require '../../model/pessoa/loginAdministrador.php';
    require '../IControladorRequisicao.php';

    class ControladorLoginAdministrador implements IControladorRequisicao{

        private $login;

        public function __construct(){
            $this->login = new LoginAdministrador();
            
        }

        public function processaLogin():bool{
            $this->login->setCpf($_POST["cpfLogin"]);
            $this->login->setSenha($_POST["senhaLogin"]);

            if(!$this->login->efetuarLogin()){
                echo '<script>';
                echo 'alert("CPF ou senha incorreto!")';
                echo '</script>';

                header("location:../../view/adm_screens/dash_rel/login.php");
                return false;
            }

            header("location:../../view/adm_screens/dash_rel/home.php");
            return true;
        }

    }

    $controller = new ControladorLoginAdministrador();
    $controller->processaLogin();

?>