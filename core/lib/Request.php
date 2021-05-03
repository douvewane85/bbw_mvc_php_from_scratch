<?php 
namespace bbw_mvc\core\lib;
class Request{

    /**
     * Recupere l'uri puis 
     * retourn la premiere clé
     * @return string
     */
    public function getPath():string{
       $path= $_SERVER['REQUEST_URI'];
       $arr_path=explode("/",$_SERVER['REQUEST_URI']);
       $path=$arr_path[1]??"";
       return "/".$path;

    }
    /**
     * retourne la methode
     * de la requete
     * @return string
     */
    public function getMethod():string{
       return strtolower($_SERVER['REQUEST_METHOD']) ;   
     }
    
}
