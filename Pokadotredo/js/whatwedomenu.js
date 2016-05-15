$(document).ready(function(){
	// $("#whatwedo-menu").hide();
	// $("#whatwedo-menu").css("z-index", 1);
	// $("#whatwedo").hover(function(){
	// 	$("#whatwedo-menu").slideDown();
	// }, function(){
	// 	$("#whatwedo-menu").slideUp();
	// });
	$("#whatwedo").hover(function(e){
		$("#whatwedo-menu").slideToggle();
		e.stopPropagation();
	});
	$(document).hover(function() {
		$('#whatwedo-menu').slideUp();
	});
});