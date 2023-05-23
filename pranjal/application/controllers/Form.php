<?php
class Form extends CI_controller
{
    public function index()
    {
                $data['t']=$this->load->model('FormM');
                $this->FormM->display();
                $this->load->view('user/table',$data);
    }
    public function create()
    {
        $this->load->view('user/form');
   
    }

    public function insertdata()
    {
        $fname= $_POST['fname'];
        $address=$_POST['address'];
        $phone=$_POST['phone'];
        // print_r($_POST);
        // die();
        
        $this->load->model('FormM');
        $this->FormM->insert($fname,$address,$phone);
        // return redirect('Form/insertdata');
    }

}


?>