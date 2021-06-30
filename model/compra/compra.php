<?php 
     namespace compra_certa\model\compra;
     use compra_certa\database\compra\CompraDAO;

    class Compra{

        private $codigo;
        private $itens;
        private $cliente;
        private $numero;
        private $val_total;
        private $setor;
        private $data;
        private $endereco;
        private $avaliacao;
        private $data_setores;

        public function gerar_num_compra(){
            
        }

        public function listarCompras($cliente){
            $dao = new CompraDAO();
            
            return $dao->listarCompras($cliente);
        }

        public function listarComprasParaFuncionarios($setor){
            $dao = new CompraDAO();

            $lista_compras = $dao->listarComprasParaFuncionarios($setor);
            
            $lista_compras_por_id = array();
            for($i = 0; $i < count($lista_compras); $i++){
                if(!array_key_exists($lista_compras[$i]['ID_COMPRA'], $lista_compras_por_id)){
                    $arr = array(
                        $lista_compras[$i]['ID_COMPRA'] => array($lista_compras[$i]['NOME_PRODUTO'], $lista_compras[$i]['QUANTIDADE'])
                    );

                    $lista_compras_por_id[$lista_compras[$i]['ID_COMPRA']] = $arr;
                }
                else
                    array_push($lista_compras_por_id[$lista_compras[$i]['ID_COMPRA']], array($lista_compras[$i]['NOME_PRODUTO'], $lista_compras[$i]['QUANTIDADE']));
            }
            
            return $lista_compras_por_id;
        }

        public function inserirDataSetores($_setor){
            $dao = new CompraDAO();
            
            return $dao->inserirDataSetores($_setor);
        }

        public function inserirCompraHasDataSetores($_compra, $_id_data_setores){
            $dao = new CompraDAO();
            
            return $dao->inserirCompraHasDataSetores($_compra, $_id_data_setores);
        }

        public function editarEndereco(){
            
        }

        public function concluirCompra(){
            
        }
        public function avaliarCompra($compra){
            $dao = new CompraDAO;

            return $dao->avaliarCompra($compra);
            
        }
        public function rastrearCompra($compra){
            $dao = new CompraDAO;

            return $dao->rastrearCompra($compra);
            
        }

        //getters and setters
        public function getCodigo()
        {
            return $this->codigo;
        }

    
        public function setCodigo($codigo)
        {
            $this->codigo = $codigo;
        }

        public function getItens()
        {
            return $this->itens;
        }

    
        public function setItens($itens)
        {
            $this->itens = $itens;
        }

    
        public function getCliente()
        {
            return $this->cliente;
        }


        public function setCliente($cliente)
        {
            $this->cliente = $cliente;
        }

        
        public function getNumero()
        {
            return $this->numero;
        }

    
        public function setNumero($numero)
        {
            $this->numero = $numero;
        }

        
        public function getVal_total()
        {
            return $this->val_total;
        }

        
        public function setVal_total($val_total)
        {
            $this->val_total = $val_total;
        }

        
        public function getSetor()
        {
            return $this->setor;
        }

        
        public function setSetor($setor)
        {
            $this->setor = $setor;
        }

        
        public function getData()
        {
            return $this->data;
        }

        
        public function setData($data)
        {
            $this->data = $data;
        }

    
        public function getEndereco()
        {
            return $this->endereco;
        }

        
        public function setEndereco($endereco)
        {
            $this->endereco = $endereco;
        }

        public function getDataSetores()
        {
            return $this->data_setores;
        }

    
        public function setDataSetores($data_setores)
        {
            $this->data_setores = $data_setores;
        }

        public function getAvaliacao()
        {
                return $this->avaliacao;
        }

        public function setAvaliacao($avaliacao)
        {
                $this->avaliacao = $avaliacao;
        }
        
    }
?>