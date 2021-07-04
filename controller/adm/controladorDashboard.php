<?php 

    namespace compra_certa\controller\adm;
    use compra_certa\controller\Controlador;
    use compra_certa\model\pessoa\Cliente;
    use compra_certa\model\compra\Compra;
    use compra_certa\model\endereco\Endereco;
    use compra_certa\model\produto\Categoria;
    use compra_certa\model\produto\Produto;

    class ControladorDashboard extends Controlador{

        protected $_cliente;
        protected $_compra;
        protected $_categoria;
        protected $_produto;
        protected $_endereco;

        public function __construct(){
            $this->_cliente = new Cliente();
            $this->_compra = new Compra();
            $this->_categoria = new Categoria();
            $this->_produto = new Produto();
            $this->_endereco = new Endereco();
        }

        public function home(){
            $dados_tela = [];

            $total_clientes = $this->numTotalClientes();
            $total_clientes_ativos = $this->numTotalClientesAtivos();
            
            $mes = getDatetimeNow()->format('m');
            $ano = getDatetimeNow()->format('Y');
            $receita_anual = $this->_compra->getReceitaAnual($ano);
            $receita_mensal = $this->_compra->getReceitaMensal($mes, $ano);
            $total_compras_mes = $this->_compra->getComprasMes($mes, $ano);
            
            // categorias mais vendidas...
            $categorias_mais_vendidas = $this->_categoria->getCategoriasMaisVendidas();

            // pedidos por setores...
            $pedidos_por_setores = $this->_compra->getPedidosPorSetores();

            $dados_tela[] = $total_clientes;
            $dados_tela[] = $total_clientes_ativos;
            $dados_tela[] = $receita_anual;
            $dados_tela[] = $receita_mensal;
            $dados_tela[] = $total_compras_mes;
            $dados_tela[] = $categorias_mais_vendidas;
            $dados_tela[] = $pedidos_por_setores;

            $this->view("adm_screens/dash_rel/", "home", $dados_tela);
        }
        
        public function produtosMaisVendidos(){
            $dados_tela = [];

            $produto = $this->_produto->getProdutoMaisVendido();

            $ano = getDatetimeNow()->format('Y');

            $dados_tela[] = $produto;

            $this->view("adm_screens/dash_rel/", "rel_produtos_mais_vendidos", $dados_tela);
        }

        public function clientesMaisCompram(){
            $clientes = $this->_cliente->clientesMaisCompram();
            
            $this->view("adm_screens/dash_rel/", "rel_clientes_mais_compram", $clientes);
        }

        public function bairrosMaisAtendidos(){
            $bairros = $this->_endereco->getBairrosMaisAtendidos();

            $this->view("adm_screens/dash_rel/", "rel_bairros_mais_atendidos", $bairros);
        }

        public function tempoMedioPorSetor(){


            $this->view("adm_screens/dash_rel/", "rel_tmp_medio_setor");
        }


        public function numTotalClientes(){
            return $this->_cliente->getNumTotalClientes();
        }

        public function numTotalClientesAtivos(){
            return $this->_cliente->getNumTotalClientesAtivos();
        }

    }

?>