<?php
/**
 * Redirigir a una URL
 * 
 * @param $path
 */
function redirect_to( $path ){
    header('Location:' . SITE_URL . '/' . $path );
    die();
}

/**
 * Genera una cadena alfanumerica
 * 
 * @param action
 * 
 * @return string
 */
function generate_hash($action){
    return md5($action);
}

/**
 * Comprueba si una secuencia alfanumerica es correcta
 * 
 * @param action
 * @param hash
 * 
 * @return bool
 */
function check_hash($action, $hash){
    if(generate_hash($action)==$hash){
        return true;
    }
    return false;
}