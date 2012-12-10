$(document).ready(function() {
	$(".login").show();
	$('.noAccount').hide();
	$('.submit').click(function){
		$('.login').hide();
		$('.noAccount').show();
	}
});
