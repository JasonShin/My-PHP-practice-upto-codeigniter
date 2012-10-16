<?php
session_start();
if (isset($_POST['answer']) && !empty($_POST['answer'])) {

    $answer = $_POST['answer'];
    $real_answer = $_SESSION['secure'];
    echo '<p>Answer: ' . $answer . '<br />' . $real_answer . '</p>';
    if ($answer == $real_answer) {
        echo 'matched!';
    }
}

$_SESSION['secure'] = rand(1000, 9999);
?>

<p>
    <img src="lesson164_create_captcha.php" />
<form action="lesson164_index.php" method="POST">
    <p><b>Type value:</b><input type="text" name="answer"></p>
    <p><input type="submit" value="Check!"></p>
</form>
</p>