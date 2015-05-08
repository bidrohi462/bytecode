<?php
class AddCard extends CI_Controller {
	function index($cardid) {
		$card=$this->card->getCardById($cardid);
		$this->load->view('addcardui', array(
			'card' => $card
		));
	}

	function addCard() {
		$card_id=$this->input->post('CardID');
		$pan=$this->input->post('PAN');
		$debitorcredit=$this->input->post('DebitOrCredit');
		$visaormaster=$this->input->post('VisaOrMaster');
		$expdate=$this->input->post('ExpDate');
		$cardlimit=$this->input->post('CardLimit');
		$vercode=$this->input->post('VerificationCode');
	}
}