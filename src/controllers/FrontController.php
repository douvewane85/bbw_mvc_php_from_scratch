<?php 
namespace bbw_mvc\src\controllers;

use bbw_mvc\core\lib\Controller;
use bbw_mvc\core\lib\Request;

class FrontController extends Controller{
    public function editer_bien(Request $request){
        var_dump($request->getData()); die;
        $this->render("front/detail");
    }
}