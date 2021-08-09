<?php 

class Model_keluar extends CI_Model {

	public function tampil_data()
	{
		return $this->db->get('arsip_keluar');
	}

	public function add($data, $table){
		$this->db->insert($table, $data);
	}

	public function getDataById($id){
		$this->db->where('id_keluar', $id);
		return $this->db->get('arsip_keluar');
	}

	public function updateData($id, $data){
		$this->db->where('id_keluar', $id);
		$this->db->update('arsip_keluar', $data);
	}

	public function hapusData($id, $table){
		$this->db->where($id);
		$this->db->delete($table);
	}
}