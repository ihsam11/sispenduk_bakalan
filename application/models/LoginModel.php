<?php 
/*
	Author: Muhammad Ikhsan
	Created on: 06 January 2020
*/	
class LoginModel extends CI_Model
{	
	public function get_userdata($username = null) {
		$result = $this->db->get_where('user', array('username' => $username));
		return $result;
	}

	public function create_userdata($userdata = array()) {
		$inserted = $this->db->insert('user', $userdata);
		if ( $inserted ) {
			$response['status'] = "success";
		}
		else {
			$response['status'] = "failed";			
		}
		return $response;		
	}

	public function update_userdata($userdata = array(), $userid = null) {

	}

	public function delete_userdata($userid = null) {
		$this->db->where('id', $userid);
		$this->db->delete('user');
	}

}