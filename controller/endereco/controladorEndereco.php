<?php 

    namespace compra_certa\controller\endereco;
    use compra_certa\controller\Controlador;
    use compra_certa\model\endereco\Cidade;
    use compra_certa\model\endereco\Endereco;
    use compra_certa\model\endereco\Estado;

    class ControladorEndereco extends Controlador{

        private $cidade;
        private $endereco;
        private $estado;

        public function __construct(){
            if(!$_SESSION['usuario_logado']){
                header('location: '.DIRACTION);

                return;
            }

            $this->estado   = new Estado();
            $this->cidade   = new Cidade();
            $this->endereco = new Endereco();
        }
        
        public function processaCadastro(){
            $this->estado->setNome($_POST['estado']);
            
            $this->cidade->setNome($_POST['cidade']);
            $this->cidade->setEstado($this->estado);
            
            $this->endereco->setCidade($this->cidade);
           
            echo $this->endereco->getCidade()->getNome();
            $this->endereco->setPais($_POST['pais']);
            $this->endereco->setNome($_POST['nome']);
            $this->endereco->setTelefone($_POST['telefone']);
            $this->endereco->setCep($_POST['cep']);
            $this->endereco->setBairro($_POST['bairro']);
            $this->endereco->setEndereco($_POST['endereco']);
            $this->endereco->setNumero($_POST['numero']);
            $this->endereco->setComplemento($_POST['complemento']);
            
            # cadastrando o endereco
            if(!$this->endereco->efetuarCadastro()){
                echo '<script>';
                echo 'alert("Houve uma falha no cadastro! Contate o suporte para maiores informações.")';
                echo '</script>';

                header("refresh: 5");
            } else {
                echo '<script>';
                echo 'alert("Operação realizada com sucesso!")';
                echo '</script>';
                header('location:'.DIRACTION.'cliente/meusEnderecos');

                return true;
            }
        }// FIM método


        public function adicionarEndereco(){
            $this->carregarNavbar();

            $this->view("", "criar_endereco");
        }

        public function editarEndereco($id_endereco){
            $this->carregarNavbar();
            $this->endereco->setCodigo($id_endereco);

            $dadosEndereco = $this->endereco->getDadosEndereco();

            $this->view("", "editar_endereco", $dadosEndereco);

        }

        public function processaUpdate(){
           
            $this->endereco->setCodigo($_POST['id']);
            $this->endereco->setNome($_POST['nome']);
            $this->endereco->setCep($_POST['cep']);
            $this->endereco->setBairro($_POST['bairro']);
            $this->endereco->setEndereco($_POST['endereco']);
            $this->endereco->setComplemento($_POST['complemento']);
            $this->endereco->setNumero($_POST['numero']);
            $this->endereco->setTelefone($_POST['telefone']);

            $this->endereco->editarEndereco();
            header('location:'.DIRACTION.'cliente/meusEnderecos');

        }
        

        public function removerEndereco($_id_endereco){
            $this->endereco->removerEndereco($_id_endereco);

            header('location:'.DIRACTION.'cliente/meusEnderecos');
        }

    }

?>
