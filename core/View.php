<?php
/**
 * Created by PhpStorm.
 * User: a.delgado
 * Date: 10/11/2017
 * Time: 10:02
 */

namespace Projet\App;

class View
{
    /**
     * @param $viewName
     * @param $params
     */
    public function createView($viewName,$params){
        $viewFile = '../View/'.$viewName.'.php';
        extract($params);
        var_dump($params);
        if(file_exists($viewFile)){
            require ($viewFile);
        } else {
            $error = 'La vue '.$viewName.' n\'est pas disponible';
            require ('../View/error.php');
        }
       // require ('../View/home.php');
    }
}