<?php
class FormM extends CI_model
{
    public function insert($fname,$address,$phone)
    {
        $q= "INSERT INTO curd (fname,address,phone) VALUES ('$fname','$address','$phone')";
        $this->db->query($q);
        return 1;
    } 
    public function display()
    {
        $query= "SELECT * FROM curd";
       $W= $this->db->query($query);
        return $W->result();
    }
}