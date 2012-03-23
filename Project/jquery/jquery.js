$(document).ready(function() {
		
			$('.Button2').hover(function() {
				$(".ButtonYzZ_down").slideDown(120);
				$(".ButtonYzZHover").show();
			}, function () {
				$(".ButtonYzZ_down").slideUp(120);
				$(".ButtonYzZHover").hide();
			});
});
function showPochivki() {
			$("#Pochivki_onclick").stop().slideToggle(500);
}