<?php
//tutorial 65
$http_client_ip = $_SERVER['HTTP_CLIENT_IP'];   //get IP
$http_x_forward_for = $_SERVER['HTTP_X_FORWARDED_FOR'];
$remote_addr = $_SERVER['REMOTE_ADDR'];

echo 'httpclient: '.$http_client_ip;
echo '<br />http x forwarded: '.$http_x_forward_for;
echo '<br />remote: '.$remote_addr;
?>
