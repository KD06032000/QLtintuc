<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class HomeModel extends CI_Model {

	public function getBrandHome() {
		$query =  $this->db->get_where('brands',['status'=>1]);
		return $query->result();
	}
    
    public function getPostHome() {
		$query =  $this->db->get_where('posts',['status'=>1]);
		return $query->result();
	}

	public function getPostDetails($id) {
		$query =  $this->db->select('brands.title as tendanhmuc,posts.*,' )
		->from('brands')
		->join('posts','posts.brand_id = brands.id')
		->where('posts.id',$id)
		->get();
		return $query->result();
	}
}
?>