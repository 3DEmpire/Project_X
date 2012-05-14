<?php $this->pageTitle=Yii::app()->name; ?><head>
<style>
	#dogovor{
		background-color:#F4F4F4;
	}
	form{
		padding-left:15px;
		background-color:#FFF;
		width:700px;
	}
	label{
		text-align:left;
		line-height:25px;
		width:200px;
		float:left;
	}
	input,select,textarea{
		float:left;
	}
	.clear{
		clear:both;
	}
	#moreInfo{
		margin-top:10px;
		padding-bottom:10px;
		padding-left:20px;
		text-align:left;
	}
	#imp{
		font-size:11px;
		color:#FF0000;
	}
	hr{
		color:#999;	
		margin:0 0 0;
		padding:0 0 0;
	}
</style>
</head>


Пълна информация <a href="#">тук</a>
<form action='?r=offer/reserved' method="post">
<div class="field">
	<label>Дестинация:</label>
    <input type="text" value="offer.getAttribute('DEST')" />
    <div class="clear"></div>
    <hr/>
</div>

<div class="field">
	<label>Дата:</label>
    <input type="text" value="offer.getAttribute('DATE')" />
    <div class="clear"></div>
    <hr/>
</div>

<div class="field">
	<label>Качване от:</label>
    <select>
    	<option>Моля изберете</option>
    	<option>София</option>
        <option>Пловдив</option>
        <option>Варна</option>
    </select>
    <div class="clear"></div>
    <hr/>
</div>

<div class="field">
	<label>Брой туристи:</label>
    <input type="text" size="3" /> в т.ч. 
    <input type="text" size="3"/>бр. деца от 2 до 12 г.
    <div class="clear"></div>
    <hr/>
</div>

<div class="field">
	<label>Настаняване / вид стаи:</label>
    <select>
    	<option>Моля изберете</option>
    	<option>София</option>
        <option>Пловдив</option>
        <option>Варна</option>
    </select>
    <div class="clear"></div>
    <hr />
</div>

<div class="field">
	<label>Хранене на база:</label>
    <select>
    	<option>Моля изберете</option>
    	<option>София</option>
        <option>Пловдив</option>
        <option>Варна</option>
    </select>
    <div class="clear"></div>
    <hr />
</div>

<fieldset id="dogovor">
	<div class="field">
		<label>Трите Ви имена по паспорт:  *</label>
        <input type="text" />
        <div class="clear"></div>
        <hr />
    </div>
    <div class="field">
		<label>ЕГН:  </label>
        <input type="text" />
        <div class="clear"></div>
        <hr />
    </div>
    <div class="field">
    	<label> № паспорт/лична карта:  </label>
        <input type="text" />
        <div class="clear"></div>
        <hr />
    </div>
    <div class="field">
    	<label>Град:  </label>
        <input type="text" />
        <div class="clear"></div>
        <hr />
    </div>
    <div class="field">
    	<label>Пощенски Код:  </label>
        <input type="text" />
        <div class="clear"></div>
        <hr />
    </div>
    <div class="field">
    	<label>Адрес:  </label>
        <input type="text" />
        <div class="clear"></div>
        <hr />
    </div>
</fieldset>

<div class="field">
	<label>E-mail:</label>
    <input type="text" value="offer.getAttribute('DATE')" />
    <div class="clear"></div>
    <hr />
</div>

<div class="field">
	<label> Телефон:</label>
    <input type="text" value="offer.getAttribute('DATE')" />
    <div class="clear"></div>
    <hr />
</div>

<div class="field">
	<label>Факс:</label>
    <input type="text" value="offer.getAttribute('DATE')" />
    <div class="clear"></div>
    <hr />
</div>

<div class="field">
	<label> Начин на плащане:</label>
    <select>
    	<option>Моля изберете</option>
    	<option>София</option>
        <option>Пловдив</option>
        <option>Варна</option>
    </select>
    <div class="clear"></div>
    <hr />
</div>

<div class="field">
	<label>Коментар и допълнителна информация:</label>
    <textarea></textarea>
    <div class="clear"></div>
    <hr />
</div>

<input type="submit" value="Изпрати ">

<div class="clear"></div>
<div id="moreInfo">
Повече информация и резервации: <br />
ЗА СОФИЯ И СТРАНАТА: 02/951-57-57, 02/953-10-74, 02/953-10-75 <br />
ЗА СТАРА ЗАГОРА: 042/644-644 <br />
ПО ИНТЕРНЕТ: office@emeraldbg.com <br />
</div>
</form>


<div id="imp">
* Уважаеми клиенти, информацията публикувана на този сайт е с информационна и рекламна цел и е възможно да са допуснати грешки. Съгласно чл.28, ал.2 от ЗТ достоверна и вярна се счита информацията, предоставена в офисите на Емералд травел или на оторизираните агенти! 
</div>
