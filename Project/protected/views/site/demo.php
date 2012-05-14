<?php $this->pageTitle=Yii::app()->name; ?>

<?php
for($i=0;$i<sizeof($allRows);$i++) {
	$model =Offer::model()->find('ID='.$allRows[$i]['ID']);
	//echo $model->getAttribute('ID');
	$model->show();	
}
?>