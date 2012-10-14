<?php

if(isset($_GET['day']) && isset($_GET['date']) && isset($_GET['year'])){
    echo 'OK.';
    $day = $_GET['day'];
    $date = $_GET['date'];
    $year = $_GET['year'];
    if(!empty($_GET['day']) && !empty($_GET['date']) && !empty($_GET['year'])){
        echo 'It is '.$day.' '.$date.' '.$year;
    } else {
        echo 'Please fill in all fields';
    }
}

?>

<form action="lesson69_get_variable.php" method="GET">
    Day: <br /><input type="text" name="day"><br />
    Date: <br /><input type="text" name="date"><br />
    Year: <br /><input type="text" name="year"><br /><br />
    <input type="submit" value="Submit">

</form>