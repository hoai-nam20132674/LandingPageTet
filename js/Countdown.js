$(document).ready(function(){

	$("#dang-ky-uu-dai").modal('show');
	
	$("#d").countdown("2018/02/16", function(event) {
		$(this).text(
			event.strftime('%D')
			);
	});
	$("#h").countdown("2018/02/16", function(event) {
		$(this).text(
			event.strftime('%H')
			);
	});
	$("#m").countdown("2018/02/16", function(event) {
		$(this).text(
			event.strftime('%M')
			);
	});
	$("#s").countdown("2018/02/16", function(event) {
		$(this).text(
			event.strftime('%S')
			);
	});
});