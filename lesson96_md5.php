<?php
$password = 'password';
$string_hash = md5($password);

echo $string_hash;

if (isset($_POST['user_password']) && !empty($_POST['user_password'])) {
    $user_password = $_POST['user_password'];
    
    $filename = 'hash.txt';
    $handle = fopen($filename, 'r');
    $file_password = fread($handle, filesize($filename));

    if($user_password === $file_password){
        echo 'Password OK!';
    } else {
        echo 'Incorrect password!';
    }
    
    echo '<br />Password: ' . $user_password;
} else {
    echo '<br />Please fill in a password! ';
}
?>

<form action="lesson96_md5.php" method="POST">
    Password: <input type="text" name="user_password"><br /><br />
    <input type="submit" value="Submit">

</form>
