<?php

//This will prevent user from writing HTML
if(isset($_GET['day']) && isset($_GET['date']) && isset($_GET['year'])){
    $day = htmlentities($_GET['day']);
    $date = htmlentities($_GET['date']);
    $year = htmlentities($_GET['year']);
    if(!empty($day) && !empty($date) && !empty($year)){
        echo $date;
    } else {
        echo 'Aw oh!';
    }
}

?>

<form action="lesson72_security.php" method="GET">
    Day: <br /><input type="text" name="day"><br />
    Date: <br /><input type="text" name="date"><br />
    Year: <br /><input type="text" name="year"><br />
    <input type="submit" value="Submit">
</form>
