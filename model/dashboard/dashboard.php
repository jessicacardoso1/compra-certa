<?php

    require("../../database/dao_dashboard/dashboardDAO.php");

    class Dashboard {

        public function get_receita_mes($mes_ref){
            $dao = new DashboardDAO();
            return $dao->get_receita_mes(1);

        }
        
        public function get_receita_anual(){}
        public function get_clientes_ativos(){}
        public function get_clientes(){}
        public function get_compras_mes(){}
        public function get_overview_receita(){}
        public function get_categorias_mais_vendidas(){}
        public function get_pedidos_por_setores(){}

    }

?>
