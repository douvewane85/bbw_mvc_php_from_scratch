<?php 
namespace bbw_mvc\src\controllers;

use bbw_mvc\core\lib\Controller;
use bbw_mvc\core\lib\Request;

class SecurityController extends Controller{
    public function login(Request $request){
        if($request->isPost()){
           var_dump($request->getData()); die() ;
        }
       $this->render("security/login",[
           "test"=>"Data"
       ]);
    }

    public function register(){
        $this->render("security/register",[
            "test"=>"Data"
        ]);
     }

}