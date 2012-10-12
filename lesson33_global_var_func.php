<?php

echo 'asd<br />';

//Getting IP address, on my current config, it returns IPv6
$user_ip = $_SERVER['REMOTE_ADDR'];

//WORKS
//echo 'My IP is: '.$user_ip;
function echo_ip() {
    global $user_ip;
    $string = 'My IP is: ' . $user_ip;
    echo $string;
}

echo_ip();
?>
