<?php

class Request {
    static function get($nombre){
        if (isset($_GET[$nombre])){
            return $_GET($nombre);
        }
        return null;//porque es el único q es imposible que te llegue.
        // Así que si me llega null significa q no ha entrado por el if
    }
    
    static function post($nombre){
        if (isset($_POST[$nombre])){
            return $_POST($nombre);
        }
        return null;
    }
    
    static function requestViejo($nombre){
        if (Server::isPost()){//si el metodo es post trato de ver que la variable llegue por post
            if(self::post($nombre)!=null){//si la variable llegue por post entonces devuelvemelo por post
            return self::post($nombre);}
        }return self::get($nombre);//si no, es decir si el metodo o la variable no es por post lo devuelve por get
    }
    
    static function req($nombre){
        if (Server::isPost()&&self::post($nombre)!=null){
        // //si el metodo es post trato de ver que la variable llegue por post
            //si la variable llegue por post entonces devuelvemelo por post
        return self::post($nombre);
        }
        return self::get($nombre);//si no, es decir si el metodo o la variable no es por post lo devuelve por get
    }
    
    

    }
