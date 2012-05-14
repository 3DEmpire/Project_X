<?php
echo '      
 	       <fieldset>
           <label for="country">Country:</label>
           <select id="country" name="Country">
              <option value="bg">България</option>
              <option value="tr" disabled="disabled">Турция</option>
              <option value="gr">Гърция</option>
              <option value="esp">Испания</option>
              <option value="it">Италия</option>
              <option value="dr">Други страни</option>
           </select>
		   </fieldset>
           
		   <fieldset>
           <label for="visible">Visible:</label>
           <select id="visible" name="Visible">
              <option value=1>Visible</option>
              <option value=0>Not Visible</option>
           </select>
		   </fieldset>
		   
           <fieldset>
           <label for="dest">Destination:</label>
		   <input type="text" name="Dest" id="dest" required=”true” placeholder="Zaglavie">
       	   </fieldset>
		   
		   <fieldset>
		   <label for="info">Opisanie:</label>
		   <input type="text" name="Info" id="info" required=”true” placeholder="Kratko Opisanie">
		   </fieldset>
		   
		   <fieldset>
           <label for="price">Price:</label>
		   <input type="text" name="Price" id="price" required=”true” placeholder="Cena">
		   </fieldset>
		   
		   <fieldset>
           <label for="image">Image:</label>
		   <input type="file" name="image" id="image" required=”true”>
		   </fieldset>
';
?>