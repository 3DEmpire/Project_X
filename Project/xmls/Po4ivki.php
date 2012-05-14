<?php
echo '      
 	       <div class="field hl">
           <label for="country">Държава:</label>
           <select id="country" name="Country">
              <option value="bg">България</option>
              <option value="tr" disabled="disabled">Турция</option>
              <option value="gr">Гърция</option>
              <option value="esp">Испания</option>
              <option value="it">Италия</option>
              <option value="dr">Други страни</option>
           </select>
		   </div>
           
		   <div class="field">
           <label for="visible">Видимост:</label>
           <select id="visible" name="Visible">
              <option value=1>Видима</option>
              <option value=0>Скрита</option>
           </select>
		   </div>
		   
		   <div class="field hl">
           <label for="praznik">Празник:</label>
           <select id="praznik" name="Praznik">
              <option value=1>Да</option>
              <option value=0>Не</option>
           </select>
		   </div>
		   
		   <div class="field">
           <label for="weekend">Уикенд:</label>
           <select id="weekend" name="Weekend">
              <option value=1>Да</option>
              <option value=0>Не</option>
           </select>
		   </div>
		   
		   <div class="field hl">
           <label for="topoffer">Топ оферта</label>
           <select id="topoffer" name="Topoffer">
              <option value=1>Да</option>
              <option value=0>Не</option>
           </select>
		   </div>
		   
           <div class="field">
           <label for="dest">Дестинация:</label>
		   <input type="text" name="Dest" id="dest" required=”true” placeholder="Заглавие">
       	   </div>
		   
		   <div class="field hl">
		   <label for="info">Описание:</label>
		   <input type="text" name="Info" id="info" required=”true” placeholder="Кратко описание">
		   </div>
		   
		   <div class="field">
           <label for="price">Цена:</label>
		   <input type="text" name="Price" id="price" required=”true” placeholder="Цена">
		   </div>
		   
		   <div class="field hl">
           <label for="image">Картинка:</label>
		   <input type="file" name="image" id="image" required=”true”>
		   </div>
		   
		   <div class="field">
		   <label for="table">Tablica:</label>
		   <input type="text" id="table" name="Table" required="true">
		   </div>';
		   

?>