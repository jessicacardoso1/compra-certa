<?php

$home = "compra-certa/";
define('DIRPAGE',"http://{$_SERVER['HTTP_HOST']}/{$home}");
if(substr($_SERVER['DOCUMENT_ROOT'],-1)=='/'){ define('DIRREQ',"{$_SERVER['DOCUMENT_ROOT']}{$home}"); } else{ define('DIRREQ',"{$_SERVER['DOCUMENT_ROOT']}/{$home}"); }

#Diretórios Específicos
define('DIRIMG', DIRPAGE."view/img/");
define('DIRCSS', DIRPAGE."view/css/");
define('DIRJS', DIRPAGE."view/js/");

?>