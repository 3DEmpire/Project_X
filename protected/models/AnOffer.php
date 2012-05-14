<?php
class AnOffer {
	private $dest_;
	private $info_;
	private $price_;
	private $image_;
	private $content_;
	private $ID_;
	
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
		$this->content_=$Row['CONTENT'];
		$this->ID_=$Row['ID'];
	}
	
	public function getData(){
		$column=array(
			'DEST'=>$this->dest_,
			'INFO'=>$this->info_,
			'PRICE'=>$this->price_,
			'IMAGE'=>$this->image_,
			'ID'=>$this->ID_,
		);
		return $column;
	}
	public function getContent(){
		return $this->content_;
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
	
	public function getImage(){
		return $this->image_;
	}
	
	public function getID(){
		return $this->ID_;
	}
		
	public function show(){
		echo '
			<div class="off">
				<div class="offPic_1">
					<img src="/Project/images/',$this->image_,'" width="136" height="103"/>
				</div>
				<div class="offText">
					<div class="offTextTitle_1">
						<a href="?r=/offer/offerInfo&id=',$this->getID(),'">
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
	
	public function save(){
			$connection=Yii::app()->db;
			//$command=$connection->createCommand();
			//$command->insert('offers',$this->getData());
			
			$query="INSERT INTO  `offers` (`ID` ,`DEST` ,`INFO` ,`PRICE` ,`IMAGE`)VALUES (NULL,'$this->dest_','$this->info_','$this->price_','$this->image_')";
			$command=$connection->createCommand($query);
			$command->execute();

	}
	
}
?>