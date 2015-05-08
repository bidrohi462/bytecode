<?php
class OpenAccount extends CI_Controller {
	function index() {
		$this->load->view('openaccountui');
	}

	function create() {
		$this->load->library('form_validation');

		// form validation
		$this->form_validation->set_rules('name', 'Name', 'required');
		$this->form_validation->set_rules('phone', 'Phone no', 'required');
		$this->form_validation->set_rules('address', 'Address', 'required');
		$this->form_validation->set_rules('balance', 'Balance', 'required|greater_than_equal_to[500]');

		if($this->form_validation->run()==FALSE) {
			$this->load->view('openaccountui');
			return;
		}

		// create new data from POST data
		$name=$this->input->post('name');
		$phone=$this->input->post('phone');
		$address=$this->input->post('address');
		$balance=$this->input->post('balance');

		$this->account->createAccount($name, $phone, $address, $balance);

		// show main menu with success message
		$this->load->view('mainmenu', array(
			'msg' => 'Account successfully created.'
		));
	}
}