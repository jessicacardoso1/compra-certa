<?php

$home = "compra-certa/";
define('DIRPAGE',"http://{$_SERVER['HTTP_HOST']}/{$home}");
if(substr($_SERVER['DOCUMENT_ROOT'],-1)=='/'){ define('DIRREQ',"{$_SERVER['DOCUMENT_ROOT']}{$home}"); } else{ define('DIRREQ',"{$_SERVER['DOCUMENT_ROOT']}/{$home}"); }

#Diretórios Específicos
define('DIRIMG', DIRPAGE."view/img/");
define('DIRCSS', DIRPAGE."view/css/");
define('DIRJS', DIRPAGE."view/js/");
define('DIRACTION', DIRPAGE."view/");


# diretórios para o dashboard
define('DIR_DASHBOARD', DIRPAGE.'view/adm_screens/dash_rel/');
define('DIR_DASHBOARD_CSS', DIR_DASHBOARD.'css/');
define('DIR_DASHBOARD_JS', DIR_DASHBOARD.'js/');
define('DIR_DASHBOARD_VENDOR', DIR_DASHBOARD.'vendor/');

?>