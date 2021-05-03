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
             $views=$callback;
              $this->render($views,"front");
              exit;
         }
         call_user_func( $callback);
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

    function render($view,$layout=""){
        ob_start();
        require_once Application::$ROOT_PATH."/views/$view.html.php";
        $content_for_layout=ob_get_clean();
        require_once Application::$ROOT_PATH."/views/layout/$layout.layout.html.php";
    }
    
}
