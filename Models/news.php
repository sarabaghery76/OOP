<?php
  class news extends DB
  {
    private $table="news";
    
    function __construct()
    {
      parent::__construct();
    }
    
      public function get_all()
    {
        return $this->select("SELECT * FROM $this->table");
    }
	
    public function get_new($id)
    {
        return $this->select("SELECT * FROM $this->table WHERE id=$id");
    }
    
    public function update_counter($id,$count){
        $this->affected_row("UPDATE $this->table SET visit_count=$count WHERE id=$id");
    }

    public function insert($title,$excerpt,$readMore)
    {
        return $this->insertInto("INSERT INTO ".$this->table." (title,excerpt,readMore) VALUES ('".$title."','".$excerpt."','".$readMore."')");
    }
    
    public function delete($id)
    {
        return $this->deleteFrom($this->table,$id);
    }  
  }