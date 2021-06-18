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

        public function listarComprasParaSetorPreparacao(){
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
                    where data_setores.setor = 1
                    order by data_setores.data;
                ");
            
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
                
                $sql->bindValue("hora_atual", getDatetimeNow());
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
                    insert into compra_certa.data_setores
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

    }

?>