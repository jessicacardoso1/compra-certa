<?php 

    namespace compra_certa\controller\compra;
    use compra_certa\controller\Controlador;
    use compra_certa\model\compra\compra;
    use compra_certa\model\pessoa\Cliente;
    use compra_certa\model\compra\avaliacao;
    use compra_certa\model\produto\item;

    class ControladorCompra extends Controlador{

        private $compra;
        private $cliente;
        private $avaliacao;

        public function __construct(){
            if(!$_SESSION['usuario_logado']){
                header('location: '.DIRACTION);

                return;
            }

            $this->compra= new Compra();
            $this->cliente = new Cliente();
            $this->avaliacao = new Avaliacao();
            $this->cliente->setCpf($_SESSION['usuario_logado']);
        }

        public function listarCompras(){
            $listaCompras = $this->compra->listarCompras($this->cliente);
            $this->carregarNavbar();
            $this->view("","minhas_compras", $listaCompras);
        }
        //Exibir a tela de avaliar
        public function avaliar($id_compra){
            $this->carregarNavbar();
            $this->view("", "avaliar_compras",$id_compra);
        }
        //Enviar a avaliação
        public function avaliarCompra(){
            $this->compra->setCodigo($_POST["idCompra"]);
            $this->avaliacao->setEstrelas($_POST["rating"]);
            $this->avaliacao->setTitulo($_POST["titulo"]);
            $this->avaliacao->setComentario($_POST["comentario"]);
            $this->compra->setAvaliacao($this->avaliacao);
            $this->compra->avaliarCompra($this->compra);
            header('location: '.DIRACTION.'compra/listarCompras');
        }

        public function rastrearCompra($id_compra){
            $this->compra->setCodigo($id_compra);
            $rastrearCompra = $this->compra->rastrearCompra($this->compra);
            $this->carregarNavbar();
            $this->view("", "rastrear_compras", $rastrearCompra);
        }

        public function pagamento(){
            if(!$_SESSION['usuario_logado']){
                header('location: '.DIRACTION.'login');

                return;
            }

            // enviando o carrinho para a tela, para fazer o modal com o resumo da compra
            $carrinho = new \compra_certa\model\produto\Carrinho;
            $dados_tela[] = $carrinho->getItens();
            $dados_tela[] = $carrinho->getTotal();
            $dados_tela[] = $carrinho->getQntProdutos();

            // enviando o endereço 
            $endereco = new \compra_certa\model\endereco\Endereco;
            $lista_enderecos = $endereco->getEnderecosViaCpf($_SESSION['usuario_logado']);
            if(isset($_POST['indice_endereco'])){ // mudar endereço da compra
                $aux = $lista_enderecos[0];
                $lista_enderecos[0] = $lista_enderecos[$_POST['indice_endereco']];
                $lista_enderecos[$_POST['indice_endereco']] = $aux;
            }
            $dados_tela[] = $lista_enderecos;

            $this->carregarNavbar();
            $this->view("", "finalizar_compra", $dados_tela);
        }

        public function finalizar(){
            $carrinho = new \compra_certa\model\produto\Carrinho;
            $endereco = new \compra_certa\model\endereco\Endereco;
            
            // vinculando o endereço a compra
            $endereco->setCodigo($_POST['endereco']);
            $this->compra->setEndereco($endereco);
            $this->compra->setVal_total($carrinho->getTotal());
            $id_compra = $this->compra->inserirCompra($this->compra); 
            $this->compra->setCodigo($id_compra);
            
            $itenscarrinho = $carrinho->getItens();
            for($i=0; $i<count($itenscarrinho);$i++){
                $item = new Item();
                $id_item = $item->inserirItem($itenscarrinho[$i]);
                $item->setCodigo($id_item);
                $this->compra->vincularCompraHasItem($this->compra, $item);
            }
            
            $this->cliente->setCpf($_SESSION['usuario_logado']);
            $this->compra->vincularClienteHasCompra($this->cliente, $this->compra);
            
            $carrinho->limparCarrinho();

            // cria datasetores e vincula compra recém realizada ao setor de preparação
            $id_datasetores = $this->compra->inserirDataSetores(1);
            $this->compra->inserirCompraHasDataSetores($this->compra, $id_datasetores);
            header('location: '.DIRACTION);
        }

        public function comprarNovamente(){
            $this->compra->setCodigo($_POST['id_compra']);

            $lista_itens = $this->compra->comprarNovamente();

            $carrinho = new \compra_certa\model\produto\Carrinho;
            foreach($lista_itens as $l){
                $carrinho->inserirItem($l);
            }

            echo "<script type='text/javascript'>window.top.location='".DIRACTION."carrinho/meuCarrinho';</script>"; exit;
        }

    }

?>
