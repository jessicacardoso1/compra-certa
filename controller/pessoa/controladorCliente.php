<?php 

    namespace compra_certa\controller\pessoa;
    use compra_certa\controller\Controlador;
    use compra_certa\model\pessoa\Cliente;

    class ControladorCliente extends Controlador{

        private $cliente;

        public function __construct(){
            $this->cliente = new Cliente();
            
        }
        
        public function processaCadastro(){
            $this->cliente->setCpf($_POST["cpfCadastro"]);
            $this->cliente->setEmail($_POST["emailCadastro"]);
            $this->cliente->setSenha($_POST["senhaCadastro"]);
            $this->cliente->setAtivo(1);
            
            #$view_success = "../../view/login_cadastro.php";
            $view_failed = "login_cadastro.php";
            
            if(!$this->cliente->efetuarCadastro()){
                echo '<script>';
                echo 'alert("Houve uma falha no cadastro! Contate o suporte para maiores informações.")';
                echo '</script>';
                
                header("location: $view_failed");
                return false;
            }

            // implementar o redirecionamento da tela?????????
            header("location: home.php");

        }// FIM método

        public function minhaconta(){
            $this->carregarNavbar();
            $this->view("", "minha_conta");
        }
        public function minhasCompras(){
            $this->carregarNavbar();
            $this->view("","minhas_compras");
        }

        public function dados(){
            $this->cliente->setCpf($_SESSION['usuario_logado']);
            $dadosUser = $this->cliente->getDadosUser();
            $this->view("","editar_dados_usr",$dadosUser);
        }

        public function editarDados(){
            $this->cliente->setCpf($_SESSION['usuario_logado']);
            $this->cliente->setEmail($_POST['email']);
            $this->cliente->setSenha($_POST['novasenha']);
            $this->cliente->editarDados();
            header('location: '.DIRACTION.'/cliente/minhaConta');

        }

        public function meusEnderecos(){
            $this->carregarNavbar();
            $this->view("", "meus_enderecos");
        }

    }

?>
