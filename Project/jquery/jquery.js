$(document).ready(function() {
			Navigation();
			
			window.setInterval(hearderChanging, 1000);
			var i = 0;
			var image = $('#Header');
			function headerChanging() { 
					if (i < 2) {
						i++;
						$(image).css({
						'background' : 'url(img/header.png) no-repeat',
						'width' : '999px',
						'height' : '302px'
						});
					} else {
						i = 0;
						$(image).css({
						'background' : 'url(img/header.png) no-repeat',
						'width' : '999px',
						'height' : '302px'
						});
					} 
          
			}
});
function Navigation() {
	var subMenus = $("ul.NavMain ul.SubMenu");
	
	subMenus.hide();	
	subMenus.parent("li").find("a:first").addClass("subtitle");	
		
	setNavigationHoverEvents();
}

function setNavigationHoverEvents() {
	$("ul.NavMain li").hover(
		function()
		{		
			$(this).parents("ul.SubMenu:hidden");			
			$(this).find("ul.SubMenu:first").slideDown(150);
		},
		function()
		{		
			$(this).find("ul.SubMenu:first").hide();
		}
	);
	$("ul.NavMain li.NavMain_drop").hover(
		function() {
			$(".ButtonYzZHover").show();
		},
		function() {
			$(".ButtonYzZHover").hide();
		}
	);
}

function showPochivki() {
			$("#Pochivki_onclick").stop().slideToggle(500);
}
