<?php

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

// echo "<pre>";
// print_r($_SERVER);
// echo "__DIR__ " . __DIR__ . "<br>";
// echo "dirname(__DIR__) " . dirname(__DIR__) . "<br>";
// echo "basename(dirname(__DIR__)) " . basename(dirname(__DIR__)) . "<br>";

// echo "<br>******************<br><br>";
// echo "_SERVER[REQUEST_URI] " . $_SERVER['REQUEST_URI'] . "<br>";
// echo "<pre>";
