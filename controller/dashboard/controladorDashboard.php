<?php 

    namespace compra_certa\controller\dashboard;
    use compra_certa\controller\Controlador;
    use compra_certa\model\pessoa\Cliente;

    class ControladorDashboard extends Controlador{

        private $cliente;

        public function __construct(){
            $this->cliente = new Cliente();
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