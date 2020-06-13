<?php

class Blog extends CI_Controller
{

	public function index()
	{
		$this->load->model('Blog_model');
		$blogs = $this->Blog_model->getAllBlogs();
		$data = array();
		$data['blogs'] = $blogs;
		$this->load->view('admin/blog/list',$data);
	}

	public function add()
	{
		$this->load->library('form_validation');
		$this->load->model('Blog_model');

		$this->form_validation->set_rules('title','Title','trim|required');
		$this->form_validation->set_rules('desc','Desc','trim|required');
		$this->form_validation->set_rules('author','Author','trim|required');

		if($this->form_validation->run() == true)
		{
			$form_array = array();
			$form_array['title']  = $this->input->post('title');
			$form_array['desc']  = $this->input->post('desc');
			$form_array['author']  = $this->input->post('author');
			$form_array['created_at']  = date('Y-m-d');
			$form_array['special']  = $this->input->post('special');

			$this->Blog_model->create($form_array);

			$this->session->set_flashdata('success','Blog create successfully!');
			redirect(base_url().'blog/index');

		}
		else
		{

			$this->load->view('admin/blog/add');
		}	
	}

	function edit($id){

		$data = array();
		$this->load->library('form_validation');
		$this->load->model('Blog_model');

		$blog = $this->Blog_model->getBlog($id);
		if(empty($blog)){
			$this->session->set_flashdata('success','Blog not found!');
			redirect(base_url().'/blog/index');
		}

		$this->form_validation->set_rules('title','Title','trim|required');
		$this->form_validation->set_rules('desc','Desc','trim|required');
		$this->form_validation->set_rules('author','Author','trim|required');

		if($this->form_validation->run() == true)
		{

			$form_array = array();
			$form_array['title']  = $this->input->post('title');
			$form_array['desc']   = $this->input->post('desc');
			$form_array['author']  = $this->input->post('author');
			$form_array['special']  = $this->input->post('special');
			
			$this->Blog_model->updateBlog($id,$form_array);

			$this->session->set_flashdata('success','Blog updated successfully!');
			redirect(base_url().'blog/index');
		}
		else
		{
			$data['blogs'] = $blog;
			$this->load->view('admin/blog/edit',$data);
		}
	}
}

?>