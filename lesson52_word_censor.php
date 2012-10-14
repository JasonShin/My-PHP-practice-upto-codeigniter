<?php
if (isset($_POST['user_input']) && !empty($_POST['user_input'])){
    echo 'works!';
    //it declares user_input variable
    $user_input = $_POST['user_input'];
} else {
    echo 'No texts!';
}
?>

<form action="lesson52_word_censor.php" method="POST">
    <textarea name="user_input" rows="6" cols="30"><?php echo $user_input ?></textarea><br /><br />
    <input type="submit" value="submit">
</form>
