<?php

//making random name
$filename_or = 'image.jpg';
$filename = rand(1000,9999).md5($filename_or).rand();
echo 'filename: '.$filename;

//check if file exists
$newfile = 'haha.txt';
if(file_exists($newfile)){
    echo '<br />File already exists.';
} else {
    $handle = fopen($newfile, 'w');
    fwrite($handle, 'Nothing!');
    fclose($handle);
}

?>
