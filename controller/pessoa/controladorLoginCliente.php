<?php 

    require '../../model/pessoa/loginCliente.php';
    require '../IControladorRequisicao.php';

    class ControladorLoginCliente implements IControladorRequisicao
    {

        private $login;

        public function __construct(){
            $this->login = new LoginCliente();
            
        }

        public function processaRequisicao():void{
            $check_login = $this->login->efetuarLogin();

        }

    }

?>
