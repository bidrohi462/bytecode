<?php
class AccountDetails extends CI_Controller {
	function index($account_no) {
		if(!$this->officer->isUserLoggedIn()) redirect('login');
		
		$account=$this->account->getAccountById($account_no);
		$this->load->view('templates/header');
		$this->load->view('accountdetailsui', array(
			'account' => $account
		));
		$this->load->view('templates/footer');
	}

	function adjustBalance() {
		$this->load->library('form_validation');

		$this->form_validation->set_rules('choice', 'Add or Deduct', 'required');
		$this->form_validation->set_rules('amount', 'Amount', 'required');

		if($this->form_validation->run()==FALSE) {
			$this->load->view('templates/header');
			$this->load->view('accountdetailsui');
			$this->load->view('templates/footer');
			return;
		}

		$account_no=$this->input->post('account_no');
		$add_deduct=$this->input->post('choice');
		$amount=$this->input->post('amount');

		$this->account->adjustBalance($account_no, $add_deduct, $amount);

		$account=$this->account->getAccountById($account_no);
		$this->load->view('templates/header');
		$this->load->view('accountdetailsui', array(
			'account' => $account
		));
		$this->load->view('templates/footer');
	}
}