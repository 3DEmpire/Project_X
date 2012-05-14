<?php $this->pageTitle=Yii::app()->name; ?>


<?php
	$model =Offer::model()->find('ID='.$_GET['id']);
	//var_dump($model->getAttributes());
	 echo $model->getAttribute('CONTENT');
?>

<div class="Title">
	<?php
		$SomeText=$model->getAttribute('CONTENT');
		echo strlen($SomeText);
	?>
</div>
