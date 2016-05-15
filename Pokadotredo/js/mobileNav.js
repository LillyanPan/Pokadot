$(document).ready(function() {
	$("button.hamburger").on("click", function(event) {
		console.log("here");
		this.classList.toggle("is-active");
		$(".menubar ul").toggleClass("active");
		// $("body").toggleClass("blockout");

		event.preventDefault();
	})
})