<?php
class EditAccount extends CI_Controller {
	function index($account_no) {
		$account=$this->Account->getAccountById($account_no);
		$this->load->view('editaccountui', array(
			'account' => $account
		));
	}

	function editInfo() {
		$this->load->library('form_validation');

		// form validation
		$this->form_validation->set_rules('name', 'Name', 'required');
		$this->form_validation->set_rules('phone', 'Phone no', 'required');
		$this->form_validation->set_rules('address', 'Address', 'required');

		if($this->form_validation->run()==FALSE) {
			$this->load->view('editaccountui');
			return;
		}

		$account_no=$this->input->post('account_no');
		$name=$this->input->post('name');
		$phone=$this->input->post('phone');
		$address=$this->input->post('address');

		$this->Account->editInfo($account_no, $name, $phone, $address);
	}

	function adjustBalance() {
		$this->load->library('form_validation');

		$this->form_validation->set_rules('add_deduct', 'Add or Deduct', 'matches[add|ded]');
		$this->form_validation->set_rules('amount', 'Amount', 'required');

		if($this->form_validation->run()==FALSE) {
			$this->load->view('editaccountui');
			return;
		}

		$account_no=$this->input->post('account_no');
		$add_deduct=$this->input->post('add_deduct');
		$amount=$this->input->post('amount');

		$this->Account->adjustBalance($account_no, $add_deduct, $amount);
	}
}