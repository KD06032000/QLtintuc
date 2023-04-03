<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class PostModel extends CI_Model {

	public function insertPost($data)
	{
		return $this->db->insert('posts',$data);
	}

	public function selectPost() {
		$query =  $this->db->select('brands.title as tendanhmuc,posts.*,' )
		->from('brands')
		->join('posts','posts.brand_id = brands.id')
		->get();
		return $query->result();
	}

	public function selectPostById($id) {
		$query =  $this->db->get_where('posts',['id'=>$id]);
		return $query->row();
	}

	public function updatePost($id,$data) {
		return $this->db->update('posts',$data,['id'=>$id]);
	}

	public function deletePost($id) {
		return $this->db->delete('posts', ['id'=>$id]);
	}

}
?>