<form id="add-image-form" method="POST" action="#" enctype="multipart/form-data" style="margin-bottom: 10px">
    Add an image to this group: <br>
    <input type="file" name="image_upload" id="image_upload" required title="Please select a file to upload" style="display:inline-block"><br>
    <input type="text" name="image_desc" id="image_desc" required maxlength="40" placeholder="Description" title="Please include a short desciption of the image" style="display:inline-block">
    <input type="submit" value="Add Image" style="display:inline-block">
</form>