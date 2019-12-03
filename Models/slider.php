<?php
class slider extends DB{
    
    function __construct() {
        parent::__construct();
    }
    
    public function insert($title,$fileToUpload)
    {
        return $this->insertInto("INSERT INTO slider (title,address) VALUES ('".$title."','".$fileToUpload."')");
    }
}
