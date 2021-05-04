<?php 
namespace bbw_mvc\core\lib;
class Router{

      private Request $request;
      private Response $response;
      private $route=[];

      
    function __construct(Request $request,Response $response)
    { 
      $this->request=$request;
      $this->response=$response;
     
    }
    /**
     *  function
     *  permet de slection une route 
     *  suivant l'url
     * @return void
     */
    public function resolve(){
         $path=  $this->request->getPath();
         $method=  $this->request->getMethod();
      
         $callback=$this->route[$method][$path]??false;
         if(!$callback){
             $this->response->setStatusCode(404);
             $this->render("erreur/erreur","front");
             exit; 
         }elseif (is_string($callback)) {
             //Rechargement d'une page
             $views=$callback;
              $this->render($views,"front");
              exit;
         }elseif (is_array($callback)) {
            
                $controller=new $callback[0]();
                $action=$callback[1];
               // $controller->{$action}();
                call_user_func(array($controller, $action),  $this->request);
                exit;
         }
         //Execution d'une callback ou closure en php
             call_user_func( $callback,$this->request);
    }
    /**
     * stocke toutes les routes get dans le 
     * tableau $route
     *
     * @param string $path
     * @param callable $callback
     * @return void
     */
    public function get(string $path, $callback){
        $this->route["get"][$path]=$callback;
    }

    /**
     * stocke toutes les routes post dans le 
     * tableau $route
     *
     * @param string $path
     * @param callable $callback
     * @return void
     */
    public function post(string $path,$callback){
        $this->route["post"][$path]=$callback;
    }

    function render($view,$layout="",$params=[]){
        ob_start();
         extract($params);
        require_once Application::$ROOT_PATH."/views/$view.html.php";
        $content_for_layout=ob_get_clean();
        require_once Application::$ROOT_PATH."/views/layout/$layout.layout.html.php";
    }
    
}
