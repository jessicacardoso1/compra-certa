<?php

    namespace compra_certa\database\produto;
    use compra_certa\database\conn\Conn;
    use PDO, PDOException;
    
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
                    "select p.nome as pn, p.preco as pp, p.nome_imagem as pni, c.nome as cn, p.descricao as d
                from (compra_certa.categoria as c join compra_certa.produto as p on c.id_categoria = p.id_categoria)
                where p.id_produto=:id_produto"
                );

                $sql->bindParam("id_produto", $id_produto);
                
                $sql->execute();

                $produtos = array();
                while($linha = $sql->fetch(PDO::FETCH_ASSOC)){
                    $arr = array(
                       
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

        

    }

?>