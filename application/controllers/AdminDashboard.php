<?php 

class AdminDashboard extends CI_Controller{

	function index(){

		// echo "I am logged in";
		// if(empty($this->session->userdata['users'])){
		// 	redirect(base_url().'index.php/login');
		// }
		// echo "<a href='".base_url().'index.php/adminDashboard/signOut'."'>Sign Out</a>";
		//print_r($this->session->userdata['users']);
		$this->load->view('admin/dashboard');
	}
	
	function signOut(){
		$this->session->unset_userdata('users');
		redirect(base_url().'login');

	}
}


?>