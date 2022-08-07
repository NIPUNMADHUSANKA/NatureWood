<?php

class Controller 
{
    
    protected function view($view){

        if(file_exists("../app/view/". $view .".php")){
            include "../app/view/". $view .".php";
        }
        else{
            include "../app/view/404.php";
        }
    }


    protected function loadModel($model){

        if(file_exists("../app/view/". $model .".php")){
            include "../app/view/". $model .".php";
            return $model = new $model();
        }
        

        return false;
    }


}
