<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kategori_m extends CI_Model {
public function __construct(){
	parent::__construct();
}
	
	public function insert()
	{
		 $slug = url_title($this->input->post('nama_kategori'), 'dash', TRUE);
		$data = array('nama_kategori' 		=>	$this->input->post('nama_kategori',true) ,
					 'slug_kategori' => $slug);

		$sql=$this->db->insert('tb_kategori',$data);
		if($sql===true){
			return true;
		}else{
			return false;
		}
	}

	public function listAll(){
		/*$id = $this->session->userdata['id_user']; 
		$this->db->where('t_jurusan.id_user',$id);*/
		$this->db->select('*');
		
		$this->db->from('tb_kategori');
		$query=$this->db->get();
		return $query->result_array();
	}

	public function getId($id=null){
		if ($id) {
    		
    	
    	$this->db->where('tb_kategori.id_kategori',$id);
		$this->db->select('*');		
		$this->db->from('tb_kategori');
    	$query=$this->db->get();
    	return $query->row_array();
    	if ($query===true) {
    		return true;
    	}else{
    		return false;
    	}
    }
	}
	public function update($id=null){
		if ($id) {
			 $slug = url_title($this->input->post('enama_kategori'), 'dash', TRUE);
			$data = array('nama_kategori' 		=> $this->input->post('enama_kategori',true),
							'slug_kategori'=>$slug);
			$this->db->where('id_kategori', $id);
			$sql=$this->db->update('tb_kategori',$data);
			if($sql===true){
				return true;

			}else{
				return false;
			}
		}
	}


	public function insertSub()
	{
		$slug = url_title($this->input->post('nama_sub'), 'dash', TRUE);
		$data = array('nama_sub' 		=>	$this->input->post('nama_sub',true) ,
						'slug_sub'		=> $slug,
					 'id_kategori' 		=> $this->input->post('id_kategori',true));

		$sql=$this->db->insert('tb_sub_kategori',$data);
		if($sql===true){
			return true;
		}else{
			return false;
		}
	}

	public function listAllSub(){
		/*$id = $this->session->userdata['id_user']; 
		$this->db->where('t_jurusan.id_user',$id);*/
		$this->db->select('tb_sub_kategori.id_sub,tb_sub_kategori.nama_sub,tb_sub_kategori.id_kategori,tb_kategori.nama_kategori');	
		$this->db->join('tb_kategori','tb_sub_kategori.id_kategori=tb_kategori.id_kategori');	
		$this->db->from('tb_sub_kategori');
		
		$query=$this->db->get();
		return $query->result_array();
	}

	public function getIdSub($id=null){
		if ($id) {
    		
    	
    	$this->db->where('tb_sub_kategori.id_sub',$id);
		$this->db->select('tb_sub_kategori.id_sub,tb_sub_kategori.nama_sub,tb_sub_kategori.id_kategori,tb_kategori.nama_kategori');	
		$this->db->join('tb_kategori','tb_sub_kategori.id_kategori=tb_kategori.id_kategori');	
		$this->db->from('tb_sub_kategori');
    	$query=$this->db->get();
    	return $query->row_array();
    	if ($query===true) {
    		return true;
    	}else{
    		return false;
    	}
    }
	}
	public function updateSub($id=null){
		if ($id) {
			$slug = url_title($this->input->post('enama_sub'), 'dash', TRUE);
			$data = array('nama_sub' 		=> $this->input->post('enama_sub',true),
						'slug_sub'			=>$slug,
					 	'id_kategori' 		=> $this->input->post('eid_kategori',true));
			$this->db->where('id_sub', $id);
			$sql=$this->db->update('tb_sub_kategori',$data);
			if($sql===true){
				return true;

			}else{
				return false;
			}
		}
	}

	
	function jumlah_data(){
		return $this->db->get('tb_kategori')->num_rows();
	}
    

}

