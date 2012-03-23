<?php $this->pageTitle=Yii::app()->name; ?>


<?php


//foreach($dataReader as $row) {
for($i=0;$i<sizeof($allRows);$i++) {
	$dest=$allRows[$i]['DEST']; 
	$info=$allRows[$i]['INFO'];
	$price=$allRows[$i]['PRICE'];
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





<!--<div class="off">
	<div class="offPic_1">
		<img src="<?php echo Yii::app()->request->baseUrl; ?>/uploads/offPic1.png" width="136" height="103"/>
	</div>
	<div class="offText">
		<div class="offTextTitle_1">
			<a href="#">
           	<?php echo $allRows[1]['DEST']; ?></a>
		</div>
		<div class="line360"></div>
		<div class="offTextDesc">
			<?php echo $allRows[1]['INFO']; ?>
		</div>
		<div class="offTextPrice">
			<div class="offTextPrice_">Цена:</div>
			<div class="offTextPrice_price"><?php echo $allRows[1]['PRICE']; ?>$</div>
			<div class="clearer"></div>
		</div>
	</div>
</div>-->
