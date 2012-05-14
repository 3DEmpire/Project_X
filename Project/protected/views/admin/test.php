<?php $this->pageTitle=Yii::app()->name; ?>
<script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/jquery/AJAXadminType.js"></script>
<script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/tinymce/jscripts/tiny_mce/tiny_mce.js" ></script>
<script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/jquery/TinyMce.js"></script>

<form name="Prices" method="post" action='?r=/admin/test'>
    <textarea name="Text" cols="60" rows="10"></textarea>
    <input type="submit" value="Submit price table" />
</form>
<?php
	$storable='pricetable:';
	for ($i = 0; $i < strlen($result); $i++) {
		if($result[$i] > chr(47) && $result[$i] < chr(58) &&$i+2 <strlen($result)){
			if($result[$i+1] > chr(47) && $result[$i+1] < chr(58)){
				if($result[$i+2] > chr(47) && $result[$i+2] < chr(58)){
					$storable .=$result[$i];
					$storable .=$result[$i+1];
					$storable .=$result[$i+2];
					$storable .=',';
					
					//echo $result[$i];echo $result[$i+1];echo $result[$i+2];echo ',';
				}
			}		
		}
		if (ord($result[$i]) == '\\' && $result[$i+1] == 'n') {
			echo "The first character of is a line feed.\n";
		}    
	}
	echo $storable;
	$ar_res = explode("\n",$result);
	var_dump($ar_res);




	$filename = 'E:\wamp\www\Project\temp\London_3 nights.htm';
	$docc = fopen($filename , "r");
		
	while (!feof($docc)) {
		$line_of_text = fgets($docc);
		$storable .= $line_of_text;
	}
	fclose($docc);
	
	$find = "<title>";
	$find_end= '</table>';
	
	$rdy=false
	while($rdy==false)
		$begin = strpos($storable, $find);
		$end = strpos($storable, $find);
		
		if(strpos($storable, $find)== true || strpos($storable, $find_end)== true){
			//$begin = strpos($storable, $find);
			//$end   = strpos($storable, $find_end);
			//$table_code = substr($storable,$begin,$end-$begin);
			$found=true;;
		}
	
	echo $table_code;

?>