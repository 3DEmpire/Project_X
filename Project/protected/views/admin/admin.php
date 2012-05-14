<?php $this->pageTitle=Yii::app()->name; ?>
<script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/jquery/AJAXadminType.js"></script>
<script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/tinymce/jscripts/tiny_mce/tiny_mce.js" ></script>
<script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/jquery/TinyMce.js"></script>
<style>

	
</style>

<form name="AdminOffer" method="post" enctype="multipart/form-data"  action='?r=/admin/admin' id="form">
	<div id="formAll">
    	<div id="left">
        	<div id="headerNew">Нова оферта
            </div>
            <label>Тип на офертата:</label>
            <select id="type" name="Type" onchange="showButton(this.value)">
                <option value="0">Изберете</option>
                <option value="p">Почивка</option>
                <option value="av">Екскурзия Рейс</option>
                <option value="sa">Екскурзия Самолет</option>
            </select>
            <div id="myDiv">
                
            </div>
        </div>		
        <div id="tinymce">	
        	<textarea name="content" cols="50" rows="15"></textarea>
        </div>
        <div id="submit">
        	<input name="Submit" type="submit" value="Submit">
        </div>
	</div>
</form>
<h2><a href='index.php'>Back</a></h2>