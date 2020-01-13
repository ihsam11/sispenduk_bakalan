<?php 

/**
 *  Author: Muhammad Ikhsan
 	Since 08/01/2020
 */
class MasterModel extends CI_Model
{

	public function get_satuan_wilayah() {
		$result = $this->db->get('satuan_wilayah');
		return $result;
	}

	public function get_satuan_dusun($id_wilayah = null) {
		$this->db->where('id_wilayah', $id_wilayah);
		$result = $this->db->get('satuan_dusun');
		return $result;
	}	

	public function get_dist_rt($id_wilayah) {
		$this->db->distinct();
		$this->db->select('rt');
		$this->db->where('id_wilayah', $id_wilayah);
		$result = $this->db->get('satuan_dusun');
		return $result;
	}

	public function get_dist_rw($id_wilayah) {
		$this->db->distinct();
		$this->db->select('rw');
		$this->db->where('id_wilayah', $id_wilayah);		
		$result = $this->db->get('satuan_dusun');
		return $result;
	}

	public function get_pekerjaan() {
		$result = $this->db->get('pekerjaan');
		return $result;
	}

	public function get_pendidikan() {
		$result = $this->db->get('pendidikan');
		return $result;
	}

	public function get_golongan_darah() {
		$result = $this->db->get('golongan_darah');
		return $result;
	}

	public function get_agama() {
		$result = $this->db->get('agama');
		return $result;
	}

	public function get_status_nikah() {
		$result = $this->db->get('status_nikah');
		return $result;
	}

	public function get_hubungan_keluarga() {
		$result = $this->db->get('hubungan_keluarga');
		return $result;
	}

	public function get_jenis_cacat() {
		$result = $this->db->get('jenis_cacat');
		return $result;	
	}



}