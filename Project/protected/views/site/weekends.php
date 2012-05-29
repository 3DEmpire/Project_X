<?php $this->pageTitle=Yii::app()->name; ?>

<?php

for($i=0;$i<sizeof($modelall);$i++) {
	//$modelall=Alloffers::model()->find('COUNTRY="'.$_GET['country'].'"');
	//echo $model->getAttribute('ID');
	$model=Offer::model()->find('ID='.$modelall[$i]->getAttribute('IDO'));
	if($modelall[$i]->getAttribute('VISIBLE')==1){
		$model->show();	
	}

	
}
?>