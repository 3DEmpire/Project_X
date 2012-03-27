<?php $this->pageTitle=Yii::app()->name; ?>


<?php

for($i=0;$i<sizeof($allRows);$i++) {
	$model=new AnOffer();
	$model->setData($allRows[$i]);
	//$image=$allRows[$i]['IMAGE'];
	$model->show();
	
}
?>
