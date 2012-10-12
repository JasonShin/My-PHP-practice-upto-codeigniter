<?php

srand ((double) microtime( )*1000000);
$random_number = rand( ) % 10;
echo "$random_number".'<br />';
echo microtime( );
?>
