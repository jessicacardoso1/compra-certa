<?php

    namespace compra_certa\routes;

    class Despachante extends Rota{

        #Atributos
        private $metodo;
        private $parametro = [];
        private $objeto_controller;

        #Método Construtor
        public function __construct(){
            $this->addControlador();
        }

        private function addControlador(){
            $rota_controller = $this->getRota();
            #tratamento na rota
            $rota_controller = str_replace("/controlador", "\\controlador", $rota_controller);
            $name_space ="compra_certa\\controller\\{$rota_controller}";
            #echo 'namespace: '.$name_space.'<br>';

            $this->objeto_controller = new $name_space;

            if(isset($this->parseUrl()[1])){
                $this->addMetodo();
            }
        }

        #Método de adição de método do controller
        private function addMetodo(){
            if(method_exists($this->objeto_controller, $this->parseUrl()[1])){
                $this->metodo = "{$this->parseUrl()[1]}";
                $this->addParametro();
                call_user_func_array([$this->objeto_controller, $this->metodo], $this->parametro);
            }
        }

        private function addParametro(){
            $cont_array = count($this->parseUrl());

            if($cont_array > 2){
                foreach($this->parseUrl() as $key => $value){
                    if($key > 1){
                        $this->parametro += [$key => $value];
                    }
                }
            }
        }

    }
?>