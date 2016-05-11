/* ======================== *
 * = Validation Functions = *
 * ======================== */ 

 // Check that input field contains 1) only letters, numbers, spaces, dashes, commas, and underscores and 2) not just all spaces
function validTextInput(id, text) {
	var allLegalChars = /^[A-Za-z0-9\s-_,]+$/.test(text); // Return False if contains illegal chars
	var notAllSpaces = /\S/.test(text); // Return False if all spaces
	var isValidName = allLegalChars && notAllSpaces;

	updateFieldBorder(id, isValidName);

	if (!allLegalChars) {
		updateErrorMessage(id, "Letters, numbers, spaces, dashes, commas, and underscores only.");
	} else if (!notAllSpaces) {
		updateErrorMessage(id, "Cannot be empty or contain only spaces.");
	}
	
	return (isValidName);
}

 // Check that input field contains only letters, numbers, spaces, dashes, and underscores 
function validSearchInput(id, text) {
	var allLegalChars = /^[A-Za-z0-9\s-_]+$/.test(text); // Return False if contains illegal chars
	var empty = text.trim() == ""; // Return False if all spaces
	var isValidName = allLegalChars || empty;

	updateFieldBorder(id, isValidName);

	if (!isValidName) {
		console.log("illegal: " + id + "; text: " + text);
		updateErrorMessage(id, "Letters, numbers, spaces, dashes, commas, and underscores only.");
	}
	
	return (isValidName);
}

// Validate all user input fields for workshop signup form
function validWorkshopSignupForm() {
	var username = validTextInput("username-field", document.forms.loginForm.username.value); 
	var password = validTextInput("password-field", document.forms.loginForm.password.value); 
	var isValidForm = (username && password);

	if (isValidForm) {
		updateErrorMessage("username-field", "");
	}

	return isValidForm;
}