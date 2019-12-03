<?php
    class Controller
    {
        function __construct()
        {
            $this->view = new View();
        }

        public function loadModel($model_name)
        {
            $model = "Models/" .($model_name) . ".php";

            if(file_exists($model)){
                require_once $model;
                $this->model = new $model_name();
            }
        }
    }