<?php
class AddCard extends CI_Controller {
	function index($account_no) {
		$account=$this->Account->getAccountById($account_no);
		$this->load->view('addcardui', array(
			'account' => $account
		));
	}

	function addCard() {
		$card_id=$this->input->post('CardID');
	}
}