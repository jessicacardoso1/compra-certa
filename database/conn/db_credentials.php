<?php

    class Get_DB_Credentials{

        public function prs_credentials(){

            $file_dir = dirname(__DIR__);
            $file_dir = $file_dir."/conn/.db_credentials";

            $db_cred_file = fopen($file_dir, "r");
            if ($db_cred_file == null) 
                die("O arquivo .db_credentials não existe!"."\n");
                
            $cred = array(
                "USERNAME" => "",
                "PASSWORD" => "",
                "DBMS"     => "",
                "DBNAME"   => "",
                "HOST"     => ""
            );

            while($dt = fscanf($db_cred_file, "%s %s\n"))
                $cred[$dt[0]] = $dt[1];
            
            
            fclose($db_cred_file);

            // return database login data
            return $cred;
        }

        public function get_credentials(){

            $cred = $this->prs_credentials();
            
            $str_cred = array();
            $str_cred[0] = $cred["DBMS"].":"."dbname=".$cred["DBNAME"].";"."host=".$cred["HOST"];
            $str_cred[1] = $cred["USERNAME"];
            $str_cred[2] = $cred["PASSWORD"];

            return $str_cred;
        }

    }

?>
