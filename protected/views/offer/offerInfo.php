<?php $this->pageTitle=Yii::app()->name; ?>


<?php
	$model =Offer::model()->find('ID='.$_GET['id']);
	//var_dump($model->getAttributes());
	 echo $model->getAttribute('CONTENT');
?>
