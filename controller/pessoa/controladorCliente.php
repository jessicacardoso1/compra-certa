<?php 

    require '../../model/pessoa/cliente.php';

    class ControladorCliente
    {

        private $cliente;

        public function __construct(){
            $this->cliente = new Cliente();
            
        }
        
        public function processaCadastroCliente(){
            $this->cliente->setCpf($_POST["cpfCadastro"]);
            $this->cliente->setEmail($_POST["emailCadastro"]);
            $this->cliente->setSenha($_POST["senhaCadastro"]);
            $this->cliente->setAtivo(1);
            
            #$view_success = "../../view/login_cadastro.php";
            $view_failed  = "../../view/login_cadastro.php";
            
            if(!$this->cliente->efetuarCadastro()){
                echo '<script>';
                echo 'alert("Houve uma falha no cadastro! Contate o suporte para maiores informações.")';
                echo '</script>';
                
                header("location: $view_failed");
                return false;
            }

            // implementar o redirecionamento da tela?????????
            header("location: ../../view/home.php");

        }// FIM método

    }

    $cn = new ControladorCliente();
    $cn->processaCadastroCliente();

?>
