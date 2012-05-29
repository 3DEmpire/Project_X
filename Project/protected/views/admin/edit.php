<?php $this->pageTitle=Yii::app()->name; ?>
<script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/tinymce/jscripts/tiny_mce/tiny_mce.js" ></script>
<script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/jquery/TinyMce.js"></script>

<?php
	if($modelall->getAttribute('TYPE')=='p'){
		$model=Offer::model()->find('ID='.$modelall->getAttribute('IDO'));
	}
	if($modelall->getAttribute('TYPE')=='av'){
		$model=AvTrip::model()->find('ID='.$modelall->getAttribute('IDO'));
	}
	if($modelall->getAttribute('TYPE')=='sa'){
		$model=SaTrip::model()->find('ID='.$modelall->getAttribute('IDO'));
	}
	
?>
<form name="EditingOffer" method="post" action="?r=/admin/edited" id="Editform">
<div class="field hl">
			<input type="hidden" name="ID_" <?php echo ' value="'.$modelall->getAttribute('ID').'"'; ?>/>
            <input type="hidden" name="Type" value="<?php echo $modelall->getAttribute('TYPE') ?>"/>
           <label for="country">Държава:</label>
           <select id="country" name="Country">
              <option value="bg" <?php if($modelall->getAttribute('COUNTRY')=='bg') echo 'selected="selected"' ?>>България</option>
              <option value="tr" disabled="disabled">Турция</option>
              <option value="gr" <?php if($modelall->getAttribute('COUNTRY')=='gr') echo 'selected="selected"' ?>>Гърция</option>
              <option value="esp" <?php if($modelall->getAttribute('COUNTRY')=='esp') echo 'selected="selected"' ?>>Испания</option>
              <option value="it" <?php if($modelall->getAttribute('COUNTRY')=='it') echo 'selected="selected"' ?>>Италия</option>
              <option value="dr" <?php if($modelall->getAttribute('COUNTRY')=='dr') echo 'selected="selected"' ?>>Други страни</option>
           </select>
		   </div>
           
		   <div class="field">
           <label for="visible">Видимост:</label>
           <select id="visible" name="Visible">
              <option value=1 <?php if($modelall->getAttribute('VISIBLE')=='1') echo 'selected="selected"' ?>>Видима</option>
              <option value=0 <?php if($modelall->getAttribute('VISIBLE')=='0') echo 'selected="selected"' ?>>Скрита</option>
           </select>
		   </div>
		   
		   <div class="field hl">
           <label for="praznik">Празник:</label>
           <select id="praznik" name="Praznik">
              <option value=1 <?php if($modelall->getAttribute('PRAZNIK')=='1') echo 'selected="selected"' ?>>Да</option>
              <option value=0 <?php if($modelall->getAttribute('PRAZNIL')=='0') echo 'selected="selected"' ?>>Не</option>
           </select>
		   </div>
		   
		   <div class="field">
           <label for="weekend">Уикенд:</label>
           <select id="weekend" name="Weekend">
              <option value=1 <?php if($modelall->getAttribute('WEEKEND')=='1') echo 'selected="selected"' ?>>Да</option>
              <option value=0 <?php if($modelall->getAttribute('WEEKEND')=='0') echo 'selected="selected"' ?>>Не</option>
           </select>
		   </div>
		   
		   <div class="field hl">
           <label for="topoffer">Топ оферта</label>
           <select id="topoffer" name="Topoffer">
              <option value=1 <?php if($modelall->getAttribute('TOPOFFER')=='1') echo 'selected="selected"' ?>>Да</option>
              <option value=0 <?php if($modelall->getAttribute('TOPOFFER')=='0') echo 'selected="selected"' ?>>Не</option>
           </select>
		   </div>
		   
           <div class="field">
           <label for="dest">Дестинация:</label>
		   <input type="text" name="Dest" id="dest" required=”true” placeholder="Заглавие" <?php echo 'value="'.$model->getAttribute('DEST').'"'; ?>>
       	   </div>
		   
		   <div class="field hl">
		   <label for="info">Описание:</label>
		   <input type="text" name="Info" id="info" required=”true” placeholder="Кратко описание" <?php echo 'value="'.$model->getAttribute('INFO').'"'; ?>>
		   </div>
		   
		   <div class="field">
           <label for="price">Цена:</label>
		   <input type="text" name="Price" id="price" required=”true” placeholder="Цена" <?php echo 'value="'.$model->getAttribute('PRICE').'"'; ?>>
		   </div>
		   
		   <div class="field hl">
           <label for="image">Картинка:</label>
		   <input type="file" name="imagee" id="imagee" />
		   </div>
           
           <div>
           <?php echo ' <img src="/Project/images/'.$model->getAttribute('IMAGE').'" width="136" height="103"/>' ?>
           </div>
                      
           <div id="tinymce">	
        	<textarea name="content" cols="50" rows="15"><?php echo $model->getAttribute('CONTENT'); ?></textarea>
           </div>
           
           <input type="submit" name="submit" value="Save Changes">
           
</form>
