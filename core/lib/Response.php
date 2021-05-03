<?php 
namespace bbw_mvc\core\lib;
class Response{

    public function setStatusCode(int $code){
        return http_response_code($code);
    }
}