<?php

    namespace compra_certa\database\compra;
    use compra_certa\database\conn\Conn;
    use PDO, PDOException;
    
    class CompraDAO{


        public function listarCompras($_cliente){
            try{
                $conn = new Conn();
                $pdo = $conn->connect();

                $sql = $pdo->prepare("
                    SELECT compra.id_compra as id, compra.data as data, produto.nome as nome_p, produto.preco as preco_p, produto.nome_imagem as img, item.quantidade as qtd
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
                ");

                $sql->bindValue("cpf", $_cliente->getCPF());
            
                $sql->execute();

                $compra = array();
                while($linha = $sql->fetch(PDO::FETCH_ASSOC)){
                    $arr = array(
                        "ID_COMPRA"      => $linha['id'],
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


    }

?>