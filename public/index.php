<?php 
define("ROOT_PATH",str_replace("public\index.php","",$_SERVER['SCRIPT_FILENAME']));
use bbw_mvc\core\lib\Application;
use bbw_mvc\core\lib\Router;
use bbw_mvc\src\controllers\SecurityController;
use bbw_mvc\src\controllers\FrontController;
require_once  __DIR__."/../vendor/autoload.php";

$app=new Application(ROOT_PATH);

//Appel de view
$app->router->get("/catalogue","front/catalogue");
//Route Security Controllers
//Route de connexion
$app->router->get("/login",[SecurityController::class,"login"]);
$app->router->post("/login",[SecurityController::class,"login"]);
//Route d'inscription
$app->router->get("/register",[SecurityController::class,"register"]);
$app->router->post("/register",[SecurityController::class,"register"]);

//Route du controller Front
$app->router->get("/detail_bien",[FrontController::class,"editer_bien"]);


$app->run();

