<?php

    namespace compra_certa\database\produto;
    use compra_certa\database\conn\Conn;
    use PDO, PDOException;

    class CategoriaDAO{

        public function listarTodas(){
            try{
                $conn = new Conn();
                $pdo = $conn->connect();
                
                $sql = $pdo->prepare("select nome from compra_certa.categoria");
            
                $sql->execute();

                $categorias = array();
                while($linha = $sql->fetch(PDO::FETCH_ASSOC))
                    array_push($categorias, $linha['nome']);
                
                $pdo = $conn->close();

                return $categorias;
            }
            catch(PDOException $e){
                return array();
            }
        }

        public function getQntProdutosPorCategoria(){
            try{
                $conn = new Conn();
                $pdo = $conn->connect();
                
                $sql = $pdo->prepare("
                    select c.nome as nm, COUNT(p.id_produto)
                    from(compra_certa.categoria as c left join compra_certa.produto as p on c.id_categoria = p.id_categoria)
                    group by c.id_categoria
                    order by c.nome
                ");
            
                $sql->execute();

                $categorias = array();
                while($linha = $sql->fetch(PDO::FETCH_ASSOC)){
                    $arr = array(
                        "NOME_CATEGORIA" => $linha['nm'],
                        "QNT_PRODUTOS"   => $linha['COUNT(p.id_produto)']
                    );

                    array_push($categorias, $arr);
                }
                
                $pdo = $conn->close();

                return $categorias;
            }
            catch(PDOException $e){
                return array();
            }
        }

        // métodos para o dashboard...
        public function getCategoriasMaisVendidas(){
            try{
                $conn = new Conn();
                $pdo = $conn->connect();
                
                $sql = $pdo->prepare("
                    SELECT categoria.nome as nome, sum(quantidade) as qtd FROM compra_certa.item
                    LEFT JOIN compra_certa.produto on produto.id_produto = item.produto_id_produto
                    LEFT JOIN compra_certa.categoria on categoria.id_categoria = produto.id_categoria
                    GROUP BY categoria.nome
                    ORDER BY SUM(quantidade) DESC;
                ");
                
                $sql->execute();
                
                $categorias = array();
                while($linha = $sql->fetch(PDO::FETCH_ASSOC)){
                    $arr = array(
                        "NOME" => $linha['nome'],
                        "QUANTIDADE"   => $linha['qtd']
                    );

                    $categorias[] = $arr;
                }
                
                return $categorias;
            }
            catch(PDOException $e){
                echo $e;
                return array();
            }
        }

    }

?>
