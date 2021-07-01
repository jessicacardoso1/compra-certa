<?php

    namespace compra_certa\database\pessoa;
    use compra_certa\database\conn\Conn;
    use PDO, PDOException;

    class ClienteDAO{
        
        public function efetuarCadastro($_cliente){
            try{
                $conn = new Conn();
                $pdo = $conn->connect();
                
                $sql = $pdo->prepare("insert into compra_certa.cliente (cpf, senha, email, ativo) values (:cpf, :senha, :email, :ativo)");
                
                $sql->bindValue("cpf", $_cliente->getCpf());
                $sql->bindValue("email", $_cliente->getEmail());
                $sql->bindValue("ativo", $_cliente->getAtivo());
                $sql->bindValue("senha", $_cliente->getSenha());
                
                $sql->execute();

                $pdo = $conn->close();
                
                return true;

            }
            catch(PDOException $e){
                echo $e;
                return false;
            }
            
        }// FIM método


        /** Métodos úteis **/
        public function getNumTotalClientes(){
            try{
                $conn = new Conn();
                $pdo = $conn->connect();

                $sql = $pdo->prepare("
                    select COUNT(cpf) 
                    from compra_certa.cliente;
                ");

                $sql->execute();
                
                $pdo = $conn->close();

                $linha = $sql->fetch(PDO::FETCH_ASSOC);

                return $linha['COUNT(cpf)'];

            }
            catch(PDOException $e){
                echo $e;
                return false;
            }
        }// FIM método

        public function getNumTotalClientesAtivos(){
            try{
                $conn = new Conn();
                $pdo = $conn->connect();
                
                $sql = $pdo->prepare("
                    select COUNT(cpf) 
                    from compra_certa.cliente
                    where ativo = 1;
                ");

                $sql->execute();
                
                $pdo = $conn->close();

                $linha = $sql->fetch(PDO::FETCH_ASSOC);

                return $linha['COUNT(cpf)'];

            }
            catch(PDOException $e){
                echo $e;
                return false;
            }
        }// FIM método

        public function editarDados($cliente){
            try{
                $conn = new Conn();
                $pdo = $conn->connect();
                
                $sql = $pdo->prepare(
                "UPDATE compra_certa.cliente 
                SET email = :email, senha = :senha 
                WHERE cpf = :cpf;"
                );
                $sql->bindValue(':email',$cliente->getEmail());
                $sql->bindValue(':cpf',$cliente->getCpf());
                $sql->bindValue(':senha',$cliente->getSenha());

                $sql->execute();
                
                $pdo = $conn->close();

            }
            catch(PDOException $e){
                echo $e;
                return false;
            }
        }
        
        public function getDadosUser($cliente){
            try{
                $conn = new Conn();
                $pdo = $conn->connect();
                
                $sql = $pdo->prepare("
                    select email, senha 
                    from compra_certa.cliente
                    where cpf = :cpf;
                ");
                $sql->bindValue(":cpf", $cliente->getCpf());

                $sql->execute();
                
                $pdo = $conn->close();

                $linha = $sql->fetch(PDO::FETCH_ASSOC);

                return $linha;

            }
            catch(PDOException $e){
                echo $e;
                return false;
            }
        }

        public function clientesMaisCompram(){
            try{
                $conn = new Conn();
                $pdo = $conn->connect();
                
                $sql = $pdo->prepare("
                    SELECT cliente.cpf, cidade.nome as cidade, estado.nome as estado, sum(produto.preco) as total_compras
                    FROM compra_certa.cliente
                    INNER JOIN cliente_has_endereco
                    ON cliente_has_endereco.cpf = cliente.cpf
                    INNER JOIN endereco
                    ON cliente_has_endereco.id_endereco = endereco.id_endereco
                    INNER JOIN cidade
                    ON cidade.id_cidade = endereco.id_cidade
                    INNER JOIN estado
                    on estado.id_estado = cidade.estado_id_estado
                    INNER JOIN compra_certa.cliente_has_compra
                    ON cliente_has_compra.cpf = cliente.cpf
                    INNER JOIN compra_certa.compra 
                    ON compra.id_compra = cliente_has_compra.id_compra
                    INNER JOIN compra_certa.compra_has_item 
                    ON compra_has_item.id_compra = compra.id_compra
                    INNER JOIN compra_certa.item
                    ON item.id_item = compra_has_item.id_item
                    INNER JOIN compra_certa.produto
                    ON produto.id_produto = item.produto_id_produto
                    GROUP BY cliente_has_compra.cpf
                    ORDER BY SUM(quantidade) DESC;
                ");
                $sql->execute();

                $clienteMaisCompram = array(); 
                while($linha = $sql->fetch(PDO::FETCH_ASSOC)){
                    $arr = array(
                        "CPF"      => $linha['cliente.cpf'],
                        "CIDADE"      => $linha['cidade'],
                        "ESTADO"           => $linha['estado'],
                        "TOTAL_COMPRAS"   => $linha['total_compras']                     
                    );

                    array_push($clienteMaisCompram, $arr);
                }
                $pdo = $conn->close();

                $linha = $sql->fetch(PDO::FETCH_ASSOC);

                return $linha;

            }
            catch(PDOException $e){
                echo $e;
                return false;
            }
        }

    }

?>
