<?php 

use bbw_mvc\core\lib\Application;
use bbw_mvc\core\lib\Router;

require_once  __DIR__."/../vendor/autoload.php";



$app=new Application();

$app->router->get("/",function(){
    echo "Route Get";
});
$app->router->get("/login",function(){
    echo "Route Get Login";
});
$app->router->get("/register",function(){
    echo "Route Get Register";
});
$app->router->post("/login",function(){
    echo "Route Post Login";
});
$app->router->post("/register",function(){
    echo "Route Post Register";
});
$app->run();

