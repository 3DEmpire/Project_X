<?php $this->pageTitle=Yii::app()->name; ?>

<?php
$connection=Yii::app()->db;
$command=$connection->createCommand('SELECT * FROM offers');
$dataReader=$command->query();
$allRows=$command->queryAll();
$row=$command->queryRow();	


for($i=0;$i<sizeof($allRows);$i++) {
	$dest=$allRows[$i]['DEST']; 
	$info=$allRows[$i]['INFO'];
	$price=$allRows[$i]['PRICE'];
	
	if($dest==$_POST['search'] || $info==$_POST['search'])
		echo '
		<div class="off">
			<div class="offPic_1">
				<img src="/Project/uploads/offPic1.png" width="136" height="103"/>
			</div>
			<div class="offText">
				<div class="offTextTitle_1">
					<a href="#">
					',"$dest",'</a>
				</div>
				<div class="line360"></div>
				<div class="offTextDesc">
					',"$info",'
				</div>
				<div class="offTextPrice">
					<div class="offTextPrice_">Цена:</div>
					<div class="offTextPrice_price">',"$price",'$</div>
					<div class="clearer"></div>
				</div>
			</div>
		</div>
		'; 	
}

?>

if(strpos($storable, $find)== true)
