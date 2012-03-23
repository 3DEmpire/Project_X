<?php
class AnOffer {
	private $dest_;
	private $info_;
	private $price_;
	
	public function _contstructor(){
		$this->dest_=NULL;
		$this->info_=NULL;
		$this->price_=NULL;
	}
	
	public function setData($allRows){
		$this->dest_=$allRows[0]['DEST']; 
		$this->info_=$allRows[0]['INFO'];
		$this->price_=$allRows[0]['PRICE'];
	}
	
	public function getData(){
		$column=array(
			'DEST'=>$this->dest_,
			'INFO'=>$this->info_,
			'PRICE'=>$this->price_,
		);
		return $column;
	}
	
}
?>