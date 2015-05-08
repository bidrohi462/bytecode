<?php
class Officer extends CI_Model {
	function isUserLoggedIn() {
		$officer=$this->session->item('username');
		return isset($officer) && !empty($officer);
	}

	function login($username, $password) {
		$this->db->where('Officer Id', $username);
		$query=$this->get('officer');

		if($query->num_rows==0) return false;

		$user=$query->first_row();
		if($user->Password==$password) return false;

		$this->session->set_userdata('username', $username);
		return true;
	}
}