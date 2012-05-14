<?php $this->pageTitle=Yii::app()->name; ?>


<?php

for($i=0;$i<sizeof($allRows);$i++) {
	$model2=new AnOffer();
	$model2->setData($allRows[$i]);
	$model2->show();
	
	//echo $model->getContent();
	
}
?>
