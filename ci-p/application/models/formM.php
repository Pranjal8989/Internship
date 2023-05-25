<?php
class FormM extends CI_Model{
    function __construct(){
        parent::__construct();
    }



    function insert_form($fname,$lname,$gender, $dob, $phone,$occupation,$qualification,$laddress, $paddress,$pincode,$email,$password)
    {
        $sql="INSERT INTO rs (fname,lname ,gender ,dob ,phone, occupation, qualification , laddress , paddress, pincode,email,password) VALUES ('$fname','$lname','$gender', '$dob', '$phone','$occupation','$qualification','$laddress', '$paddress','$pincode','$email','$password')";
       
        $this->db->query($sql);
        return 1;
    }

    
    public function signin_data($email,$password)
    {
        $data="SELECT * FROM rs WHERE email='$email' and password='$password'";
       
        $q=$this->db->query($data);
        return $q->result();
        // if($data->num_rows() )
        // {
        //     return true;
        // }else{
        //     return false;
        // }

    }
     public function display()
    {
        $data="SELECT * FROM rs";
       
        $q=$this->db->query($data);
        return $q->result();

    }
    public function delete_entry($id)
    {
        $result=$this->db->delete('rs',array('id'=>$id));
        return $result;
    }
    public function getAllRecords($id)
    {
      $qurey=$this->db->get_where('rs',array('id'=>$id));
      if($qurey->num_rows() > 0)
      {
          return $qurey->row();
      }
    }
    public function update_data($id,$fname,$lname,$gender, $dob, $phone,$occupation,$qualification,$laddress, $paddress,$pincode,$email,$password)
        {
               $data="UPDATE rs SET fname='$fname',lname='$lname',gender='$gender',dob='$dob',phone='$phone' ,occupation='$occupation' ,qualification='$qualification' ,laddress='$laddress' ,paddress='$paddress' ,pincode='$pincode',email='$email',password='$password' WHERE id='$id'";
            // print_r($sql);
            // die();
               return $this->db->query($data);
           
          //   return $data;

            
        }
    


  }


?>