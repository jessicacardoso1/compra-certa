<?php

    namespace compra_certa\database\conn;
    use compra_certa\database\conn\Get_DB_Credentials;
    use PDO, PDOException;

    class Conn{

        public function connect(){
            try{
                $cred = new Get_DB_Credentials();
                $str_cred = $cred->get_credentials();

                return new PDO($str_cred[0], $str_cred[1], $str_cred[2]);

            }catch(PDOException $e){
                echo "Error: ".$e->getMessage();

            }
        }

        public function close(){
            return null;
        }
        
    }

?>
