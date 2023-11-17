<?php
if (session_status() == PHP_SESSION_NONE){
    session_start();
}
// define("APP_URL", "http://localhost/old/oop/oop%20App/");
$p = explode('/',$_SERVER['REQUEST_URI']);
$projectpath="";
foreach($p as $item) {
    $item = str_replace("%20"," ",$item);
    $projectpath.=$item.'/';
    if ($item == basename(dirname(__DIR__))) {
        break;
    }
}
define("APP_URL", $_SERVER['REQUEST_SCHEME']."://".$_SERVER['SERVER_NAME'].':'.$_SERVER['SERVER_PORT'].$projectpath);
define('APP_PATH', $_SERVER['CONTEXT_DOCUMENT_ROOT'].$projectpath);
define('DB_HOST','localhost');
define('DB_USERNAME','root');
define('DB_PASSWORD','');
define('DB_NAME','students_oopApp');