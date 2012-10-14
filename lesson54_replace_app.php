<?php
$offset = 0;
if (isset($_POST['text']) && isset($_POST['search']) && isset($_POST['replace'])) {
    $text = $_POST['text'];
    $search = $_POST['search'];
    $replace = $_POST['replace'];
    
    $search_length = strlen($search);
    echo 'text: '.$text.'   | search: '.$search.' | replace: '.$replace;
    if (!empty($text) && !empty($search) && !empty($replace)) {
        echo '<br />worked!<br />';
        while ($strpos = strpos($text, $search, $offset)) {
            echo $offset = $strpos + $search_length.'<br />';
        }
    } else {
        echo 'Not ok!';
    }
}
?>

<form action="lesson54_replace_app.php" method="POST">
    <textarea name="text" rows="6" cols="30"></textarea><br /><br />
    Search for:<br />
    <input type="text" name="search"><br /><br />
    Replace with <br />
    <input type="text" name="replace"><br /> <br />
    <input type="submit" value="Find and replace"><br /><br />
</form>
