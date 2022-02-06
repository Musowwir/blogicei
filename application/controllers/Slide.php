<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Slide extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        if(empty($this->session->userdata['email'])){
                redirect(site_url().'auth/login');
            }
        $this->load->model("Slide_m");
        $this->load->library('form_validation');
    }

    public function index()
    {
        $personal= $this->Slide_m->getAll();
        $data  = array('x' => 'slide',
                             'personal'=>$personal,
                            'isi'=>'back/slide/index' );
                             
            $this->load->view('back/setup/konek',$data);

        //$this->load->view("admin/personal/list", $data);
       // var_dump($data);
    }

    public function add()
    {
        $personal = $this->Slide_m;
        $kategori = $this->Slide_m->getKategori();
        $validation = $this->form_validation;
        $validation->set_rules($personal->rules());

        if ($validation->run()) {
            $personal->save();
            $this->session->set_flashdata('success', 'Berhasil disimpan');
            redirect(site_url('Slide'));
        }

        $data  = array('x' => 'slide',
                             'validation'=>$validation,
                             'kategori'=>$kategori,
                            'isi'=>'back/slide/new_form' );
                             
            $this->load->view('back/setup/konek',$data);
    }

    public function edit($id = null)
    {
        if (!isset($id)) redirect('slide');
       
        $personal = $this->Slide_m;
        $validation = $this->form_validation;
        $kategori = $this->Slide_m->getKategori();
        $validation->set_rules($personal->rules());

        if ($validation->run()) {
            $personal->update();
            $this->session->set_flashdata('success', 'Berhasil disimpan');
            redirect(site_url('Slide'));
        }

        $person = $personal->getById($id);
        if (!$person) show_404();
        
          $data  = array('x' => 'slide',
                             'validation'=>$validation,
                             'kategori'=>$kategori,
                              'personal'=>$person,
                            'isi'=>'back/slide/edit' );
                             
            $this->load->view('back/setup/konek',$data);
    }

    public function delete($id=null)
    {
        if (!isset($id)) show_404();
        
        if ($this->Slide_m->delete($id)) {
            redirect(site_url('Slide'));
        }
    }
}
