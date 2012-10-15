<?php
$name = $_FILES["file"]["name"];
$size = $_FILES["file"]["size"];
$type = $_FILES['file']['type'];
$tmpname = $_FILES['file']['tmp_name'];

echo $name . '   ' . $size . '    ' . $type . '    ' . $tmpname
?>


<form action="lesson87_upload_file.php" method="post"
      enctype="multipart/form-data">
    <label for="file">Filename:</label>
    <input type="file" name="file" id="file" />
    <br />
    <input type="submit" name="submit" value="Submit" />
</form>