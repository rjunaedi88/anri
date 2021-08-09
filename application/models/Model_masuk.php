<?php 

/**
 * 
 */
class Model_masuk extends CI_Model
{
	
	public function tampil_data(){
		return $this->db->get('arsip_masuk');
	}

	// public function generate_id(){
	// 	$a = $this->db->query("SELECT MAX(RIGHT(id, 3)) AS id FROM arsip_masuk")->row_object();
	// 	return sprintf("%03s", $a->id + 1);
	// }

	public function add($data, $table){
		$this->db->insert($table, $data);
	}

	public function getDataById($id){
		$this->db->where('id', $id);
		return $this->db->get('arsip_masuk');
	}

	public function updateData($id, $data){
		$this->db->where('id', $id);
		$this->db->update('arsip_masuk', $data);
	}

	public function hapusData($id, $table){
		$this->db->where($id);
		$this->db->delete($table);
	}
}