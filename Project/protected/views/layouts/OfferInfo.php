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
  $('#slider').nivoSlider();
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
              <div class="ButtonNachalo"><a href="index.php">Начало</a></div>
             </a>
            </li>
            <li class="NavMain">
             <a href="#">
              <div class="ButtonAbout"><a href='?r=offer/zaNas'>За Нас</a></div>
             </a>
            </li>
            <li class="NavMain">
             <a href="#">
              <div class="ButtonLicenz"><a href='?r=admin/admin'>Лиценз</a></div>
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
               <a href="#"><div class="ButtonYzZ_down1">Договор при пътуване със собствен транспорт</div></a>
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
			<!--<div class="ButtonYzZ_down">
					<div class="ButtonYzZ_down1"><a href="#">Договор с клиент за организирано пътуване</a></div>
					<div class="ButtonYzZ_down1"><a href="#">Договор при пътуване със собствен транспорт</a></div>
			</div>-->
			<div id="Contacts">
				<div class="Line994"></div>
				<div id="contactsMain">
					Иванико тур, София 1463, ул.Цар Самуил 3    |     тел./факс: 02/952 31 09    |    e-mail: ivaniko@mail.bg
				</div>
				<div class="Line994"></div>
			</div>
			<div id="Left">
				<div id="Menu">
					<div id="menuMainButs">
									<a href="#"><div id="menuButTop">
										<div class="textTop">Начало</div>
										<div class="icon"></div>
										<div class="clearer"></div>
									</div></a>
									<a href="#" onclick="showPochivki()"><div class="menuBut">
										<div class="text">Почивки</div>
										<div class="icon"></div>
										<div class="clearer"></div>
									</div></a>
									<div id="Pochivki_onclick">
                                      <a href="#"><div class="poch_on_OffText"><a href='?r=/site/rests&country=bg&type=p'>България</div></a>
                                      <a href="#"><div class="poch_on_OffText"><a href='?r=/offer/reststr'>Турция</div></a>
                                      <a href="#"><div class="poch_on_OffText"><a href='?r=/site/rests&country=gr&type=p'>Гърция</div></a>
                                      <a href="#"><div class="poch_on_OffText"><a href='?r=/site/rests&country=esp&type=p'>Испания</div></a>
                                      <a href="#"><div class="poch_on_OffText"><a href='?r=/site/rests&country=it&type=p'>Италия</div></a>
                                      <a href="#"><div class="poch_on_OffText"><a href='?r=/site/rests&country=dr&type=p'>Други страни</div></a>
                                   </div>
									<a href="#"><div class="menuBut">
										<div class="text">Екскурзии</div>
										<div class="icon"></div>
										<div class="clearer"></div>
									</div></a>
									<a href="#"><div class="menuBut">
										<div class="text">Екскурзии</div>
										<div class="icon"></div>
										<div class="clearer"></div>
									</div></a>
									<a href="#"><div class="menuBut">
										<div class="text">Хотели</div>
										<div class="icon"></div>
										<div class="clearer"></div>
									</div></a>
									<a href="#"><div class="menuBut">
										<div class="text"><a href='?r=/site/fbstena'>Круизи</div>
										<div class="icon"></div>
										<div class="clearer"></div>
									</div></a>
									<a href="#"><div class="menuBut">
										<div class="text"><a href='?r=/site/praznici'>ПРАЗНИЦИ</a></div>
										<div class="icon"></div>
										<div class="clearer"></div>
									</div></a>
										<a href="#"><div id="menuButBot">
										<div class="text"><a href='?r=/site/weekends'>Уикенди</a></div>
										<div class="icon"></div>
										<div class="clearer"></div>
									</div></a>
					</div>
					<div class="menuBlue">
						<div class="menuBlueTop">Нещо</div>
						<div class="menuBlueMain">asdasdasdasd</div>
						<div class="menuBlueBot"></div>
					</div>
					<div class="menuBlue">
						<div class="menuBlueTop">facebook</div>
						<div class="menuBlueMain">
							<div class="fb-like-box" data-href="http://www.facebook.com/IvanikoTur" data-width="206" data-show-faces="true" data-border-color="#466a14" data-stream="false" data-header="true"></div>
						</div>
						<div class="menuBlueBot"></div>
					</div>
				</div>
			</div>
			<div id="Mid">
				<div id="Search_big">
					<div id="searchInput">
						<input id="search_big" type="text" maxlength="25" size="15" name="search" />
					</div>
					<div id="searchBut"><a href="#">Намери</a></div>
					<div class="clearer"></div>
				</div>
				<div id="MidMain_big">
					<div id="offTitle">-Оферти-</div>
					<?php echo $content; ?>
				</div>
				<div id="MidBot_big"></div>
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
