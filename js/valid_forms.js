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

// Check that input is a valid subject line
function validSubject(id, text) {
	var subject = /^[a-zA-Z0-9 ]*$/.test(text);
	var isValidSubject = (subject != null);
	document.getElementById(id).className = isValidSubject ? "" : "invalid";

	if (!isValidSubject) {
		updateErrorMessage(id, "Please enter a valid subject using only letters and numbers.");
	}
	
	return isValidSubject;
}

// Check that input is a valid message
function validMsg(id, text) {
	var msg = text.match(/^\(?([0-9]{3})\)?[-. ]?([0-9]{3})[-. ]?([0-9]{4})$/);
	var isValidMsg = (phoneNumber != null);
	document.getElementById(id).className = isValidMsg ? "" : "invalid";

	if (!isValidMsg) {
		updateErrorMessage(id, "Please enter a valid phone number (XXX-XXX-XXXX).");
	}
	
	return isValidMsg;
}

// Validate all user input fields for workshop signup form
function validWorkshopSignupForm() {
	var name = validName("name-field", document.forms.signupForm.name.value); 
	var email = validEmail("email-field", document.forms.signupForm.email.value); 
	var phone = validPhoneNumber("phone-field", document.forms.signupForm.phone.value); 
	var isValidForm = (name && email && phone);

	if (isValidForm) {
		updateErrorMessage("name-field", "");
	}

	return isValidForm;
}

// Validates all user input fields for the 'contact us' form
function validContactForm() {
	console.log('VALID');
	var name = validName("contact-name-field", document.forms.contactForm.name.value); 
	var email = validEmail("contact-email-field", document.forms.contactForm.email.value); 
	var subject = validSubject("contact-subject-field", document.forms.contactForm.phone.value); 
	var isValidForm = (name && email && subject);

	return isValidForm;
}

/* ==================== *
 * = Helper Functions = *
 * ==================== */ 

// Show error message for input forms for signups
function updateErrorMessage(id, errorMessage) { 
	var signupFields = ["name-field", "email-field", "phone-field"];

	if (signupFields.indexOf(id) != -1) {
		document.getElementById("signup-error-message").innerHTML = errorMessage;
	}
}

// Show error message for input fields for contact form
function updateErrorMessage(id, errorMessage) { 
	var contactFields = ["name-field", "email-field", "phone-field"];

	if (contactFields.indexOf(id) != -1) {
		document.getElementById("form-messages").innerHTML = errorMessage;
	}
}

