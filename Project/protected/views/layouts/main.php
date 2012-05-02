<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="language" content="en" />

	<!-- blueprint CSS framework -->
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/screen.css" media="screen, projection" />
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/print.css" media="print" />
	<!--[if lt IE 8]>
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/ie.css" media="screen, projection" />
	<![endif]-->

	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/main.css" />
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/form.css" />
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/style.css" />
	
	<script src="<?php echo Yii::app()->request->baseUrl; ?>/jquery/jquery-1.7.1.min.js" type="text/javascript"></script>
	<script src="<?php echo Yii::app()->request->baseUrl; ?>/jquery/jquery.js" type="text/javascript"></script>
	<script src="<?php echo Yii::app()->request->baseUrl; ?>/jquery/jquery.nivo.slider.js" type="text/javascript"></script>

	<title><?php echo CHtml::encode($this->pageTitle); ?></title>
</head>

<body>
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/bg_BG/all.js#xfbml=1";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
<script type="text/javascript">
$(window).load(function() {
    $('#slider').nivoSlider({
        effect: 'random', // Specify sets like: 'fold,fade,sliceDown'
        slices: 15, // For slice animations
        boxCols: 8, // For box animations
        boxRows: 4, // For box animations
        animSpeed: 500, // Slide transition speed
        pauseTime: 10000, // How long each slide will show
        startSlide: 0, // Set starting Slide (0 index)
        directionNav: true, // Next & Prev navigation
        directionNavHide: true, // Only show on hover
        controlNav: true, // 1,2,3... navigation
        controlNavThumbs: false, // Use thumbnails for Control Nav
        controlNavThumbsFromRel: false, // Use image rel for thumbs
        controlNavThumbsSearch: '.jpg', // Replace this with...
        controlNavThumbsReplace: '_thumb.jpg', // ...this in thumb Image src
        keyboardNav: true, // Use left & right arrows
        pauseOnHover: true, // Stop animation while hovering
        manualAdvance: false, // Force manual transitions
        captionOpacity: 0.8, // Universal caption opacity
        prevText: 'Prev', // Prev directionNav text
        nextText: 'Next', // Next directionNav text
        randomStart: true, // Start on a random slide
        beforeChange: function(){}, // Triggers before a slide transition
        afterChange: function(){}, // Triggers after a slide transition
        slideshowEnd: function(){}, // Triggers after all slides have been shown
        lastSlide: function(){}, // Triggers when last slide is shown
        afterLoad: function(){} // Triggers when slider has loaded
    });
});
</script>
<center>
	<div id="GrandContainer">
		<div id="Header">
			<div id="slider">
				<img src="../Project/css/img/greece.png" width="999" height="302"/>
				<img src="../Project/css/img/turkey.png" width="999" height="302"/>
				<img src="../Project/css/img/sozopol.png" width="999" height="302"/>
				<img src="../Project/css/img/valensia.png" width="999" height="302"/>
				<img src="../Project/css/img/italy.png" width="999" height="302"/>
			</div>
		</div>
		<div id="Nav">
			<ul class="NavMain">
				<li class="NavMain_first">
					<a href="#">
						<div class="ButtonNachalo">Начало</div>
					</a>
				</li>
				<li class="NavMain">
					<a href="#">
						<div class="ButtonAbout">За Нас</div>
					</a>
				</li>
				<li class="NavMain">
					<a href="#">
						<div class="ButtonLicenz">Лиценз</div>
					</a>
				</li>
				<li class="NavMain_drop">
					<a href="#">
						<div class="ButtonYzZ">Условия за записване</div>
						<div class="ButtonYzZHover">Условия за записване</div>
					</a>
					<ul class="SubMenu">
						<li>
							<a href="#"><div class="ButtonYzZ_down1">Договор с клиент за организирано пътуване</div></a>
							<a href="#"><div class="ButtonYzZ_down2">Договор при пътуване със собствен транспорт</div></a>
						</li>
					</ul>
				</li>
				<li class="NavMain">
					<a href="#">
						<div class="ButtonBs">Банкови сметки</div>
					</a>
				</li>
				<li class="NavMain">
					<a href="#">
						<div class="ButtonKont">Контакти</div>
					</a>
				</li>
			</ul>
		</div>
		<div id="Main">
			<div id="Contacts">
				<div class="Line994"></div>
				<div id="contactsMain">
					Иванико тур, София 1463, ул.Цар Самуил 3    |     тел./факс: 02/952 31 09    |    e-mail: ivaniko@mail.bg
				</div>
				<div class="Line994"></div>
			</div>
			<div id="Left">
				<div id="Menu">
							<a href="#"><div id="menuButTop">
								<span class="textTop">Начало</span>
							</div></a>
							<a href="#" onclick="showPochivki()"><div class="menuBut">
								<span class="text">Почивки</span>
							</div></a>
							<div id="Pochivki_onclick">
										<a href="#"><div class="poch_on_OffText">България</div></a>
										<a href="#"><div class="poch_on_OffText">Турция</div></a>

										<a href="#"><div class="poch_on_OffText">Гърция</div></a>

										<a href="#"><div class="poch_on_OffText">Испания</div></a>

										<a href="#"><div class="poch_on_OffText">Италия</div></a>

										<a href="#"><div class="poch_on_OffText">Други страни</div></a>
							</div>
							<a href="#"><div class="menuBut">
								<span class="text">Екскурзии</span>
							</div></a>
							<a href="#"><div class="menuBut">
								<span class="text">Екскурзии</span>
							</div></a>
							<a href="#"><div class="menuBut">
								<span class="text">Хотели</span>
							</div></a>
							<a href="#"><div class="menuBut">
								<span class="text">Круизи</span>
							</div></a>
							<a href="#"><div class="menuBut">
								<span class="text">ПРАЗНИЦИ</span>
							</div></a>
							<a href="#"><div id="menuButBot">
								<span class="text">Уикенди</span>
							</div></a>
				</div>
				<div class="menuBlue">
						<div class="menuBlueTop">Нещо</div>
						<div class="menuBlueMain">asdasdasdasd</div>
						<div class="menuBlueBot"></div>
				</div>
			</div>
			<div id="Mid">
				<div id="Search">
					<div id="searchInput">
						<input id="search" type="text" maxlength="25" size="15" name="search" />
					</div>
					<div id="searchBut"><a href="#">Намери</a></div>
					<div class="clearer"></div>
				</div>
				<div id="MidMain">
					<div id="offTitle">-Оферти-</div>
					<div id="MidMainPhp"><?php echo $content; ?></div>
				</div>
				<div id="MidBot"></div>
			</div>
			<div id="Right">
				<div id="rightBlue">
					<div id="rightBlueTop"></div>
					<div id="rightBlueMain">
						<ul id="TopOferti">
							<li class="blueOff">
								<div class="yellowPointer"></div>
								<div class="blueOffText"><a href="#">Испания 55+</a></div>
								<div class="clearer"></div>
							</li>
							<li class="blueOff">
								<div class="yellowPointer"></div>
								<div class="blueOffText"><a href="#">остров Кипър 55+ Лимасол</a></div>
								<div class="clearer"></div>
							</li>
							<li class="blueOff">
								<div class="yellowPointer"></div>
								<div class="blueOffText"><a href="#">остров Кипър 55+ Пафос</a></div>
								<div class="clearer"></div>
							</li>
							<li class="blueOff">
								<div class="yellowPointer"></div>
								<div class="blueOffText"><a href="#">Валенсия 55+</a></div>
								<div class="clearer"></div>
							</li>
							<li class="blueOff">
								<div class="yellowPointer"></div>
								<div class="blueOffText"><a href="#">Испания 55+</a></div>
								<div class="clearer"></div>
							</li>
							<li class="blueOff">
								<div class="yellowPointer"></div>
								<div class="blueOffText"><a href="#">остров Кипър 55+ Лимасол</a></div>
								<div class="clearer"></div>
							</li>
							<li class="blueOff">
								<div class="yellowPointer"></div>
								<div class="blueOffText"><a href="#">остров Кипър 55+ Пафос</a></div>
								<div class="clearer"></div>
							</li>
						</ul>
					</div>
					<div id="rightBlueBot"></div>
				</div>
				<div class="menuGreen">
						<div class="menuGreenTop">facebook</div>
						<div class="menuGreenMain">
							<div class="fb-like-box" data-href="http://www.facebook.com/IvanikoTur" data-width="206" data-show-faces="true" data-border-color="#466a14" data-stream="false" data-header="true"></div>
						</div>
						<div class="menuGreenBot"></div>
				</div>
			</div>
			<div class="clearer"></div>
		</div>
		<div id="Footer">
			<div class="Line994"></div>
			<span id="FooterLeft">Ivaniko Tour © 1999-2012 Всички права запазени.</span>
			<span id="FooterRight">дизайн и програмиране: 3DEmpire</span>
		</div>
	</div>
	</center>
</body>
</html>
