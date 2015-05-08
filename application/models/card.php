<?php
class Card extends CI_Model {
	function addCard($cardid,$pan,$debitorcredit,$visaormaster,$expdate,$cardlimit,$vercode) {
		$data = array(
			'CardID' => $cardid,
			'PAN' => $pan,
			'DebitOrCredit' => $debitorcredit,
			'VisaOrMaster' => $visaormaster,
			'ExpDate' => $expdate,
			'CardLimit' => $cardlimit,
			'VerificationCode' => $vercode,
		);
		//$query=$this->db->insert('Card', $data);
		//if(!$query) {}
	}

	function getCardById($card_id) {
		$this->db->where('CardID', $card_id);
		$query=$this->db->get('Card');

		if($query->num_rows()==0) return null;
		return $query->first_row();
	}

	function getCardByHolder($name, $cvc) {
		$this->db->where('Name', $card_id);
		$query=$this->db->get('Card');

		if($query->num_rows()==0) return null;
		foreach($query->result() as $row) {
			if($row->VerificationCode==$cvc)
				return $row;
		}
		return null;
	}
	
	function deduct($card_id, $amount) {
		$card=$this->card->getCardById($card_id);
		$amount=$card->CardLimit-$amount;
		if($amount<0) return false;

		$this->db->where('CardID', $card_id);
		$this->db->update('Card', 'CardLimit', $amount);
		return true;
	}
}