<?php

$ip_address = $_SERVER['REMOTE_ADDR'];

function hit_count() {
    global $ip_address;
    $found = true;
    $ip_file = file('ip.txt');
    foreach ($ip_file as $ip) {
        $ip_single = trim($ip);
        if ($ip_address != $ip_single) {
            $found = false;
        } else {
            $found = true;
            break;
        }
        echo trim($ip) . ', ';
    }
    echo '<br />my current ip: ' . $ip_address . '<br />';
    if ($found === false) {
        $filename = 'count.txt';
        $handle = fopen($filename, 'r');
        $current = fread($handle, filesize($filename));
        fclose($handle);

        $current_inc = $current + 1;
        $handle = fopen($filename, 'w');
        fwrite($handle, $current_inc);
        fclose($handle);
        echo 'IP Not found!';
    } else {
        echo 'Found!';
    }
}

hit_count();
?>
