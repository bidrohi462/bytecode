<?php
class Account extends CI_Model {
	function createAccount($name, $phone, $address, $balance) {
		$data=array(
			'Name' => $name,
			'Phone_no' => $phone,
			'Address' => $address,
			'Balance' => $balance
		);
		$this->db->insert('Account', $data);
	}

	function editInfo($account_no, $name, $phone, $address) {
		$data=array(
			'Name' => $name,
			'Phone_no' => $phone,
			'Address' => $address,
		);
		$this->db->where('Account_no', $account_no);
		$this->db->update('Account', $data);
	}

	function adjustBalance($account_no, $add_deduct, $amount) {
		$account=$this->account->getAccountById($account_no);
		
		if($add_deduct=='ded') $amount=-$amount;
		$amount=$account->Balance+$amount;

		$this->db->where('Account_no', $account_no);
		$this->db->update('Account', array('balance' => $amount));
	}

	function getAccountById($account_no) {
		$this->db->where('Account_no', $account_no);
		$query=$this->db->get('Account');

		if($query->num_rows()==0) return null;
		return $query->first_row();
	}

	function getAccounts($page) {
	}

	function hasCard($account_no) {
		return false;
	}
}