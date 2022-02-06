<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kontak extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		
		$this->load->model("Slide_m");
		$this->load->model('Blog_m');
	}

	public function index()
	{

		$slide= $this->Slide_m->getAktif();
		$berita= $this->Blog_m->getBerita();
		$event= $this->Blog_m->getEvent();
		$people= $this->Blog_m->getPeople();
		$about= $this->Blog_m->getAbout();
		$profilmenu= $this->Blog_m->getProfil();
		$kegiatanmenu= $this->Blog_m->getKegiatan();
		$panduanmenu= $this->Blog_m->getPanduan();
		$kontakmenu= $this->Blog_m->getKontak();
		$data  = array('x' => 'Dasbord',
			'slide'=>$slide,
			'berita'=>$berita,
			'event'=>$event,
			'people'=>$people,
			'about'=>$about,
			'kegiatanmenu'=>$kegiatanmenu,
			'panduanmenu'=>$panduanmenu,
			'profilmenu'=>$profilmenu,
			'kontakmenu'=>$kontakmenu,
			'isi'=>'frontand/page/kontak' );
		
		$this->load->view('frontand/setup/konek',$data);
	}
	
}
