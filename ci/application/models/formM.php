<?php
class FormM extends CI_Model{
    function __construct(){
        parent::__construct();
    }

    function insert_form($fname,$lname,$gender, $dob, $phone,$occupation,$qualification,$laddress, $paddress,$pincode)
    {
        $sql="INSERT INTO rs (fname,lname ,gender ,dob ,phone, occupation, qualification , laddress , paddress, pincode) VALUES ('$fname','$lname','$gender', '$dob', '$phone','$occupation','$qualification','$laddress', '$paddress','$pincode')";
       
        $this->db->query($sql);
        return 1;
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
    public function updatedata()
        {
                
                $fname=$_POST['fname'];
                $lname=$_POST['lname'];
                $gender=$_POST['gender'];
                $dob=$_POST['dob'];
                $phone=$_POST['phone'];               
                $occupation=$_POST['occupation'];
                $qualification=$_POST['qualification'];
                $laddress=$_POST['laddress'];
                $paddress=$_POST['paddress'];
                $pincode=$_POST['pincode'];
                

             $sql="UPDATE mp SET fname='$fname',lname='$lname',gender='$gender',dob='$dob',phone='$phone' ,occupation='$occupation' ,qualification='$qualification' ,laddress='$laddress' ,paddress='$paddress' ,pincode='$pincode' WHERE id='$id'";
             $data= $this->query($sql);
           
             return $data;

            
        }
    


  }


?>