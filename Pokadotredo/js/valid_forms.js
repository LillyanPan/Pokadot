/* ======================== *
 * = Validation Functions = *
 * ======================== */ 

// Check that input contains only letters and whitespaces
function validName(id, text) {
	var isValidName = /^[a-zA-Z ]*$/.test(text);
	document.getElementById(id).className = isValidName ? "" : "invalid";

	if (!isValidName) {
		updateErrorMessage(id, "Name should only contain letters and whitespace.");
	}
	
	return isValidName;
}

// Check that input is a valid email
function validEmail(id, text) {
	var isValidEmail = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/.test(text);
	document.getElementById(id).className = isValidEmail ? "" : "invalid";

	if (!isValidEmail) {
		updateErrorMessage(id, "Please enter a valid email address.");
	}
	
	return isValidEmail;
}

// Check that input is a valid phone number in the correct format (XXX-XXX-XXXX)
function validPhoneNumber(id, text) {
	var phoneNumber = text.match(/^\(?([0-9]{3})\)?[-. ]?([0-9]{3})[-. ]?([0-9]{4})$/);
	var isValidPhoneNumber = (phoneNumber != null);
	document.getElementById(id).className = isValidPhoneNumber ? "" : "invalid";

	if (!isValidPhoneNumber) {
		updateErrorMessage(id, "Please enter a valid phone number (XXX-XXX-XXXX).");
	}
	
	return isValidPhoneNumber;
}

// Validate all user input fields for workshop signup form
function validWorkshopSignupForm() {
	console.log("form submitted");
	var name = validName("name-field", document.forms.signupForm.name.value); 
	var email = validEmail("email-field", document.forms.signupForm.email.value); 
	var phone = validPhoneNumber("phone-field", document.forms.signupForm.phone.value); 
	var isValidForm = (name && email && phone);

	if (isValidForm) {
		updateErrorMessage("name-field", "");
	}

	return isValidForm;
}

/* ==================== *
 * = Helper Functions = *
 * ==================== */ 

// Show error message for input forms
function updateErrorMessage(id, errorMessage) { 
	var signupFields = ["name-field", "email-field", "phone-field"];

	if (signupFields.indexOf(id) != -1) {
		document.getElementById("signup-error-message").innerHTML = errorMessage;
	}
}

