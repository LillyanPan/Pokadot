$(document).ready(function(){
	$("#show-full-letter").click(function(){
		$("#full-letter").slideToggle();
		var show = $("#show-full-letter").text().trim().indexOf("more") != -1;
		if (show)
			txt = "Read less \u25B2";
		else
			txt = "Read more \u25BC";
		$("#show-full-letter").text(txt);
	});
});