<?php
if (isset($_GET['userName']) && !empty($_GET['userName'])) {
    $user_name = $_GET['userName'];
    echo $user_name . '<br />';


    if ($user_name === 'jason') {
        echo 'Hi jason! MASTER!';
    } else {
        echo 'Hi you are not jason but welcome!: ';
    }
}
$user_name = $_GET['userName'];
echo $user_name;
?>

<form action="lesson47_upper_lower_mini.php" method="GET">

    <input type="text" name="userName" />
    <input type="submit" name="mySubmit" />
</form>