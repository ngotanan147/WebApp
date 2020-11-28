<?php 
    class Controller{
        public function getModel($modelName){
            require_once "./mvc/models/".$modelName.".php";
            return new $modelName;
        }

        public function getView($viewName, $data=[]){
            require_once "./mvc/views/".$viewName.".php";
        }

        public function getViewAdmin($viewName, $data=[]){
            require_once "./mvc/views/Admin/".$viewName.".php";
        }
    }
?>