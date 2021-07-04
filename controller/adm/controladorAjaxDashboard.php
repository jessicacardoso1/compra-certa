<?php

    namespace compra_certa\controller\adm;
    use compra_certa\controller\Controlador;

    class ControladorAjaxDashboard extends Controlador{
        
        protected $_compra;
        protected $_categoria;
        protected $_produto;

        public function __construct(){
            $this->_compra = new \compra_certa\model\compra\Compra;
            $this->_categoria = new \compra_certa\model\produto\Categoria;
            $this->_produto = new \compra_certa\model\produto\Produto;
        }

        public function overview_receita(){
            $overview_receita = $this->_compra->overviewReceita();

            $overview_receita = json_encode($overview_receita);
            ob_clean();
            echo $overview_receita;
            die();
        }

        public function categorias_mais_vendidas(){
            $categorias = $this->_categoria->getCategoriasMaisVendidas();

            $categorias = json_encode($categorias);
            ob_clean();
            echo $categorias;
            die();
        }

        public function top_8_produtos_mais_vendidos(){
            $top_8 = $this->_produto->top8ProdutosMaisVendidos();

            $top_8 = json_encode($top_8);
            ob_clean();
            echo $top_8;
            die();
        }

        public function historico_vendas_por_ano_produto_mais_vendido(){
            $ano = getDatetimeNow()->format('Y');

            $historico = $this->_produto->historicoVendasPorAnoProdutoMaisVendido($ano);

            $historico = json_encode($historico);
            ob_clean();
            echo $historico;
            die();
        }

        public function produto_mais_vendido_relativo_as_vendas_totais(){
            $ano = getDatetimeNow()->format('Y');

            $porc_vendas = $this->_produto->qntProdutoMaisVendidoRelativoAsVendasTotais($ano);
            $vendas = [$porc_vendas, 100 - $porc_vendas];

            $vendas = json_encode($vendas);
            ob_clean();
            echo $vendas;
            die();
        }

    }

?>