<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Server
 *"
 * @author María del Mar
 */
class Server {
    static function getServerName(){
        return $_SERVER["SERVER_NAME"];
    }
    static function getRootPath(){
        return $_SERVER["SERVER_CONTEXT_DOCUMENT_ROOT"];}
    
    static function getPort(){
    return $_SERVER["SERVER_PORT"];}
    
    static function getUserAgent(){//te da el navegador que se está usando
        return $_SERVER["HTTP_USER_AGENT"];
    }
    static function getQueryString(){
        return $_SERVER["QUERY_STRING"];
    }
    static function getFile(){
        return $_SERVER["SCRIPT_FILENAME"];//te da la ruta del archivo
               
    }
    static function getMethod(){//te da el metodo por el que estan viajando los datos
        return $_SERVER["REQUEST_METHOD"];
}
    static function getClienteAdress(){//te da la ip del cliente
        return $_SERVER["REMOTE_ADDR"];
    }
    static function getRequestDate($campo=null){//te da la fecha en la q se hace la petición
        date_default_timezone_set("Europe/Madrid");
        switch ($campo){
           
            case "Y":
                return (int)date('Y' , $_SERVER['REQUEST_TIME'] );
            case "M":
                return (int)date('M' , $_SERVER['REQUEST_TIME'] );;
            case "D":
                return 1;
            case "h":
                return (int)date('H' , $_SERVER['REQUEST_TIME'] );
                
            case "m":
                return (int)date('m' , $_SERVER['REQUEST_TIME'] );
            case "s":
                return (int)date('s' , $_SERVER['REQUEST_TIME'] );
                    
            
        }
         return $_SERVER["REQUEST_TIME"];

        
        
        
       }
    static function getRequest($campo){//te da la fecha en la q se hace la petición
    return $_SERVER["REQUEST_TIME"];}
    
    }