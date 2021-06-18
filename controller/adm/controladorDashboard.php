<?php 

    namespace compra_certa\controller\adm;
    use compra_certa\controller\Controlador;
    use compra_certa\model\pessoa\Cliente;

    class ControladorDashboard extends Controlador{

        private $cliente;

        public function __construct(){
            $this->cliente = new Cliente();

            $this->view("adm_screens/dash_rel/", "home");
        }

        public function processaDadosHome(){
            $dados = array(
                'num_total_clientes'        => $this->processaQntTotalClientes(),
                'num_total_clientes_ativos' => $this->processaQntTotalClientesAtivos()
            );

            $this->view("", "home", $dados);
        }

        public function processaQntTotalClientes(){
            return $this->cliente->getNumTotalClientes();
        }

        public function processaQntTotalClientesAtivos(){
            return $this->cliente->getNumTotalClientesAtivos();
        }

    }

?>