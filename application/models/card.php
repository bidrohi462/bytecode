<?php
class Card extends CI_Model {
	static function addCard($cardid,$pan,$debitorcredit,$visaormaster,$expdate,$cardlimit,$vercode) {
		$data = array(
			'CardID' => $cardid,
			'PAN' => $pan,
			'DebitOrCredit' => $debitorcredit,
			'VisaOrMaster' => $visaormaster,
			'ExpDate' => $expdate,
			'CardLimit' => $cardlimit,
			'VerificationCode' => $vercode,
		);
		$this->db->insert('Card', $data);
	}
	
}