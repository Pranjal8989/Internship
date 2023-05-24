<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/userguide3/general/urls.html
	 */
	public function index()
	{
		$this->load->view('welcome_message');
	}
	public function insert()
	{
		// echo"this is my form";
		// die();
    
		$fname = $_POST['fname'];
		$lname = $_POST['lname'];
		$gender = $_POST['gender'];
		$dob = $_POST['dob'];
		$phone = $_POST['phone'];
		$occupation = $_POST['occupation'];
		$qualification = $_POST['qualification'];
		$laddress = $_POST['laddress'];
		$paddress = $_POST['paddress'];
		$pincode = $_POST['pincode'];

		$this->load->model('formM');
		$this->formM->insert_form($fname,$lname,$gender, $dob, $phone,$occupation,$qualification,$laddress, $paddress,$pincode);
		header('Location:http://localhost/ci/index.php/Welcome/fatch_form/');
	}
	public function fatch_form()
	{
	 $this->load->model('formM');
	 $data['rs']=$this->formM->display();

	 $this->load->view('table',$data);
	}
	public function deletedata($id)
	{
		$this->load->model('formM');	
		$this->formM->delete_entry($id);
	    //return redirect("Welcome/fatch_form/");
        header('Location:http://localhost/ci/index.php/Welcome/fatch_form/');
	}
	public function edit($id)
    {
      $this->load->model('formM');
     $data['data']=$this->formM->getAllRecords($id);
      $this->load->view('update',$data);
    }

    public function updatedata()
     {
		// echo"ramdev";
		// die();
		$this->load->model('formM');
		$this->formM->updatedata();
		
     }
	
}


