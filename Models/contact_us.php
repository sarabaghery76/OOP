<?php
class contact_us extends DB {
    
    function __construct() {
        parent::__construct();
    }
    
    public function insert($table,$name,$email,$phone,$message)
    {
        return $this->insertInto("INSERT INTO ".$table." (name,email,phone,message) VALUES ('".$name."','".$email."',".$phone.",'".$message."')");
    }
    
    public function get_all($table)
    {
      return $this->selectAll($table);
    }
    
    public function delete($table,$id)
    {
        return $this->deleteFrom($table,$id);
    }  
    
    public function edit($table,$id,$message)
    {
        return $this->update($table,$id,$message);
    }
    
    public function get_message($table,$id)
    {
      return $this->selectOne($table,$id);
    }
    
}
