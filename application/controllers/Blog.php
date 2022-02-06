<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Blog extends CI_Controller {
function __construct(){
	parent::__construct();
	if(empty($this->session->userdata['email'])){
                redirect(site_url().'auth/login');
            }
$this->load->model('Blog_m');
}
	public function index()
	{
		$blog = $this->Blog_m->getAll();
	  $data  = array('x' => 'Blog',
                             'blog'=>$blog,
                            'isi'=>'back/blog/index' );
                             
            $this->load->view('back/setup/konek',$data);
	}

	public function add()
    {
        $blog = $this->Blog_m;
        $validation = $this->form_validation;
        $validation->set_rules($blog->rules());

        if ($validation->run()) {
            $blog->save();
            $this->session->set_flashdata('success', 'Berhasil disimpan');
            redirect('blog');
        }

         $data  = array('x' => 'add blog',
                           
                            'isi'=>'back/blog/add' );
                             
            $this->load->view('back/setup/konek',$data);
    }

    public function edit($id = null)
    {
        if (!isset($id)) redirect('blog');
       
        $blog = $this->Blog_m;
        $validation = $this->form_validation;
        $validation->set_rules($blog->rules());

        if ($validation->run()) {
            $blog->update();
            $this->session->set_flashdata('success', 'Berhasil disimpan');
            redirect('blog');
        }

        $blogs = $blog->getById($id);
        if (!$blogs) show_404();
        
        $data  = array('x' => 'edit blog',
                           'blog'=>$blogs,
                            'isi'=>'back/blog/edit' );
                             
            $this->load->view('back/setup/konek',$data);
    }

    public function delete($id=null)
    {
        if (!isset($id)) show_404();
        
        if ($this->Blog_m->delete($id)) {
            redirect(site_url('blog'));
        }
    }

     public function post($id=null)
    {
        if (!isset($id)) show_404();
        
        if ($this->Blog_m->postBlog($id)) {
            redirect(site_url('blog'));
        }
    }
}
