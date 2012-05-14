<?php $this->pageTitle=Yii::app()->name; ?>

<?php
for($i=0;$i<sizeof($modelall);$i++) {
	//$modelall=Alloffers::model()->find('COUNTRY="'.$_GET['country'].'"');
	//echo $model->getAttribute('ID');
	if($_GET['type']=="p"){
		$model=Offer::model()->find('ID='.$modelall[$i]->getAttribute('IDO'));
		if($modelall[$i]->getAttribute('VISIBLE')==1){
			$model->show();	
		}
	}
	if($_GET['type']=="av"){
		$model=AvTrip::model()->find('ID='.$modelall[$i]->getAttribute('IDO'));
		if($modelall[$i]->getAttribute('VISIBLE')==1){
			$model->show();	
		}
	}
	if($_GET['type']=="sa"){
		$model=SaTrip::model()->find('ID='.$modelall[$i]->getAttribute('IDO'));
		if($modelall[$i]->getAttribute('VISIBLE')==1){
			$model->show();	
		}
	}
	
}
?>