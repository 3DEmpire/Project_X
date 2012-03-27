<?php
class ImageStack {
	private $name_;

	public function setName($Name){
		$this->name_=$Name;
	}
	
	public function getName(){
		$Name=$this->name_;
		return $Name;
	}
	
}
?>