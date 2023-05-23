<?php
class Home extends CI_controller
{
    public function index()
    {
      $this->load->library('session');
        $this->load->model('Curdmodel');
      $record=$this->Curdmodel->getrecord();
     
        $this->load->view('users/home',['record'=> $record]);
    }


    
    public function create()
    {
      $this->load->helper('form');
      $this->load->view('users/create');
    }
    public function save()
    {
      $this->load->library('form_validation');
      $this->form_validation->set_rules('customername','customername','required');
      $this->form_validation->set_rules('phone','phone','required|max_length[10]');
      $this->form_validation->set_rules('address','adderss','required');
      $this->form_validation->set_rules('city','city','required');
      $this->form_validation->set_rules('country','country','required|alpha');
      $this->form_validation->set_error_delimiters('<div class="text-danger">','</div>');

      
      if($this->form_validation->run())
      {
        $data=$this->input->post();
        $this->load->model('Curdmodel');
       if ($this->Curdmodel->saverecord($data))
       {
        $this->load->library('session');
          $this->session->set_flashdata('response','record saved');
       }
       else{
        $this->load->library('session');
      
        $this->session->set_flashdata('response','record not saved');
       }
       return redirect('home');
      }
      else{
        $this->load->view('users/create');
      }
  
    }

    public function edit($record_id)
    {
      $this->load->model('Curdmodel');
     $record=$this->Curdmodel->getAllRecords($record_id);
      $this->load->view('users/update',['record'=>$record]);
    }



    public function update($record_id)
    {
      $this->load->library('form_validation');
      $this->form_validation->set_rules('customername','customername','required|alpha');
      $this->form_validation->set_rules('phone','phone','required|max_length[10]');
      $this->form_validation->set_rules('address','adderss','required');
      $this->form_validation->set_rules('city','city','required');
      $this->form_validation->set_rules('country','country','required|alpha');
      $this->form_validation->set_error_delimiters('<div class="text-danger">','</div>');

      
      if($this->form_validation->run())
      {
        $data=$this->input->post();
        $this->load->model('Curdmodel');
        
       if ($this->Curdmodel->updaterecords($record_id,$data))
       {
        $this->load->library('session');
       
        $this->session->set_flashdata('response','record updated');
       }
       else{
        $this->load->library('session');
        
        $this->session->set_flashdata('response','record not update');
       }
       return redirect('home');
      }
      else{
        $this->load->view('users/update');
      }
  
    }
    public function delete($record_id)
    {
      $this->load->library('session');
        $this->load->model('Curdmodel');
        if($this->Curdmodel->deleterecord($record_id))
        {
          $this->session->set_flashdata('response','record delete');
        }
        else
        {
          $this->session->set_flashdata('response','record not delete');
        }
        return redirect('home');
    }

    }


?>