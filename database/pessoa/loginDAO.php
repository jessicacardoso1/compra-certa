<?php

    $DAO_dir = dirname(__DIR__);
    require $DAO_dir."/conn/conn.php";

    class LoginDAO{

        public function efetuarLogin($_login_obj){
            $conn = new Conn();
            $pdo = $conn->connect();
            
            $ust_tp = $_login_obj->getUsrTp();
            $column_tipo = "";
            if($ust_tp == "funcionario")
                $column_tipo = ", tipo";

            $sql = $pdo->prepare("select cpf, senha$column_tipo from compra_certa.$ust_tp where cpf = :cpf and senha = :senha");
            
            $sql->bindParam("cpf", $_login_obj->getCpf());
            $sql->bindParam("senha", $_login_obj->getSenha());
            
            $sql->execute();
            
            $pdo = $conn->close();

            if($sql->rowCount() == 0)
                return false;
            
            // retorno do tipo do funcionario (1, 2, 3, 4)
            if($ust_tp == "funcionario"){
                $usr_line = $sql->fetch(PDO::FETCH_ASSOC);
                return $usr_line['tipo'];
            }
            else
                return true;
            
        }

    }

?>
