<?php
class EditAccount extends CI_Controller {
	function index($account_no) {
		$account=$this->account->getAccountById($account_no);
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

		$this->account->editInfo($account_no, $name, $phone, $address);
	}
}