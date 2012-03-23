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

Вид настаняване:

- Единична стая 
Цена 1 нощувка  - 87.00 
Цена 1 нощувка, при 3-5 нощ., лв.- 77.00 
Цена 1 нощувка  при 6- 9 нощ., лв –75.00 
Цена 1 нощувка,  9 и повече нощ., лв.- 70.00 

- Двойна станд. стая (за двама) 
Цена 1 нощувка  - 105.00 
Цена 1 нощувка, при 3-5 нощ., лв.- 95.00 
Цена 1 нощувка  при 6- 9 нощ., лв –90.00 
Цена 1 нощувка,  9 и повече нощ., лв.- 85.00 

- Двойна лукс стая (за двама) 
Цена 1 нощувка  - 125.00 
Цена 1 нощувка, при 3-5 нощ., лв.- 117.00 
Цена 1 нощувка  при 6- 9 нощ., лв –112.00 
Цена 1 нощувка,  9 и повече нощ., лв.- 105.00 


- Апартамент (за четирима) 
Цена 1 нощувка  - 190.00 
Цена 1 нощувка, при 3-5 нощ., лв.- 173.00 
Цена 1 нощувка  при 6- 9 нощ., лв –165.00 
Цена 1 нощувка,  9 и повече нощ., лв.- 156.00 

- Допълнително легло 37.00 

