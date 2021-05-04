<?php 
namespace bbw_mvc\core\lib;
class Request{

   
    /**
     * retourne la methode
     * de la requete
     * @return string
     */
    public function getMethod():string{
       return strtolower($_SERVER['REQUEST_METHOD']) ;   
     }
     /**
      * Indique si la requete est POST ou pas
      * @return bool
      */
     public function isPost():bool{
        return $this->getMethod()=="post";
     }
     /**
      * Indique si la requete est GET ou pas
      * @return bool
      */
     public function isGet():bool{
        return $this->getMethod()=="get";
    }

    private function explodeUrl():array{
        $path= $_SERVER['REQUEST_URI'];
        $arr_path=explode("/",$_SERVER['REQUEST_URI']);
        $path=$arr_path[1]??"";
        unset( $arr_path[0]);
        unset( $arr_path[1]);
          return [
              "path"=>"/".$path,
              "params"=>$arr_path
          ];
     }

     /** 
     * retourne la premiere clé ou le path
     * @return string
     */
        public function getPath():string{
            return $this->explodeUrl()["path"];
        }
     /**
      * Fonction qui recupere le contenu 
      * tableau superglobale $_POST et $_GET
      * @return void
      */
     public function getData(){
        
         $arr_body=[];
         if($this->isGet()){
            $arr_params=$this->explodeUrl()["params"];
            $key=0;
            foreach ($arr_params as  $value) {
                $arr_body["param_".$key++]= $value;
            }
         }
         if($this->isPost()){
            foreach ($_POST as $key => $value) {
                $arr_body[$key ]=filter_input(INPUT_POST, $key,FILTER_SANITIZE_SPECIAL_CHARS);
            }
         }
         return  $arr_body;
     }

    

     
    
}
