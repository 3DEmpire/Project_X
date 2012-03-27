<?php
class AnOffer {
	private $dest_;
	private $info_;
	private $price_;
	private $image_;
	
	public function _contstructor(){
		$this->dest_=NULL;
		$this->info_=NULL;
		$this->price_=NULL;
		$this->image_=NULL;
	}
	
	public function setData($Row){
		$this->dest_=$Row['DEST']; 
		$this->info_=$Row['INFO'];
		$this->price_=$Row['PRICE'];
		$this->image_=$Row['IMAGE'];
	}
	
	public function getData(){
		$column=array(
			'DEST'=>$this->dest_,
			'INFO'=>$this->info_,
			'PRICE'=>$this->price_,
			'IMAGE'=>$this->image_,
		);
		return $column;
	}
	
	public function getDest(){
		return $this->dest_;
	}
	
	public function getInfo(){
		return $this->info_;
	}
	
	public function getPrice(){
		return $this->price_;
	}
	
	public function show(){
		echo '
			<div class="off">
				<div class="offPic_1">
					<img src="/Project/images/',$this->image_,'" width="136" height="103"/>
				</div>
				<div class="offText">
					<div class="offTextTitle_1">
						<a href="#">
						',"$this->dest_",'</a>
					</div>
					<div class="line360"></div>
					<div class="offTextDesc">
						',"$this->info_",'
					</div>
					<div class="offTextPrice">
						<div class="offTextPrice_">Цена:</div>
						<div class="offTextPrice_price">',"$this->price_",'$</div>
						<div class="clearer"></div>
					</div>
				</div>
			</div>
		'; 
	}
	
	public function getImage(){
		return $this->image_;
	}
	
	public function save(){
			$connection=Yii::app()->db;
			$command=$connection->createCommand();
			$command->insert('offers',$this->getData());
	}
	
}
?>