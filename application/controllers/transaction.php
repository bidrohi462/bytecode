<?php
class Transaction extends CI_Controller {
	function index() {
		$name=$this->input->post('name');
		$pan=$this->input->post('pan');
		$expiry=$this->input->post('expiry');
		$cvc=$this->input->post('cvc');
		$amount=$this->input->post('amount');
		$timestamp=time();

		$card=$this->card->getCardByHolder($name, $cvc);
		if(is_null($card)) {
			header('400 Bad Request');
			die;
		}
		if(!$card->deduct($card->CardID, $amount)) {
			header('400 Bad Request');
			die;
		}
		header('200 OK');
	}
}