<?php
class AccountList extends CI_Controller {
	function index($page=1) {
		$accounts=$this->account->getAccounts($page, 5);
		$this->load->view('accountlistui', array(
			'accounts' => $accounts,
			'page' => $page
		));
	}
}