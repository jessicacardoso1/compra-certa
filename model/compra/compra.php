<?php 
    namespace compra_certa\model\compra;
    use compra_certa\database\compra\CompraDAO;
use DateTime;

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

        public function getComprasSetorEntrega(){
            # 3 -> setor entrega - envio
            # 4 -> setor entrega - em andamento
            # 5 -> setor entrega - entregue
            $fases_setores = [3, 4, 5];

            $lista_compras = array();
            for($i = 0; $i < count($fases_setores); $i++){
                $this->setor = $fases_setores[$i];

                $lista_compras = array_merge($lista_compras, $this->getComprasPorSetor());
            }
            
            $dados_compras = [];
            foreach($lista_compras as $l){
                $dados_compras[] = $l->dadosCompraSetorEntrega();
            }

            return $dados_compras;
        }

        public function getComprasPorSetor(){
            $dao = new CompraDAO();

            return $dao->getComprasPorSetor($this->setor);
        }

        public function dadosCompraSetorEntrega(){
            $dao = new CompraDAO();

            return $dao->dadosCompraSetorEntrega($this);
        }

        public function inserirDataSetores($_setor){
            $dao = new CompraDAO();
            
            return $dao->inserirDataSetores($_setor);
        }

        public function inserirCompraHasDataSetores($_compra, $_id_data_setores){
            $dao = new CompraDAO();
            
            return $dao->inserirCompraHasDataSetores($_compra, $_id_data_setores);
        }

        public function inserirCompra($compra){
            $dao = new CompraDAO();
            
            return $dao->inserirCompra($compra);
        }

        public function vincularCompraHasItem($compra, $item){
            $dao = new CompraDAO();
            
            return $dao->vincularCompraHasItem($compra, $item);
        }

        public function vincularClienteHasCompra($cliente, $compra){
            $dao = new CompraDAO();
            
            return $dao->vincularClienteHasCompra($cliente, $compra);
        }

        public function avaliarCompra($compra){
            $dao = new CompraDAO;

            return $dao->avaliarCompra($compra);
        }
        public function rastrearCompra($compra){
            $dao = new CompraDAO;

            return $dao->rastrearCompra($compra);
        }

        public function comprarNovamente(){
            $dao = new CompraDAO;

            return $dao->comprarNovamente($this);
        }


        // métodos utilizados no dashboard...
        public function overviewReceita(){
            $dao = new CompraDAO;

            return $dao->overviewReceita();            
        }

        public function getReceitaAnual($ano){
            $dao = new CompraDAO;

            return $dao->getReceitaAnual($ano);
        }

        public function getReceitaMensal($mes, $ano){
            $dao = new CompraDAO;

            return $dao->getReceitaMensal($mes, $ano);
        }

        public function getComprasMes($mes, $ano){
            $dao = new CompraDAO;

            return $dao->getComprasMes($mes, $ano);
        }

        public function getPedidosPorSetores(){
            $dao = new CompraDAO;

            $contador = 0;
            $pedidos = [];
            for($i = 1; $i <= 3; $i++){
                $compras = $dao->getComprasPorSetor($i);
                $pedidos[] = count($compras);
                
                $contador += count($compras);
            }

            for($i = 0; $i < count($pedidos); $i++)
                $pedidos[$i] = $pedidos[$i] / $contador * 100;

            return $pedidos;
        }

        public function tempoMedioPorSetor(){
            $dao = new CompraDAO;

            $data_setores = $dao->tempoMedioPorSetor();
            
            $array_tempos_setores = array('1' => 0.0, '2' => 0.0, '3' => 0.0);

            // contador quantidade de compras...
            $count = 0;
            for($i = 0; $i < count($data_setores) - 1; $i++){
                if($data_setores[$i]['ID_COMPRA'] != $data_setores[$i + 1]['ID_COMPRA']){
                    $count++;
                }
            }

            // calculando as diferenças de tempo para cada compra...
            for($i = 0; $i < count($data_setores) - 1; $i++){
                if($data_setores[$i]['SETOR'] != '4'){
                    $atual   = $data_setores[$i];
                    $proximo = $data_setores[$i + 1];

                    $hora_atual = strtotime($atual['DATA']);

                    if($atual['ID_COMPRA'] == $proximo['ID_COMPRA']){
                        $hora_proximo = strtotime($proximo['DATA']);
                    }
                    elseif($atual['ID_COMPRA'] != $proximo['ID_COMPRA'] && $atual['SETOR'] != '4'){
                        $hora_proximo = strtotime(getDatetimeNow()->format('Y-m-d H:i:s'));
                    }
                    
                    $diff_mins = ($hora_proximo - $hora_atual) / 60;
                    $array_tempos_setores[$atual['SETOR']] += $diff_mins;
                }
            }

            for($i = 1; $i <= count($array_tempos_setores); $i++){
                $array_tempos_setores[$i] = $array_tempos_setores[$i] / $count;
            }

            return $array_tempos_setores;
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