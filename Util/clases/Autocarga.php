<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Autocarga
 *
 * @author María del Mar
 */
class Autocarga {
    static public function cargar($clase) {
 $archivo = "clases/" . str_replace('\\', '/', $clase) . ".php";//str_replace.... lo q hace es q todas las barras invertidas q encuentre que las cambie a barra normal
 if (file_exists($archivo)) {
require $archivo;}}}

spl_autoload_register('AutoCarga::cargar');//hace q se cargue la clase q ya está definida
 

