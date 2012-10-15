<?php

//overwrite
$handler = fopen('name.txt', 'w');
//making new line
fwrite($handler, 'Jason!' . "\n");
fwrite($handler, 'YoYo!');
//append
$handler = fopen('name.txt', 'a');
fwrite($handler, 'appeneded!');
echo 'Written!';

?>
