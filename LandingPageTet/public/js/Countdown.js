$(document).ready(function(){
	// function checkRequest(){
	// 	var ten = document.getElementById("ten").val();
	// 	var sdt = document.getElementById("sdt").val();
	// 	if(ten==""){
	// 		document.getElementById("messageten").innerHTML ="Vui lòng nhập tên";
	// 	}
	// 	if(sdt==""){
	// 		document.getElementById("messagesdt").innerHTML ="Vui lòng nhập số điện thoại";
	// 	}

	// }
	$("div.alert").delay(3000).slideUp();

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