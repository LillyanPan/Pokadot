<!--
    This file will have similar functionality to the Edit Album forms
    we created in Project 3. It will also have similar form validation 
    implemented as in the contact_form.php and sign_up_form.php file. 
    This form will allow the admin, when logged in, to add/edit/delete images in
    groups on the website. This form will only be visible if the user is logged in as 
    an admin. We will use regexes and filter input functions to implement form 
    validation. We will also prevent code injection by stripping HTML tags and 
    elements. Furthermore, we will integrate the validation feedback by detecting 
    which fields have invalid inputs and display appropriate feedback messages. 
    What the specific validation code implementation will look like is similar to 
    what is currently in the file contact_form.php. We will use php code to validate 
    inputs, interact with the database, and upload files in a similar way to what we 
    did in Project 3. 
-->

<!-- rough form for now, not very pretty yet on the site, but it gives the general idea -->
<form class="add-image-form" method="POST" action="#" enctype="multipart/form-data" style="margin-bottom: 10px">
    Add an image to this group: <br>
    <input type="file" name="image_upload" required title="Please select a file to upload" style="display:inline-block"><br>
    <input type="text" name="image_desc" required maxlength="40" placeholder="Description" title="Please include a short desciption of the image" style="display:inline-block">
    <input type="submit" value="Add Image" style="display:inline-block">
</form>