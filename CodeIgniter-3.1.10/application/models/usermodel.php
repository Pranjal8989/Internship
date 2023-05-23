<?php
class Usermodel extends CI_model
{
  public function getdata()
  {
   $this->load->database();
   $q=$this->db->query("select * from student");
   //to write query in another form 
   //$this->db->where ("id",1);
   //to select first row data
  // $q=$this->db->where("id",3)->get("student");
    return $q->result();
    

  }
}


?>