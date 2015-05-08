<?php
class EditCard extends CI_Controller {
	function index($cardid) {
		$card=$this->card->getCardById($cardid);
		$this->load->view('editcardui', array(
			'card' => $card
		));
	}

	function editInfo() {
	//	$this->load->library('form_validation');

		// form validation
	//	$this->form_validation->set_rules('name', 'Name', 'required');
	//	$this->form_validation->set_rules('phone', 'Phone no', 'required');
	//	$this->form_validation->set_rules('address', 'Address', 'required');

	//	if($this->form_validation->run()==FALSE) {
	//		$this->load->view('editaccountui');
	//		return;
	//	}

		$cardid=$this->input->post('cardid');
		$pan=$this->input->post('pan');
		$debitorcredit=$this->input->post('debitorcredit');
		$masterorvisa=$this->input->post('masterorvisa');
		$expdate=$this->input->post('expdate');
		$cardlimit=$this->input->post('cardlimit');
		$vercode=$this->input->post('vercode');

		$this->account->editInfo($cardid, $pan, $debitorcredit, $masterorvisa, $expdate, $cardlimit, $vercode);
	}
}