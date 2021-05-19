<?php 

    require '../../model/pessoa/loginCliente.php';
    require '../IControladorRequisicao.php';

    class ControladorLoginCliente implements IControladorRequisicao
    {

        private $login;

        public function __construct(){
            $this->login = new LoginCliente();
            
        }

        public function processaLogin():bool{
            if(!$this->login->efetuarLogin()){
                echo '<script>';
                echo 'alert("CPF ou senha incorreto!")';
                echo '</script>';

                return false;
            }

            header("location:../../../view/adm_screens/dash_rel/home.php");

            return true;

        }

    }

?>
