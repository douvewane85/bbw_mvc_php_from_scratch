<?php 
namespace bbw_mvc\core\lib;
class Controller{
   protected $layout="front";
    public function render($file,array $param=[]){
        Application::$app->router->render($file,$this->layout,$param);
    }
}