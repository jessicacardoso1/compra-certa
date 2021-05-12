<?php

    $url = (isset($_GET["url"])) ? $_GET["url"] : false;
    $url = strtolower($url);
    $url = array_filter(explode('/', $url));

    $file = (isset($url[0])) ? $url[0].".php" : "home.php";
    
    if(is_file($file))
        include $file;
    else
        include "404.php";

?>