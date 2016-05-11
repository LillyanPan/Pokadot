<?php
	// Edit album popup box
	print "<div id='confirmation-popup' class='modal'>
		<div id='confirmation-content' class='modal-content'>
		    <button class='close' onclick='closeConfirmationopup()'>×</button>
		    <div class='popup-message-container'>
			    <p id='confirmation-title' class='form-description'>YOUR APPOINTMENT</p>
			    <h3 id='confirmation-subtitle' class='general-subtitle'></h3>
		        <form class='confirmation-form' name='confirmationForm' action='gallery.php' onsubmit='return validConfirmationForm();' method='POST'>
		        	<input type='hidden' id='confirmationIdField' name='confirmationIdField' value='0'><br>
		        	<input id='confirmation-title-field' type='text' placeholder='' name='' maxlength='50' required title='Letters, numbers, spaces, dashes, commas, and underscores only.'><br>
			    	<input type='submit' name='confirm' value='confirm'>
				</form>
	        </div>
		</div>
	</div>";
?>