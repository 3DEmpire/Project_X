<?php $this->pageTitle=Yii::app()->name; ?>
<script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/jquery/AJAXadminType.js"></script>
<script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/tinymce/jscripts/tiny_mce/tiny_mce.js" ></script>
<script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/jquery/TinyMce.js"></script>
<style>

	
</style>

<form name="AdminOffer" method="post" enctype="multipart/form-data"  action='?r=/admin/admin' id="form" style="height:350px">
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

<form name="EditOffer" method="post" action="?r=/admin/edit" id="Editform">
    <div id="Edit">
        <label>Izberete koq oferta iskate da promenite:</label>
        <select id="edit" name="Editt">
        	<option value="00">Choose</option>
            <?php
				for($i=0;$i<sizeof($modelall);$i++){
					if($modelall[$i]->getAttribute('TYPE')=='p'){
						$model=Offer::model()->find('ID='.$modelall[$i]->getAttribute('IDO'));
					}
					if($modelall[$i]->getAttribute('TYPE')=='av'){
						$model=AvTrip::model()->find('ID='.$modelall[$i]->getAttribute('IDO'));
					}
					if($modelall[$i]->getAttribute('TYPE')=='sa'){
						$model=SaTrip::model()->find('ID='.$modelall[$i]->getAttribute('IDO'));
					}
					echo '
						<option value="'.$modelall[$i]->getAttribute('ID').'">'.$model->getAttribute('DEST').'</option>
					';
				}
            ?>
        </select>
        <input type="submit" name="Edit" value="Edit" />
    </div>
</form>



<form name="DeleteOffer" method="post" action="?r=/admin/edited" id="Deleteform">
    <div id="Delete">
        <label>Izberete koq oferta iskate da Iztriete:</label>
        <select id="delete" name="Deletee">
        	<option value="00">Choose</option>
            <?php
				for($i=0;$i<sizeof($modelall);$i++){
					if($modelall[$i]->getAttribute('TYPE')=='p'){
						$model=Offer::model()->find('ID='.$modelall[$i]->getAttribute('IDO'));
					}
					if($modelall[$i]->getAttribute('TYPE')=='av'){
						$model=AvTrip::model()->find('ID='.$modelall[$i]->getAttribute('IDO'));
					}
					if($modelall[$i]->getAttribute('TYPE')=='sa'){
						$model=SaTrip::model()->find('ID='.$modelall[$i]->getAttribute('IDO'));
					}
					echo '
						<option value="'.$modelall[$i]->getAttribute('ID').'">'.$model->getAttribute('DEST').'</option>
					';
				}
            ?>
        </select>
        <input type="submit" name="Delete" value="Delete" />
    </div>
</form>
<h2><a href='index.php'>Back</a></h2>