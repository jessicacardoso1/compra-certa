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
            
            if(!$this->cliente->efetuarCadastro()){
                alert('Erro!', 'Houve uma falha no cadastro! Contate o suporte para maiores informações.');
                
                $_SESSION['usuario_logado'] = false;
                header('location: '.DIRACTION.'login');
                
                return false;
            }

            $_SESSION['usuario_logado'] = $_POST["cpfCadastro"];
            header('location: '.DIRACTION);

        }// FIM método

        public function minhaconta(){
            if(!$_SESSION['usuario_logado']){
                header('location: '.DIRACTION);

                return;
            }

                $this->carregarNavbar();
                $this->view("", "minha_conta");
        }

        public function dados(){
            if(!$_SESSION['usuario_logado']){
                header('location: '.DIRACTION);

                return;
            }
            
            $this->carregarNavbar();
            $this->cliente->setCpf($_SESSION['usuario_logado']);
            $dadosUser = $this->cliente->getDadosUser();
            // var_dump($dadosUser);
            $this->view("", "editar_dados_usr", $dadosUser);
        }

        public function editarDados(){
            if(!$_SESSION['usuario_logado']){
                header('location: '.DIRACTION);

                return;
            }

            $this->cliente->setCpf($_SESSION['usuario_logado']);
            $this->cliente->setEmail($_POST['email']);
            $this->cliente->setSenha($_POST['novasenha']);
            $this->cliente->editarDados();
            header('location: '.DIRACTION.'/cliente/minhaConta');

        }

        public function meusEnderecos(){
            if(!$_SESSION['usuario_logado']){
                header('location: '.DIRACTION);

                return;
            }

            $this->carregarNavbar();
            
            $endereco = new \compra_certa\model\endereco\Endereco;
            $lista_enderecos = $endereco->getEnderecosViaCpf($_SESSION['usuario_logado']);
            $this->view("", "meus_enderecos", $lista_enderecos);
        }

    }

?>
