<?php
  class DB
  {
    private $db;

    function __construct()
    {
      // connect to data basae
      $this->db = new mysqli(HOST, DB_USERNAME, DB_PASS, DB_NAME);
      // check database connection
      if($this->db->connect_error){
        die("Connection failed!");
      }      
    }

    public function select ($sql)
    {
        return $this->db->query($sql);
    }
    
    public function affected_row ($sql)
    {
        $this->db->query($sql);
    }
    
    public function selectAll ($table)
    {
      return $this->db->query('select * from '.$table);
    }
    
    public function selectOne ($table,$id)
    {
      return $this->db->query('select * from '.$table.' where id='.$id);
    }
    
    public function insertInto ($sql)
    {
      $q = $this->db->query($sql);
      if (mysqli_affected_rows($this->db)>0)
      {
        return '<br/>اطلاعات شما ثبت شد.';
      }
      else
      {
        return '<br/>اطلاعات شما ثبت نشد.';
      }   
    }
    
    public function check_user ($sql)
    {
      return mysqli_fetch_assoc($this->db->query($sql));
    }
    
    public function deleteFrom ($table,$id)
    {
      $q = $this->db->query("DELETE FROM ".$table." WHERE id=$id");
      if (mysqli_affected_rows($this->db)>0)
      {
        return '<br/>اطلاعات مورد نظر حذف گردید.';
      }
      else
      {
        return '<br/>اطلاعات مورد نظر حذف نشد.';
      } 
    }
    
    public function update ($table,$id,$message)
    {
      $q = $this->db->query("UPDATE ".$table." SET message='".$message."' WHERE id=$id");
      if (mysqli_affected_rows($this->db)>0)
      {
        return '<br/>اطلاعات مورد نظر ویرایش گردید.';
      }
      else
      {
        return '<br/>اطلاعات مورد نظر ویرایش نشد.';
      } 
    }
    
  }