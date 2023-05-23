<?php
 class Users extends CI_controller
 {
    public function User()
    {
      //calling labraries
      //$this->load->library('test');
      //use autoload
      $this->test->dbdetails();


       $this->load->model('Usermodel');
       //or use autoload fuction autoload.php have modelfunction
       $this->load->helper('array');
       $arr=['ABC'=>'abc','XYZ'=>'xyz'];
   echo element('ABC',$arr,'not found');
       show();

       $data['users']=$this->Usermodel->getdata();
      // print_r($data);
      $this->load->view('users/userlist',$data);
    }
 }
?>


