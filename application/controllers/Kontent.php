<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kontent extends CI_Controller {
function __construct(){
	parent::__construct();
	if(empty($this->session->userdata['email'])){
                redirect(site_url().'auth/login');
            }

     $this->load->model('Kontent_m');
        $this->load->library('form_validation');

}
	public function index()
	{
		//$kontents=$this->Kontent_m->getAll();	
	  $data  = array('x' => 'Kontent',
                            // 'kontents'=>$kontents,
                            'isi'=>'back/page/kontent' );
                             
            $this->load->view('back/setup/konek',$data);
	}

 public function insert(){
            
$this->load->library('form_validation');
$this->form_validation->set_rules('title', 'title', 'required|max_length[200]|min_length[3]');
$this->form_validation->set_rules('meta', 'meta keyword', 'required|min_length[3]');

$this->form_validation->set_rules('description', 'description', 'required');
        $this->form_validation->set_rules('image', 'image kosong', 'required');
         $this->form_validation->set_error_delimiters('<small class="text-danger control-label ">','</small>');
        if ($this->form_validation->run() == FALSE) {
            echo "*wajib di isi";
        }else{
        $status="draft";   
         $id_user= $this->session->userdata('id_user'); 
        $title = $this->input->post('title', true);
        $meta = $this->input->post('meta', true);
        $description = $this->input->post('description', true);
        $tags = $this->input->post('tags', true);
        $image = $this->input->post('image');
        $tanggal = $tes=date('Y-m-d h:i:s');
        $id_kategori      = $this->input->post('id_kategori',true);
        $id_sub     = $this->input->post('id_sub',true);
         $slug = url_title($this->input->post('title'), 'dash', TRUE);
        $image = str_replace('data:image/jpeg;base64,','', $image);
        $image = base64_decode($image);
        $filename = 'image_'.time().'.jpg';
        file_put_contents(FCPATH.'/upload/'.$filename,$image);

        $data = array(
            'title' => $title,
            'slug_title'=>$slug,
            'meta' => $meta,
            'description' => $description,
            'tags' => $tags,          
            'image' => $filename,
            'create_ad'=>$tanggal,
            'id_kategori'=>$id_kategori,
            'status'=>$status,
            'id_sub'=>$id_sub,
            'id_user'=>$id_user,
        );

        $this->load->model('Kontent_m');
        $res = $this->Kontent_m->insert($data);
         header('Content-Type: application/json');
        echo json_encode($res);
        }
        

    }

    public function subKategori()
    {
        if($this->input->post('id_kategori'))
        {
        echo $this->Kontent_m->subKategori($this->input->post('id_kategori'));
        }
    }

    public function esubKategori()
    {
        if($this->input->post('eid_kategori'))
        {
        echo $this->Kontent_m->subKategori($this->input->post('eid_kategori'));
        }
    }

    public function list_all(){
        $result = array('data' =>array() );
        $data=$this->Kontent_m->listAll();
            $no = 1;
        foreach ($data as $key => $value) {
        
            $button='<div class="btn-group">
                 
                 <a type="button" class="btn btn-outline-warning btn-sm" title="klick here on change" onclick="updateKontent('.$value['id_kontent'].')" data-toggle="modal" data-target="#updateModal">  <span class="fa fa-pencil-square-o">edit</span> </a>

                   <a type="button" class="btn btn-outline-info btn-sm" title="klick here on post" onclick="postKontent('.$value['id_kontent'].')" >  <span class="fa fa-external-link-square">post</span> </a>
                  <a type="button" class="btn btn-outline-danger btn-sm" title="klick here on delete" onclick="deleteKontent('.$value['id_kontent'].')" >  <span class="fa fa-times">delete</span> </a>
                 
                </div>';
            $result['data'][$key]=array(
                $no++,
                $value['title'],
                
                $value['nama_kategori'],
                $value['nama_sub'],             
                $value['create_ad'],
                $value['update_ad'],
                $value['status'],
                $value['nama_user'],
                
                $button
            );
        }
        $this->output
        ->set_status_header(200)
        ->set_content_type('application/json', 'utf-8')
        
        ->set_output(json_encode($result, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES))
        ->_display();
        exit();
        //echo json_encode($result);
    }

    public function get_id($id=null){
         if($id) {
            $data = $this->Kontent_m->getId($id);
           $this->output
        ->set_status_header(200)
        ->set_content_type('application/json', 'utf-8')
        ->set_output(json_encode($data, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES))
        ->_display();
        exit();
        }
    }

    public function update($id=null){

        
             if($id) {
            $validator = array('success' => false, 'messages' => array());

          $config = array(
            array(
                'field'     => 'etitle',
                'label'     =>'title',
                'rules'     =>'trim|required'
            ),
            array(
                'field'     => 'emeta',
                'label'     =>'meta',
                'rules'     =>'trim|required'
            ),
            array(
                'field'     => 'edescription',
                'label'     =>'description',
                'rules'     =>'trim|required'
            ),
            array(
                'field'     => 'etags',
                'label'     =>'tags',
                'rules'     =>'trim|required'
            ),
            array(
                'field'     => 'eid_kategori',
                'label'     =>'category',
                'rules'     =>'required'
            ),
            array(
                'field'     => 'eid_sub',
                'label'     =>'sub',
                'rules'     =>'required'
            )
            
         );
             
               
           
        
            $this->form_validation->set_rules($config);
            $this->form_validation->set_error_delimiters('<small class="text-danger control-label ">','</small>');

            if($this->form_validation->run() === true) {

                $edit = $this->Kontent_m->update($id); 

                if($edit === true) {
                    $validator['success'] = true;
                    $validator['messages'] = "Successfully updated";
                } else {
                    $validator['success'] = false;
                    $validator['messages'] = "Error while updating the infromation";
                }           
            } 
            else {
                $validator['success'] = false;
                foreach ($_POST as $key => $value) {
                    $validator['messages'][$key] = form_error($key);    
                }           
            }

           $this->output
        ->set_status_header(200)
        ->set_content_type('application/json', 'utf-8')
        ->set_output(json_encode($validator, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES))
        ->_display();
        exit();
        }
    }   

  public function bank(){


             
                     
                $img     = $this->Kontent_m->galery(); 
               $data  = array('x' => 'Kontent',
                             'img'=>$img,
                            'isi'=>'back/page/bank' );
                             
            $this->load->view('back/setup/konek',$data);
             
        }

      public function ckm(){
    $config['upload_path'] = './upload/'; //path folder
    $config['allowed_types'] = 'gif|jpg|png|jpeg|bmp'; //type yang dapat diakses bisa anda sesuaikan
    $config['encrypt_name'] = FALSE; //Enkripsi nama yang terupload
    $config['max_size']=10024;
    $this->load->library('upload', $config);
    $this->upload->initialize($config);
    if(!empty($_FILES['upload']['name'])){

        if ($this->upload->do_upload('upload')){
            $gbr = $this->upload->data();
            //Compress Image
            $config['image_library']='gd2';
            $config['source_image']='./upload/'.$gbr['file_name'];
            $config['create_thumb']= FALSE;
            $config['maintain_ratio']= TRUE;
            $config['quality']= '100%';
            //$config['width']= 600;
            //$config['height']= 400;
            $config['new_image']= './upload/'.$gbr['file_name'];



           
            $this->load->library('image_lib', $config);
           
            $this->image_lib->resize();

          
             //$data = $this->upload->data();
              $gambar=$gbr['file_name'];
              $id=$this->session->userdata('id_user');
              $this->Kontent_m->upload($gambar,$id);
           echo "success, go to image info -> browser server";
           
        }
                 
    }else{
        echo "not found";
    }
            
}
	  public function post_k($id = null)
    {
        
        if($id) {
            $validator = array('success' => false, 'messages' => array());
 
           
            $pos = $this->Kontent_m->post_kontent($id);
            if($pos === true) {
                $validator['success'] = true;
                $validator['messages'] = "Successfully";
            }
            else {
                $validator['success'] = true;
                $validator['messages'] = "Successfully";
            }
 
            echo json_encode($validator);
        }
    }

     public function delete_k($id = null)
    {
        
        if($id) {
            $validator = array('success' => false, 'messages' => array());
 
           
            $pos = $this->Kontent_m->delete_kontent($id);
            if($pos === true) {
                $validator['success'] = true;
                $validator['messages'] = "Successfully";
            }
            else {
                $validator['success'] = true;
                $validator['messages'] = "Successfully";
            }
 
            echo json_encode($validator);
        }
    }
}
