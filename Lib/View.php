<?php
    class View
    {
        function __construct()
        {

        }

        public function render($view_name, $data = NULL)
        {
            if($data)
            {
                foreach($data as $key => $value)
                {
                        $$key = $value;
                }
            }

            require "Views/" . $view_name . ".php";
        }
    }