$(document).ready(function() { 
	var form = $("#contact-form");
	var formMessage = $("#form-messages");

	$(form).on("submit", function(event) {
		//Prevent submission
		event.preventDefault();
		var formData = $(form).serialize();

		//should disable?
		// $("#contactButton").attr("disabled", "disabled");

		$.ajax({
			type: 'POST',
			url: $(form).attr("action"),
			data: formData
		})
		.done(function(response) {
			console.log("success");
			$(formMessage).removeClass("error");
			$(formMessage).addClass("success");

			$(formMessage).text("Your message was sent! Thanks for stopping by!");

			//Clear form
			$("#contact-name-field").val('');
			$("#contact-email-field").val('');
			$("#contact-subject-field").val('');
			$("#contact-msg-field").val('');
			$('input:checkbox[name=add-mailing-list]').attr('checked',false);
		})
		.fail(function(data) {
			$(formMessage).removeClass("success");
			$(formMessage).addClass("error");

			//Set error message
			if (data.responseText !== "") {
				console.log("BAD");
				$(formMessage).text(data.responseText);
			}
			else {
				$(formMessage).text("There was an error and your message could not be sent. Please try again in a bit!");
			}
		})
	})
})