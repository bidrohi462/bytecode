<?php
class Login extends CI_Controller {
	function index() {
		if($this->officer->isUserLoggedIn()) {
			redirect('openaccount');
		}
		$this->load->view('templates/header');
		$this->load->view('loginpage');
		$this->load->view('templates/footer');
	}

	function doLogin() {
		$this->load->library('form_validation');

		// form validation
		/*$this->form_validation->set_rules('username', 'Username', 'required');
		$this->form_validation->set_rules('password', 'Password', 'required');

		if($this->form_validation->run()==FALSE) {
			$this->load->view('loginpage');
			return;
		}*/

		// create new data from POST data
		$username=$this->input->post('username');
		$password=$this->input->post('password');

		if($this->officer->login($username, $password))
			redirect('openaccount');
		else
		$this->load->view('loginpage', array(
			'error' => 'Username and/or password does not match'
		));
	}
}