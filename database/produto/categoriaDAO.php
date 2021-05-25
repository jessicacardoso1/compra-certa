<?php

    $DAO_dir = dirname(__DIR__);
    require $DAO_dir."/conn/conn.php";

    class CategoriaDAO{

        public function listarAll(){
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

    }

?>
