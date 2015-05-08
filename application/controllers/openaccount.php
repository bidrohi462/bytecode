<?php
class OpenAccount extends CI_Controller {
	function index() { //shows account creation ui
		$this->load->view('openaccountui');
	}

	function create() { //creates account
		$this->load->library('form_validation');

		// form validation
		$this->form_validation->set_rules('name', 'Name', 'required');
		$this->form_validation->set_rules('phone', 'Phone no', 'required');
		$this->form_validation->set_rules('address', 'Address', 'required');
		$this->form_validation->set_rules('balance', 'Balance', 'required|greater_than_equal_to[500]');

		if($this->form_validation->run()==FALSE) { //if validation failed shows the ui again
			$this->load->view('openaccountui');
			return;
		}

		// create new data from POST data
		$name=$this->input->post('name');
		$phone=$this->input->post('phone');
		$address=$this->input->post('address');
		$balance=$this->input->post('balance');

		$this->account->createAccount($name, $phone, $address, $balance); //creates account with data from the form

		// show main menu with success message
		$this->load->view('mainmenu', array( //shows that account is created
			'msg' => 'Account successfully created.'
		));
	}
}