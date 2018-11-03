<?php
/**
 * Created by PhpStorm.
 * User: Charly
 * Date: 27/10/2018
 * Time: 01:05 AM
 */

class Controller{

    public function setView($view,$params=[]){
        if (file_exists('../app/views/'.$view.'.php')){
            $_VIEW = $view;
        }else{
            $_VIEW = "notfound";
        }
        include_once '../app/views/layaut.php';
    }
    public function setModel($model){
        require_once '../app/models/'.$model.'.php';
        return new $model();
    }

}