<?php
class UserProfile extends CI_Controller {
	function index($account_no) {
		$account=$this->account->getAccountById($account_no);
		$this->load->view('userprofileui', array(
			'account' => $account
		));
	}
}