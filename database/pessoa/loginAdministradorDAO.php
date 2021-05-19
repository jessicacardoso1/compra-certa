<?php

    $DAO_dir = dirname(__DIR__);
    require $DAO_dir."/conn/conn.php";

    class LoginAdministradorDAO{

        public function efetuarLogin($_cpf, $_senha){
            $conn = new Conn();
            $pdo = $conn->connect();
            $sql = $pdo->prepare("select cpf, senha from administrador where cpf = :cpf and senha = :senha");

            $sql->bindParam("cpf", $_cpf);
            $sql->bindParam("senha", $_senha);

            $sql->execute();

            $pdo = $conn->close();

            if($sql->rowCount() == 1)
                return true;
            else
                return false;
            
        }

    }

?>
