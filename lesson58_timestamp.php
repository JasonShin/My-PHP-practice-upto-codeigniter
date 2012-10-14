<?php
$time = time();
$actual_time = date('H:i:s', $time);
$actual_date = date('D M Y', $time);
$all_together = date('D M Y @ H:i:s', $time-20);
$adding_week = date('D M Y @ H:i:s', strtotime('-2 week'));
echo 'The current time is '.$actual_time.'<br />The actual date is: '.$actual_date;
echo '<br />All together: '.$all_together.'<br />';
echo 'added week: '.$adding_week;
?>
