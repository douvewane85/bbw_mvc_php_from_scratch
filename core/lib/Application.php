<?php 
namespace bbw_mvc\core\lib;
class Application{
    
    public Router $router;
    public Request $request;
   public function __construct()
   {
       $this->request=new Request();
       $this->router=new Router($this->request);
     
   }

   /**
    * methode qui l'appel la route
    * correspondante
    * @return void
    */
    public function run(){
        $this->router->resolve();
    }
}


