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
		$this->load->view('login');
		
	}
	public function signin()
	{
		// print_r($_POST);
		// die();
		// $email= $_POST['email'];
		// $password=$_POST['password'];
		// $this->load->model('formM');
		// $this->formM->signin_data();
		$this->load->library('form_validation');
		$this->form_validation->set_rules('username','username','required');
		$this->form_validation->set_rules('password','password','required');
		$this->form_validation->set_error_delimiters('<div class="text-danger">', '</div>');

		if($this->form_validation->run())
		{
		$username= $_POST['username'];
		$password=$_POST['password'];
		// print_r($_POST);die();
		$this->load->model('formM');
		$r=$this->formM->signin_data($username,$password);
		if($r)
		{
			//echo "match";
			$this->load->library('session');
			$this->session->set_userdata('id',$r);
			// $this->load->model('formM');
			// $data['rs']=$this->formM->display();
	   
			// $this->load->view('table',$data);
				 $this->load->view('header');
				 $this->load->view('footer');
		}
		else{
			$this->load->library('session');
			$this->session->set_flashdata('pass','Invalied username or password');
		    redirect(base_url("Welcome"));
			// echo "failed login";
		}

		}else{
			$this->load->view("login");
		}
	}
	public function create()
	{
		 $this->load->view('header');
		$this->load->view('welcome_message');
		$this->load->view('footer');
	}
	public function dashboard()
	{
		$this->load->view('header');
		$this->load->view('footer');
	}
	public function login_form()
	{
        $this->load->view('pranjal');
	}
	public function logout()
	{
		$this->db->close();
		$this->session->sess_destroy();
       redirect(base_url('Welcome'));
	}
	public function signup()
	{
		$fname=$_POST['fname'];
		$username=$_POST['username'];
		$password=$_POST['password'];
		$this->load->model('formM');
		$e=$this->formM->signup_insert($fname,$username,$password);
		if($e)
		{
			//echo "match";
			$this->load->library('session');
			$this->session->set_userdata('id',$e);
			$this->session->set_flashdata('username','Data is store successfully');
			 redirect(base_url('Welcome'));
		}
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
		return redirect(base_url('Welcome/fatch_form'));
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

    public function updatedata($id)
     {
		// echo"ramdev";
		// die();
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
		// $email= $_POST['email'];
		// $password=$_POST['password'];
		$this->load->model('formM');
		$this->formM->update_data($id,$fname,$lname,$gender, $dob, $phone,$occupation,$qualification,$laddress, $paddress,$pincode);
		header('Location:http://localhost/ci/index.php/Welcome/fatch_form/');
     }
	 public function fedit()
    {
      $this->load->model('formM');
     $rs['data']=$this->formM->fRecords($id);
      $this->load->view('forgot',$rs);
    }
	public function forgot($id)
	{
		$fname=$_POST['fname'];
		$username=$_POST['username'];
		$password=$_POST['password'];
		$this->load->model('formM');
		$this->formM->forgot_data($id,$fname,$username,$password);
		}
}


