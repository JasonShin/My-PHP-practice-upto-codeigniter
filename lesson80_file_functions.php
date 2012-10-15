<?php

$filename = 'name.txt';
$handle = fopen($filename, 'r');
echo fread($handle, filesize($filename)) . '<br />filename: ' . $filename . '<br />';

$datain = fread($handle, filesize($filename));
$names_array = explode(',', $datain);
foreach ($names_array as $name) {
    echo $name . '<br />';
}
$array_size = sizeof($names_array);
echo 'size of array: ' . $array_size;
?>
