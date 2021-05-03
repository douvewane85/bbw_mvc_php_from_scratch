<?php 
define("ROOT_PATH",str_replace("public\index.php","",$_SERVER['SCRIPT_FILENAME']));
use bbw_mvc\core\lib\Application;
use bbw_mvc\core\lib\Router;

require_once  __DIR__."/../vendor/autoload.php";

$app=new Application(ROOT_PATH);

$app->router->get("/","front/catalogue");

$app->run();

