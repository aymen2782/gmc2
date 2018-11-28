<?php
/**
 * Created by PhpStorm.
 * User: aymen
 * Date: 28/11/2018
 * Time: 11:14
 */

function load($classe){
    $paths = array(
        '',
        'classes/',
        'Model/'
    );

    foreach ($paths as $path) {
        $finalPath = $path.$classe.'.php';
        if (file_exists($finalPath)){
            require $finalPath;
            break;
        }
    }
}

spl_autoload_register('load');