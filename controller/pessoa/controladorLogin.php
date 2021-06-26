<?php 

    namespace compra_certa\controller\pessoa;

    use compra_certa\controller\Controlador;
    use compra_certa\model\pessoa\Login;

    class ControladorLogin extends Controlador{

        private $login;

        public function __construct(){
            $this->login = new Login();
            
            if(count($this->parseUrl()) == 1){
                $this->carregarNavbar();
                $this->view("", "login_cadastro");
            }
        }

        public function processaLogin(){
            $this->login->setCpf($_POST["cpfLogin"]);
            $this->login->setSenha($_POST["senhaLogin"]);
            $this->login->setUsrTp($_POST["usr_tp"]);

            // variaveis de controle do fluxo de tela
            if($_POST["usr_tp"] == "funcionario"){
                $view_success_gerente = "home.php";
                $view_success_preparador = "../preparacao.php";
                $view_success_empacotador = "../conf_embalagem.php";
                $view_success_entregador = "../entrega.php";

                $view_failed  = "login.php";
            }
            else if ($_POST["usr_tp"] == "cliente"){
                $view_success = DIRACTION;

                $view_failed  = DIRACTION.'login';
            }

            // check login
            $check_login = $this->login->efetuarLogin();

            if(!$check_login){
                alert('Atenção!', 'CPF ou senha inválidos!');
                
                header("location: $view_failed");

                $_SESSION['usuario_logado'] = false;
                return false;
            }
            
            $_SESSION['usuario_logado'] = $this->login->getCpf();

            // redirecionamento das telas
            if($_POST["usr_tp"] == "cliente"){
                header("location: $view_success");
            }
            else if($_POST["usr_tp"] == "funcionario"){
                if($check_login == 1){
                    #header("location: $view_success_gerente");
                    return $check_login;
                }
                else if($check_login == 2)
                    header("location: $view_success_preparador");
                else if($check_login == 3)
                    header("location: $view_success_empacotador");
                else if($check_login == 4)
                    header("location: $view_success_entregador");
            }
            
            return $check_login;
        } // FIM método

        public function logout(){
            if($_SESSION['usuario_logado'])
                $_SESSION['usuario_logado'] = '';
                #session_destroy();

            header('location: '.DIRACTION);
        }

    }

?>
