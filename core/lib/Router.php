<?php 
namespace bbw_mvc\core\lib;
class Router{

      private Request $request;
      private $route=[];
    function __construct(Request $request)
    { 
      $this->request=$request;
     
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
             echo "Page Not Found" ;
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
    public function get(string $path,callable $callback){
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
    public function post(string $path,callable $callback){
        $this->route["post"][$path]=$callback;
    }
    
}
