<?php
class AccountDetails extends CI_Controller {
	function index($account_no) {
		$account=$this->account->getAccountById($account_no);
		$this->load->view('accountdetailsui', array(
			'account' => $account
		));
	}

	function adjustBalance() {
		$this->load->library('form_validation');

		$this->form_validation->set_rules('add_deduct', 'Add or Deduct', 'matches[add|ded]');
		$this->form_validation->set_rules('amount', 'Amount', 'required');

		if($this->form_validation->run()==FALSE) {
			$this->load->view('accountdetailsui');
			return;
		}

		$account_no=$this->input->post('account_no');
		$add_deduct=$this->input->post('add_deduct');
		$amount=$this->input->post('amount');

		$this->account->adjustBalance($account_no, $add_deduct, $amount);

		$account=$this->account->getAccountById($account_no);
		$this->load->view('accountdetailsui', array(
			'account' => $account
		));
	}
}