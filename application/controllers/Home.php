<?php

class Home extends CI_Controller{

	public function index(){

		$this->load->model('Blog_model');
		$this->load->helper('text');
		
		$data = array();
		$allBlogs = $this->Blog_model->getAllBlogs();

		$FeaturedBlogs = $this->Blog_model->getFeaturedBlogs();
		$PromoBlog = $this->Blog_model->getPromoBlogs();

		$data['allBlogs'] = $allBlogs;	
		$data['FeaturedBlogs'] = $FeaturedBlogs;	
		$data['PromoBlog'] = $PromoBlog;	
		$this->load->view('home',$data);
	}

	function blogDetail($blogId){

		$this->load->model('Blog_model');
		$this->load->model('Comment_model');

		$blog = $this->Blog_model->getBlog($blogId);
		if(empty($blog)){
			redirect(base_url());
		}

		$data = array();
		$data['blog'] = $blog; 

		$comments = $this->Comment_model->getCommentsOfABlog($blogId);
		$data['comments'] = $comments;	

		$this->load->library('form_validation');
		$this->form_validation->set_rules('name','Name','required');
		$this->form_validation->set_rules('comment','Comment','required');

		if($this->form_validation->run() == true){
			//save comment to database
			$formArray = array();
			$formArray['name'] = $this->input->post('name');
			$formArray['blog_id'] = $blogId;
			$formArray['comment'] = $this->input->post('comment');
			$formArray['created_at'] = date('Y-m-d');
			$this->Comment_model->create($formArray);

			$this->session->set_flashdata('msg','Comment saved successfully!');
			redirect(base_url().'home/blogDetail/'.$blog['blog_id']);
		}else{
			$this->load->view('detail',$data);
		}
	}
}

?>