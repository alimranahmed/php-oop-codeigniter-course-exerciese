<?php
/**
* 
*/
class M_post extends CI_Model
{
	public function create($data){
		$this->db->insert("posts",$data);
		$this->db->join("users","posts.owner=users.id");
		return $this->db->insert_id();
	}
	public function getAllPost($id){
		$this->db->select();
		$this->db->from("posts");
		$this->db->where("owner",$id);
		return $this->db->get()->result();
	}
	public function deletePost($id){
		$this->db->where("id",$id);
		$this->db->delete('posts');	
		
	}
	public function editPost($data, $id){
		$this->db->where("id", $id);
		$this->db->update("posts", $data);

	}
	public function getAllCategory(){
		$this->db->select();
		$this->db->from("categories");
		return $this->db->get()->result();
		
	}
}