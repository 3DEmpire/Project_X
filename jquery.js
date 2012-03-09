$(function() {
		$(".ButtonNachalo").hover(function(){
			$(".ButtonNachaloHover").fadeIn(1000);
		},
		function(){
			$(".ButtonNachaloHover").fadeOut(1000);
		});
});
function showPochivki() {
			$("#Pochivki_onclick").slideToggle(500);
}