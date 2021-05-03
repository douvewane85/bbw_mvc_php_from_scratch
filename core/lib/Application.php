<?php 
namespace bbw_mvc\core\lib;
class Application{
    
    //Attributs Statiques
    public static string $ROOT_PATH;
    //Attributs d'intances
    public Router $router;
    public Request $request;
    public Response $response;
    
   public function __construct(string $ROOT_PATH)
   {
       //Attributs Instances
       $this->request=new Request();
       $this->response=new Response();
       $this->router=new Router($this->request,$this->response);
       
       //Attributs Statiques
       self::$ROOT_PATH=$ROOT_PATH;
     
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


