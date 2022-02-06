<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Partner extends CI_Controller {

	   public function __construct()
    {
        parent::__construct();
       
        $this->load->model("Slide_m");
        $this->load->model('Blog_m');
    }

	public function index()
	{

			 $slide= $this->Slide_m->getAktif();
			  $partner= $this->Blog_m->getAwal();
			   $event= $this->Blog_m->getEvent();
			      $people= $this->Blog_m->getPeople();
			       $about= $this->Blog_m->getAbout();
			        $profilmenu= $this->Blog_m->getProfil();
	  $data  = array('x' => 'Dasbord',
	  	 					'slide'=>$slide,
                             'partner'=>$partner,
                             'event'=>$event,
                             'people'=>$people,
                             'about'=>$about,
                              'profilmenu'=>$profilmenu,
                            'isi'=>'frontand/page/partner' );
                             
            $this->load->view('frontand/setup/konek',$data);
	}

	public function faq()
	{
		 $about= $this->Blog_m->getAbout();

	  $data  = array('x' => 'Tanya Jawab',
	  	 					  'about'=>$about,
                            'isi'=>'frontand/page/faq' );
                             
            $this->load->view('frontand/setup/konek',$data);
	}

	public function about($slug_title=NULL)
	{

			/* $slide= $this->Slide_m->getAktif();
			  $partner= $this->Blog_m->getAwal();
			   $event= $this->Blog_m->getEvent();*/
			      $people= $this->Blog_m->getPeople();
			        $about= $this->Blog_m->getAbout();
			       $slug= $this->Blog_m->get_news($slug_title);
					if (empty($slug))
					{
					show_404();
					}
					  $data  = array('x' => 'about',
					  	 					/*'slide'=>$slide,
				                             'partner'=>$partner,
				                             'event'=>$event,*/
				                             'people'=>$people,
				                             'about'=>$about,
				                             'slug'=>$slug,
				                            'isi'=>'frontand/page/about' );
				                             
				         $this->load->view('frontand/setup/konek',$data);
					  //var_dump($data);
					}
		public function contact()
	{
				        $about= $this->Blog_m->getAbout();

					  $data  = array('x' => 'kontak ICE',
					  	 					        'about'=>$about,
				                            'isi'=>'frontand/page/kontak' );
				                             
				         $this->load->view('frontand/setup/konek',$data);
					  //var_dump($data);
					}
}
