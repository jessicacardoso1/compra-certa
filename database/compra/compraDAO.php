<?php

    namespace compra_certa\database\compra;
    use compra_certa\database\conn\Conn;
    use PDO, PDOException;
    use DateTime;
    use compra_certa\model\compra\Compra;
    use compra_certa\model\endereco\Cidade;
    use compra_certa\model\endereco\Endereco;
    use compra_certa\model\produto\Item;
    use compra_certa\model\produto\Produto;

    class CompraDAO{

        public function inserirCompra($compra){
            try{
                $conn = new Conn();
                $pdo = $conn->connect();
                
                $sql = $pdo->prepare("
                    insert into compra_certa.compra
                    (valor_total, data, id_endereco) values
                    (:_valor_total, :_data, :_id_endereco)
                ");
                
                $sql->bindValue(":_valor_total", $compra->getVal_total());
                $sql->bindValue(":_data", getDatetimeNow()->format('Y\-m\-d\ H:i:s'));
                $sql->bindValue(":_id_endereco", $compra->getEndereco()->getCodigo());
            
                
                $sql->execute();

                $last_id = $pdo->lastInsertID();

                $pdo = $conn->close();
                
                return $last_id;

            }
            catch(PDOException $e){
                echo $e;
                return false;
            }
        }

        public function inserirItem($item){
            try{
                $conn = new Conn();
                $pdo = $conn->connect();
                
                $sql = $pdo->prepare("
                    insert into compra_certa.item
                    (produto_id_produto, quantidade) values
                    (:_produto_id_produto, :_quantidade)
                ");
                
                $sql->bindValue(":_produto_id_produto", $item->getProduto()->getCodigo());
                $sql->bindValue(":_quantidade", $item->getQuantidade());
                
                $sql->execute();

                $last_id = $pdo->lastInsertID();

                $pdo = $conn->close();
                
                return $last_id;

            }
            catch(PDOException $e){
                echo $e;
                return false;
            }

        }

        public function vincularCompraHasItem($compra, $item){
            try{
                $conn = new Conn();
                $pdo = $conn->connect();
                
                $sql = $pdo->prepare("
                    insert into compra_certa.compra_has_item
                    (id_compra, id_item) values
                    (:_id_compra, :_id_item)
                ");
                
                $sql->bindValue(":_id_compra", $compra->getCodigo());
                $sql->bindValue(":_id_item", $item->getCodigo());
                
                $sql->execute();

                $last_id = $pdo->lastInsertID();

                $pdo = $conn->close();
                
                return $last_id;

            }
            catch(PDOException $e){
                echo $e;
                return false;
            }

        }

        public function vincularClienteHasCompra($cliente, $compra){

            try{
                $conn = new Conn();
                $pdo = $conn->connect();
                
                $sql = $pdo->prepare("
                    insert into compra_certa.cliente_has_compra
                    (cpf, id_compra) values
                    (:_cpf, :_id_compra)
                ");
                
                $sql->bindValue(":_cpf", $cliente->getCpf());
                $sql->bindValue(":_id_compra", $compra->getCodigo());
                
                $sql->execute();

                $last_id = $pdo->lastInsertID();

                $pdo = $conn->close();
                
                return $last_id;

            }
            catch(PDOException $e){
                echo $e;
                return false;
            }

        }

        public function listarCompras($_cliente){
            try{
                $conn = new Conn();
                $pdo = $conn->connect();

                $sql = $pdo->prepare("
                    SELECT compra.id_compra as id, compra.valor_total as val_total, compra.data as data, produto.nome as nome_p, produto.preco as preco_p, produto.nome_imagem as img, item.quantidade as qtd
                    FROM compra_certa.compra 
                    INNER JOIN compra_certa.cliente_has_compra
                    ON cliente_has_compra.id_compra = compra.id_compra
                    INNER JOIN compra_certa.compra_has_item 
                    ON compra_has_item.id_compra = compra.id_compra
                    INNER JOIN compra_certa.item
                    ON item.id_item = compra_has_item.id_item
                    INNER JOIN compra_certa.produto
                    ON produto.id_produto = item.produto_id_produto
                    WHERE cliente_has_compra.cpf = :cpf
                    ORDER BY compra.data DESC;
                ");

                $sql->bindValue("cpf", $_cliente->getCPF());
            
                $sql->execute();

                $compra = array();
                while($linha = $sql->fetch(PDO::FETCH_ASSOC)){
                    $arr = array(
                        "ID_COMPRA"      => $linha['id'],
                        "VAL_TOTAL"      => $linha['val_total'],
                        "DATA"           => $linha['data'],
                        "NOME_PRODUTO"   => $linha['nome_p'],
                        "PRECO_PRODUTO"  => $linha['preco_p'],
                        "IMAGEM_PRODUTO" => $linha['img'],
                        "QUANTIDADE"     => $linha['qtd'],                         
                    );

                    array_push($compra, $arr);
                }
                
                $pdo = $conn->close();

                return $compra;
            }
            catch(PDOException $e){
                return array();
            }
        }

        public function listarComprasParaFuncionarios($setor){
            try{
                $conn = new Conn();
                $pdo = $conn->connect();

                $sql = $pdo->prepare("
                    select produto.nome as nome, item.quantidade as quantidade, compra_has_item.id_compra as id_compra
                    from compra_certa.produto
                    join compra_certa.item on produto.id_produto = item.produto_id_produto
                    join compra_certa.compra_has_item on compra_has_item.id_item = item.id_item
                    join compra_certa.compra_has_data_setores on compra_has_data_setores.id_compra = compra_has_item.id_compra
                    join compra_certa.data_setores on data_setores.id_data_setores = compra_has_data_setores.id_data_setores
                    where data_setores.data in (
                        select MAX(data_setores.data) from compra_certa.data_setores
                        join compra_certa.compra_has_data_setores on compra_has_data_setores.id_data_setores = data_setores.id_data_setores
                        group by compra_has_data_setores.id_compra
                    ) and data_setores.setor = :setor
                    order by data_setores.data, produto.nome;
                ");

                $sql->bindParam(':setor', $setor);
            
                $sql->execute();

                $compras = array();
                while($linha = $sql->fetch(PDO::FETCH_ASSOC)){
                    $arr = array(
                        "ID_COMPRA"    => $linha['id_compra'],
                        "QUANTIDADE"   => $linha['quantidade'],
                        "NOME_PRODUTO" => $linha['nome']                 
                    );

                    array_push($compras, $arr);
                }
                
                $pdo = $conn->close();

                return $compras;
            }
            catch(PDOException $e){
                return array();
            }
        }

        public function inserirDataSetores($_setor){
            try{
                $conn = new Conn();
                $pdo = $conn->connect();
                
                $sql = $pdo->prepare("
                    insert into compra_certa.data_setores
                    (data, setor) values
                    (:hora_atual, :setor)
                ");
                
                $sql->bindValue("hora_atual", getDatetimeNow()->format('Y\-m\-d\ H:i:s'));
                $sql->bindParam(":setor", $_setor);
                
                $sql->execute();

                $last_id = $pdo->lastInsertID();

                $pdo = $conn->close();
                
                return $last_id;

            }
            catch(PDOException $e){
                echo $e;
                return false;
            }
        }// FIM método

        public function inserirCompraHasDataSetores($_compra, $_id_data_setores){
            try{
                $conn = new Conn();
                $pdo = $conn->connect();
                
                $sql = $pdo->prepare("
                    insert into compra_certa.compra_has_data_setores
                    (id_compra, id_data_setores) values
                    (:compra, :id_data_setores)
                ");
                
                $sql->bindValue("compra", $_compra->getCodigo());
                $sql->bindParam(":id_data_setores", $_id_data_setores);
                
                $sql->execute();

                $last_id = $pdo->lastInsertID();

                $pdo = $conn->close();
                
                return $last_id;

            }
            catch(PDOException $e){
                echo $e;
                return false;
            }
        }// FIM método

        public function avaliarCompra($_compra){
            try{
                $conn = new Conn();
                $pdo = $conn->connect();
                
                $sql = $pdo->prepare("
                    insert into compra_certa.avaliacao
                    (estrelas, titulo, comentario) values
                    (:_estrelas, :_titulo, :_comentario)
                ");

                $sql->bindValue(":_estrelas", $_compra->getAvaliacao()->getEstrelas());
                $sql->bindValue(":_titulo", $_compra->getAvaliacao()->getTitulo());
                $sql->bindValue(":_comentario", $_compra->getAvaliacao()->getComentario());
                
                $sql->execute();

                $last_id = $pdo->lastInsertID();

                $pdo = $conn->close();
                
                $this->vincularAvaliacaoCompra($_compra, $last_id);
                
                return $last_id;

            }
            catch(PDOException $e){
                echo $e;
                return false;
            }
        }// FIM método

        public function vincularAvaliacaoCompra($_compra, $_id_avaliacao){
            try{
                $conn = new Conn();
                $pdo = $conn->connect();
                
                $sql = $pdo->prepare("
                    UPDATE compra_certa.compra
                    SET id_avaliacao = :_id_avaliacao 
                    WHERE (id_compra = :_id_compra)
                ");

                $sql->bindParam(":_id_avaliacao", $_id_avaliacao);
                $sql->bindValue(":_id_compra", $_compra->getCodigo());

                $sql->execute();

                return True;
                
            }catch(PDOException $e){
                echo $e;
                return false;
            }
        }

        public function rastrearCompra($compra){
            try{
                $conn = new Conn();
                $pdo = $conn->connect();
                
                $sql = $pdo->prepare("
                    select data_setores.data as data, data_setores.setor as setor
                    from compra_certa.data_setores
                    join compra_certa.compra_has_data_setores on compra_has_data_setores.id_data_setores = data_setores.id_data_setores
                    where compra_has_data_setores.id_compra = :id
                    order by data_setores.data desc
                    limit 1;
                    
                ");
                
                $sql->bindValue("id", $compra->getCodigo());
                
                $sql->execute();

                $rastreio = array();
                while($linha = $sql->fetch(PDO::FETCH_ASSOC)){
                    $c = new Compra();
                    $c->setCodigo($compra->getCodigo());
                    $c->setData($linha['data']);
                    $c->setSetor($linha['setor']);
                    array_push($rastreio, $c);
                }
                
                $pdo = $conn->close();
                    
                return $rastreio;

            }
            catch(PDOException $e){
                echo $e;
                return false;
            }
        }//FIM função

        public function comprarNovamente($compra){
            try{
                $conn = new Conn();
                $pdo = $conn->connect();
                
                $sql = $pdo->prepare("
                    select item.id_item as id_item, item.produto_id_produto as id_produto, item.quantidade as quantidade, produto.preco as preco, produto.nome_imagem as img from compra_certa.compra_has_item
                    join compra_certa.item on item.id_item = compra_has_item.id_item
                    join compra_certa.produto on produto.id_produto = item.produto_id_produto
                    where id_compra = :_id_compra;
                    
                ");
                
                $sql->bindValue(":_id_compra", $compra->getCodigo());
                
                $sql->execute();

                $itens = array();
                while($linha = $sql->fetch(PDO::FETCH_ASSOC)){
                    $i = new Item();
                    $p = new Produto();
                    $p->setCodigo($linha['id_produto']);
                    $p->setPreco($linha['preco']);
                    $p->setImg($linha['img']);

                    $i->setCodigo($linha['id_item']);
                    $i->setProduto($p);
                    $i->setQuantidade($linha['quantidade']);

                    array_push($itens, $i);
                }
                
                $pdo = $conn->close();
                    
                return $itens;
            }
            catch(PDOException $e){
                echo $e;
                return false;
            }
        }

        public function getComprasPorSetor($setor){
            try{
                $conn = new Conn();
                $pdo = $conn->connect();
                
                $sql = $pdo->prepare("
                    select compra_has_data_setores.id_compra as id_compra from compra_certa.compra_has_data_setores
                    join compra_certa.data_setores on data_setores.id_data_setores = compra_has_data_setores.id_data_setores
                    where data_setores.data in (
                        select MAX(data_setores.data) from compra_certa.data_setores
                        join compra_certa.compra_has_data_setores on compra_has_data_setores.id_data_setores = data_setores.id_data_setores
                        group by compra_has_data_setores.id_compra
                    ) and data_setores.setor = :_setor
                    order by data_setores.data;
                    
                ");
                
                $sql->bindParam(":_setor", $setor);
                
                $sql->execute();

                $compras = array();
                while($linha = $sql->fetch(PDO::FETCH_ASSOC)){
                    $compra = new Compra();
                    $compra->setCodigo($linha['id_compra']);
                    $compra->setSetor($setor);
                    
                    array_push($compras, $compra);
                }
                
                $pdo = $conn->close();
                    
                return $compras;
            }
            catch(PDOException $e){
                echo $e;
                return false;
            }
        }

        public function dadosCompraSetorEntrega($compra){
            try{
                $conn = new Conn();
                $pdo = $conn->connect();
                
                $sql = $pdo->prepare("
                    select compra.id_compra as id_compra, compra.data as data, endereco.nome as nome_endereco, endereco.telefone as telefone, cidade.nome as nome_cidade from compra_certa.compra
                    join compra_certa.endereco on endereco.id_endereco = compra.id_endereco
                    join compra_certa.cidade on cidade.id_cidade = endereco.id_cidade
                    where id_compra = :_id_compra;
                ");
                
                $sql->bindValue(":_id_compra", $compra->getCodigo());
                
                $sql->execute();

                $compras = array();
                while($linha = $sql->fetch(PDO::FETCH_ASSOC)){
                    $c = new Compra();
                    $c->setCodigo($linha['id_compra']);
                    $c->setData($linha['data']);

                    $endereco = new Endereco();
                    $endereco-> setNome($linha['nome_endereco']);
                    $endereco->setTelefone($linha['telefone']);

                    $cidade = new Cidade();
                    $cidade->setNome($linha['nome_cidade']);

                    $endereco->setCidade($cidade);

                    $c->setEndereco($endereco);

                    $c->setSetor($compra->getSetor());
                    
                    array_push($compras, $c);
                }
                
                $pdo = $conn->close();
                    
                return $compras;
            }
            catch(PDOException $e){
                echo $e;
                return false;
            }
        }


        // métodos para popular o dashboard... 
        
        public function overviewReceita(){
            try{
                $conn = new Conn();
                $pdo = $conn->connect();
                
                $sql = $pdo->prepare("
                    SELECT valor_total, data FROM compra_certa.compra;
                ");
                
                $sql->execute();
                
                $compras_por_mes = array(
                    "01" => 0.,
                    "02" => 0.,
                    "03" => 0.,
                    "04" => 0.,
                    "05" => 0.,
                    "06" => 0.,
                    "07" => 0.,
                    "08" => 0.,
                    "09" => 0.,
                    "10" => 0.,
                    "11" => 0.,
                    "12" => 0.,
                );

                $sum_ano = 0.;
                while($linha = $sql->fetch(PDO::FETCH_ASSOC)){
                    $dt = new DateTime($linha['data']);

                    $compras_por_mes[$dt->format('m')] += $linha['valor_total'];
                    
                    $sum_ano += $linha['valor_total'];
                }
                
                return $compras_por_mes;
            }
            catch(PDOException $e){
                echo $e;
                return array();
            }
        }

        public function getReceitaAnual($ano){
            try{
                $conn = new Conn();
                $pdo = $conn->connect();
                
                $sql = "
                    select SUM(valor_total) as soma from compra_certa.compra
                    where year(data) = ':_ano';
                ";
                
                $sql = str_replace(":_ano", $ano, $sql);

                $sql = $pdo->prepare($sql);
                
                $sql->execute();

                $linha = $sql->fetch(PDO::FETCH_ASSOC);
                $receita = $linha['soma'];
                
                return $receita;
            }
            catch(PDOException $e){
                echo $e;
                return [];
            }
        }

        public function getReceitaMensal($mes, $ano){
            try{
                $conn = new Conn();
                $pdo = $conn->connect();
                
                $sql = "
                    select SUM(valor_total) as soma from compra_certa.compra
                    where month(data) = ':_mes' and year(data) = ':_ano';
                ";

                $sql = str_replace(":_mes", $mes, $sql);
                $sql = str_replace(":_ano", $ano, $sql);
                
                $sql = $pdo->prepare($sql);

                $sql->execute();
                
                $linha = $sql->fetch(PDO::FETCH_ASSOC);
                $produtos = $linha['soma'];
                
                return $produtos;
            }
            catch(PDOException $e){
                echo $e;
                return [];
            }
        }

        public function getComprasMes($mes, $ano){
            try{
                $conn = new Conn();
                $pdo = $conn->connect();
                
                $sql = "select count(id_compra) as soma from compra_certa.compra
                        where month(data) = ':_mes' and year(data) = ':_ano';
                ";
                
                $sql = str_replace(":_mes", $mes, $sql);
                $sql = str_replace(":_ano", $ano, $sql);

                $sql = $pdo->prepare($sql);
                
                $sql->execute();
                
                $linha = $sql->fetch(PDO::FETCH_ASSOC);
                $produtos = $linha['soma'];
                
                return $produtos;
            }
            catch(PDOException $e){
                echo $e;
                return [];
            }
        }

        public function tempoMedioPorSetor(){
            try{
                $conn = new Conn();
                $pdo = $conn->connect();
                
                $sql = $pdo->prepare("
                    select compra_has_data_setores.id_compra as id_compra, data_setores.setor as setor, data_setores.data as data FROM compra_certa.data_setores
                    join compra_certa.compra_has_data_setores on compra_has_data_setores.id_data_setores = data_setores.id_data_setores
                    where data_setores.setor in (1, 2, 3, 4)
                    order by compra_has_data_setores.id_compra;
                ");
                
                $sql->execute();

                $compras = array();
                while($linha = $sql->fetch(PDO::FETCH_ASSOC)){
                    $arr = array(
                        "ID_COMPRA" => $linha['id_compra'],
                        "SETOR" => $linha['setor'],
                        "DATA" => $linha['data']
                    );
                    
                    array_push($compras, $arr);
                }
                
                $pdo = $conn->close();
                    
                return $compras;
            }
            catch(PDOException $e){
                echo $e;
                return false;
            }
        }

    }

?>