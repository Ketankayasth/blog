<?php

class Login extends CI_Controller{

	function index(){

		$this->load->model('User_model');
		$this->load->library('form_validation');

		$this->form_validation->set_rules('username','Username','required');
		$this->form_validation->set_rules('password','Password','required');

		if($this->form_validation->run() == false){
			
			$this->load->view('admin/login');
		}else{
			$username = $this->input->post('username');
			$password = $this->input->post('password');
			$user = $this->User_model->doLogin($username,$password);
			//echo "form validation successfull";

			if(!empty($user)){
				
				$this->session->set_userdata('users',$user);
				redirect(base_url().'adminDashboard');
			}else{
				$this->session->set_flashdata('errorMsg','Either Username/Password incorrect');
				redirect(base_url().'login');


			}
		}


	}
}

?>