<?php

    namespace compra_certa\routes;

    class Rota{

        private $rota;

        public function getRota(){
            $url = $this->parseUrl();
            $index = $url[0];

            $this->rota=array(
                ""         => "controladorHome",
                "home"     => "controladorHome",
                "404"      => "controlador404",
                "login"    => "pessoa/controladorLogin",
                "produto"  => "produto/controladorProduto",
                "cliente"  => "pessoa/controladorCliente",
                "carrinho" => "produto/controladorCarrinho",
                "compra"   => "compra/controladorCompra",
                "endereco" => "endereco/controladorEndereco",

                // rotas funcionário
                "funcionario-preparacao"            => "adm/controladorPreparacao",
                "funcionario-conferencia-embalagem" => "adm/controladorConfEmbalagem",
                "funcionario-entrega"               => "adm/controladorEntrega",
                "funcionario-rastrear"              => "adm/controladorRastrear",
                "funcionario-dashboard"             => "adm/controladorDashboard"
            );

            if(array_key_exists($index, $this->rota)){
                if(file_exists(dirname(__DIR__)."/controller/{$this->rota[$index]}.php"))
                    return $this->rota[$index];
                else
                    return "controlador404";
            }
            else
                return "controlador404";
        }

        public function parseUrl(){
            return explode("/", rtrim($_GET['url']), FILTER_SANITIZE_URL);
        }

    }

?>