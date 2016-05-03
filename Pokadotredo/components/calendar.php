<?php
	// Embedded Google Calendar
	echo '<div class="google-calendar-container">
			<iframe src="https://calendar.google.com/calendar/embed?src=8ck8ha14j21jmdhrtd43a6q6rg%40group.calendar.google.com&ctz=America/New_York" width="800" height="600"></iframe>
		</div>'

	/*

	In this file, we will implement the functionality of allowing users to sign up 
	for a specific workshop on the Google Calendar. We will use AJAX calls to make 
	HTTPS requests to call/update the Google Calendar API. For this task, since Google
	disabled their Appointment Slots feature a while ago, we may use a third-party 
	API to detect which events the user clicks on in the calendar and show a 
	Workshop Sign Up Form for the chosen workshop. If we cannot figure out a way
	to detect user interaction with the calendar, we will just have a regular
	form with fields and simply limit the selection of dates and times the users
	can choose to sign up for based on workshop availability. In general, we will
	use Javascript and JQuery to possibly detect user click events for handling
	user interaction with the calendar. 

	Regarding the Workshop Sign Up Form, we will have five input fields: name, email,
	phone number, date, workshop type, and comments box. The name, email, and phone
	number fields will be regular text fields. Meanwhile, the date field is a
	datetime-local type of field, the workshop type field is a select box, and the
	comments area is a text area. All fields are required except for the comments
	box. 

	For input validation, the fields will be validated as follows:
		- Name Field: should only contain letters and dashes (regexes)
		- Email Field: should be validated with FILTER_VALIDATE_EMAIL
		- Phone Number Field: should contain only numbers and have correct number of 
		  digits (regexes)
		- Date Field: User needs to select a date and time
		- Workshop Type Field: User must select a field
		- Comments Box: All characters allowed besides HTML elements

	All form fields will prevent code injection by stripping HTML tags. Form validation
	will provide feedback to the users so that they know what parts of their form entry
	they need to fix. Finally, a success message will display on the page, and an email 
	will be sent to the Pokadot user when the form has been successfully submitted.
	*/

?>