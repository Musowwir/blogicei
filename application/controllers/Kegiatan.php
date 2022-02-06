<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kegiatan extends CI_Controller {

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
			'isi'=>'frontand/page/kegiatan' );
		
		$this->load->view('frontand/setup/konek',$data);
	}

	

	public function kegiatan_read($slug_title=NULL)
	{

			/* $slide= $this->Slide_m->getAktif();
			  $partner= $this->Blog_m->getAwal();
			  $event= $this->Blog_m->getEvent();*/
			  $profilmenu= $this->Blog_m->getProfil();
			  $berita= $this->Blog_m->getBerita();
			  $people= $this->Blog_m->getPeople();
			  $about= $this->Blog_m->getAbout();
			  $slug= $this->Blog_m->get_news($slug_title);
			  $kegiatanmenu= $this->Blog_m->getKegiatan();
			  $panduanmenu= $this->Blog_m->getPanduan();
			  $kontakmenu= $this->Blog_m->getKontak();
			  if (empty($slug))
			  {
			  	show_404();
			  }
			  $data  = array('x' => 'about',
					  	 					/*'slide'=>$slide,
				                             'partner'=>$partner,
				                             'event'=>$event,*/
				                             'people'=>$people,
				                             'berita'=>$berita,
				                             'about'=>$about,
				                             'profilmenu'=>$profilmenu,
				                             'kegiatanmenu'=>$kegiatanmenu,
				                             'panduanmenu'=>$panduanmenu,
				                             'kontakmenu'=>$kontakmenu,
				                             'slug'=>$slug,
				                             'isi'=>'frontand/page/kegiatan_detail' );
			  
			  $this->load->view('frontand/setup/konek',$data);
					  //var_dump($data);
			}
			
		}
