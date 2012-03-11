$(document).ready(function() {
		
		$(".ButtonYzZ").bind('click', slideDown);
		
		function slideDown() {
			$(".ButtonYzZ_down").slideToggle(300);
		}
});
function showPochivki() {
			$("#Pochivki_onclick").slideToggle(500);
}