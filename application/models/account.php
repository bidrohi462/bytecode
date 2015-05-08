<?php
class Account extends CI_Model {
	static function createAccount($name, $phone, $address, $balance) {
		$data = array(
			'Name' => $name,
			'Phone_no' => $phone,
			'Address' => $address,
			'Balance' => $balance
		);
		$this->db->insert('Account', $data);
	}

	static function editInfo($account_no, $name, $phone, $address) {
		$data = array(
			'Name' => $name,
			'Phone_no' => $phone,
			'Address' => $address,
		);
		$this->db->where('Account_no', $account_no);
		$this->db->update('Account', $data);
	}
}