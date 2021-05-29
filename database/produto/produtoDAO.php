<?php

    namespace compra_certa\database\produto;
    use compra_certa\database\conn\Conn;
    use PDO, PDOException;

    class ProdutoDAO{

        public function consultarProdutos($_produto){
            try{
                $conn = new Conn();
                $pdo = $conn->connect();

                $str_sql = "select p.nome as pn, p.preco as pp, p.nome_imagem as pni, c.nome as cn, p.disponivel as pd
                from (compra_certa.categoria as c join compra_certa.produto as p on c.id_categoria = p.id_categoria)
                where p.nome like '%:nome_produto%' or c.nome like '%:nome_produto%'";
                $str_sql = str_replace(":nome_produto", $_produto->getNome(), $str_sql);
                
                $sql = $pdo->prepare($str_sql);
                
                $sql->execute();

                $produtos = array();
                while($linha = $sql->fetch(PDO::FETCH_ASSOC)){
                    $arr = array(
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

    }

?>