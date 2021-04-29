<?php
    $db_cred_file = fopen(".db_credentials", "r");
    if ($db_cred_file == false) 
        die("O arquivo .db_credentials não existe!"."\n");
        
    $env = array(
        "USERNAME" => "",
        "PASSWORD" => "",
        "DBMS"     => "",
        "DBNAME"   => "",
        "HOST"     => ""
    );

    while($dt = fscanf($db_cred_file, "%s %s\n"))
        $env[$dt[0]] = $dt[1];
    
    
    fclose($db_cred_file);

    // return database login data
    echo json_encode($env), "\n";

?>