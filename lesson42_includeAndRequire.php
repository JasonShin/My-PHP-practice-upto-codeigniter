<?php

//including other php file
include 'header_php.php';
include 'anotherphp.php';
//this acts as index

echo '<br />Hey!';

include 'doesntexist.php';
echo '<br />works after include<br />';
require 'doesntexist.php';
echo 'works after require';
?>
