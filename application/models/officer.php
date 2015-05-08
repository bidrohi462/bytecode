<?php
class Officer extends CI_Model {
	function isUserLoggedIn() {
		$officer=$this->session->userdata('username');
		return isset($officer) && !empty($officer);
	}

	function login($username, $password) {
		echo $username;
		$this->db->where('Officer_Id', $username);
		$query=$this->db->get('officer');

		if($query->num_rows==0) {
			return false;
		}

		$user=$query->first_row();
		if($user->Password!=$password) return false;

		$this->session->set_userdata('username', $username);
		return true;
	}
}