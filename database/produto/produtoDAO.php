<?php

    namespace compra_certa\database\produto;
    use compra_certa\database\conn\Conn;
    use compra_certa\model\produto\Produto;
    use PDO, PDOException;
    use DateTime;
    
    class ProdutoDAO{

        public function consultarProdutos($_produto){
            try{
                $conn = new Conn();
                $pdo = $conn->connect();

                $str_sql = "select p.id_produto as id, p.nome as pn, p.preco as pp, p.nome_imagem as pni, c.nome as cn, p.disponivel as pd
                from (compra_certa.categoria as c join compra_certa.produto as p on c.id_categoria = p.id_categoria)
                where p.nome like '%:nome_produto%' or c.nome like '%:nome_produto%'";
                $str_sql = str_replace(":nome_produto", $_produto->getNome(), $str_sql);
                
                $sql = $pdo->prepare($str_sql);
                
                $sql->execute();

                $produtos = array();
                while($linha = $sql->fetch(PDO::FETCH_ASSOC)){
                    $arr = array(
                        "ID"              => $linha['id'],
                        "NOME_PRODUTO"    => $linha['pn'],
                        "PRECO"           => $linha['pp'],
                        "IMG"             => $linha['pni'],
                        "NOME_CATEGORIA"  => $linha['cn']
                    );

                    array_push($produtos, $arr);
                }
                
                $pdo = $conn->close();

                return $produtos;
            }
            catch(PDOException $e){
                return array();
            }
        }

        public function getPromocao($_id_promocao){
            try{
                $conn = new Conn();
                $pdo = $conn->connect();

                $sql = $pdo->prepare("
                    select p.id_produto as id, pr.nome as n, pp.novo_valor as nv, p.nome as pn, p.preco as p, p.nome_imagem as ni
                    from
                    compra_certa.promocao as pr join compra_certa.promocao_produto as pp on pr.id_promocao = pp.id_promocao
                    join
                    compra_certa.produto as p on p.id_produto = pp.id_produto
                    where pr.id_promocao = :id_promocao;
                ");

                $sql->bindParam("id_promocao", $_id_promocao);
            
                $sql->execute();

                $promocao = array();
                while($linha = $sql->fetch(PDO::FETCH_ASSOC)){
                    $arr = array(
                        "ID_PRODUTO"         => $linha['id'],
                        "NOME_PROMOCAO"      => $linha['n'],
                        "PRECO_NOVO_PRODUTO" => $linha['nv'],
                        "NOME_PRODUTO"       => $linha['pn'],
                        "PRECO"              => $linha['p'],
                        "IMG"                => $linha['ni']
                    );

                    array_push($promocao, $arr);
                }
                
                $pdo = $conn->close();

                return $promocao;
            }
            catch(PDOException $e){
                return array();
            }
        }

        public function consultarProdutoViaID($id_produto){
            try{
                $conn = new Conn();
                $pdo = $conn->connect();
                
                $sql = $pdo->prepare( 
                    "select p.id_produto as id, p.nome as pn, p.preco as pp, p.nome_imagem as pni, c.nome as cn, p.descricao as d
                from (compra_certa.categoria as c join compra_certa.produto as p on c.id_categoria = p.id_categoria)
                where p.id_produto=:id_produto"
                );

                $sql->bindParam("id_produto", $id_produto);
                
                $sql->execute();

                $produtos = array();
                while($linha = $sql->fetch(PDO::FETCH_ASSOC)){
                    $arr = array(
                        "ID"              => $linha['id'],
                        "NOME_PRODUTO"    => $linha['pn'],
                        "PRECO"           => $linha['pp'],
                        "IMG"             => $linha['pni'],
                        "NOME_CATEGORIA"  => $linha['cn'],
                        "DESCRICAO"       => $linha['d']
                    );

                    array_push($produtos, $arr);
                }
                
                $pdo = $conn->close();

                return $produtos;
            }
            catch(PDOException $e){
                return array();
            }
        }

        
        // métodos utilizados no dashboard...
        public function getProdutoMaisVendido(){
            try{
                $conn = new Conn();
                $pdo = $conn->connect();
                
                $sql = $pdo->prepare("
                    SELECT item.produto_id_produto as id_produto, produto.nome_imagem as img, produto.nome as nome FROM compra_certa.item
                    LEFT JOIN compra_certa.produto on produto.id_produto = item.produto_id_produto
                    GROUP BY produto_id_produto
                    ORDER BY SUM(quantidade) DESC
                    LIMIT 1;
                ");
                
                $sql->execute();
                
                $linha = $sql->fetch(PDO::FETCH_ASSOC);

                $produto = new Produto;
                $produto->setCodigo($linha['id_produto']);
                $produto->setNome($linha['nome']);
                $produto->setImg($linha['img']);
               
                return $produto;
            }
            catch(PDOException $e){
                echo $e;
                return array();
            }
        }

        public function historicoVendasPorAnoProdutoMaisVendido($ano){
            try{
                $conn = new Conn();
                $pdo = $conn->connect();
                
                $sql = $pdo->prepare("
                    SELECT compra.data as data, SUM(item.quantidade) as qnt
                    FROM compra_certa.compra 
                    INNER JOIN compra_certa.cliente_has_compra
                    ON cliente_has_compra.id_compra = compra.id_compra
                    INNER JOIN compra_certa.compra_has_item 
                    ON compra_has_item.id_compra = compra.id_compra
                    INNER JOIN compra_certa.item
                    ON item.id_item = compra_has_item.id_item
                    INNER JOIN compra_certa.produto
                    ON produto_id_produto = item.produto_id_produto
                    WHERE produto.id_produto = (SELECT produto.id_produto FROM compra_certa.item
                    LEFT JOIN compra_certa.produto on produto.id_produto = item.produto_id_produto
                    GROUP BY produto_id_produto
                    ORDER BY SUM(quantidade) DESC
                    LIMIT 1)
                    AND YEAR(data) = :_ano
                    GROUP BY compra.data;
                ");
                
                $sql->bindParam(":_ano", $ano);

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

                while(list($data, $quantidade) = $sql->fetch(PDO::FETCH_NUM)){
                    $dt = new DateTime($data);

                    $compras_por_mes[$dt->format('m')] += $quantidade;
                }
                
                return $compras_por_mes;
            }
            catch(PDOException $e){
                echo $e;
                return array();
            }
        }

        public function getQntTotalVendas($ano){
            try{
                $conn = new Conn();
                $pdo = $conn->connect();
                
                $sql = $pdo->prepare("
                    select count(compra.id_compra) as qnt from compra_certa.compra
                    where year(compra.data) = :_ano;
                ");
                
                $sql->bindParam(":_ano", $ano);

                $sql->execute();
                
                $linha = $sql->fetch(PDO::FETCH_ASSOC);
                $qnt = $linha['qnt'];
                
                return $qnt;
            }
            catch(PDOException $e){
                echo $e;
                return array();
            }
        }

        public function getDiffProdutoMaisVendidoRelativoVendasTotais($produto, $ano){
            try{
                $conn = new Conn();
                $pdo = $conn->connect();
                
                $sql = $pdo->prepare("
                    select count(compra.id_compra) as qnt from compra_certa.compra
                    join compra_certa.compra_has_item on compra_has_item.id_compra = compra.id_compra
                    join compra_certa.item on item.id_item = compra_has_item.id_item
                    where item.produto_id_produto = :_id_produto and year(compra.data) = :_ano;
                ");
                
                $sql->bindValue(":_id_produto", $produto->getCodigo());
                $sql->bindParam(":_ano", $ano);

                $sql->execute();
                
                $linha = $sql->fetch(PDO::FETCH_ASSOC);
                $qnt = $linha['qnt'];
                
                return $qnt;
            }
            catch(PDOException $e){
                echo $e;
                return array();
            }
        }

        public function top8ProdutosMaisVendidos(){
            try{
                $conn = new Conn();
                $pdo = $conn->connect();
                
                $sql = $pdo->prepare("
                    SELECT produto.nome as nome, sum(quantidade) as qtd FROM compra_certa.item
                    LEFT JOIN compra_certa.produto on produto.id_produto = item.produto_id_produto
                    GROUP BY produto_id_produto
                    ORDER BY SUM(quantidade) DESC
                    LIMIT 8;
                ");
                
                $sql->execute();
                
                $produtos = array();
                while($linha = $sql->fetch(PDO::FETCH_ASSOC)){
                    $arr = array(
                        "NOME_PRODUTO"   => $linha['nome'],
                        "QUANTIDADE"   => $linha['qtd']
                    );

                    $produtos[] = $arr;
                }
                
                return $produtos;
            }
            catch(PDOException $e){
                echo $e;
                return array();
            }
        }

    }

?>