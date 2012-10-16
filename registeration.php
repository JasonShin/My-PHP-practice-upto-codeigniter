


<?php
define('DBUSER', 'jason');
define('DBPASSWORD', 'shin');
define('DBHOST', 'localhost');
define('DBNAME', 'supercool');
$dbc = mysql_connect(DBHOST, DBUSER, DBPASSWORD);
if ($dbc) {
    if (!mysql_select_db(DBNAME)) { // If it can’t select the database.
// Handle the error.
        trigger_error("Could not select the database!<br />MySQL Error: " . mysql_error());

        exit();
    } // End of mysql_select_db IF.
} else {

// Print a message to the user, and kill the script.

    trigger_error("Could not connect to MySQL!<br />MySQL Error: " . mysql_error());

    exit();
}

// A function that strips harmful data.
function escape_data($data) {

// Check for mysql_real_escape_string() support.
// This function escapes characters that could be used for sql injection
    if (function_exists('mysql_real_escape_string')) {

        global $dbc; // Need the connection.
        $data = mysql_real_escape_string(trim($data), $dbc);
        $data = strip_tags($data);
    } else {
        $data = mysql_escape_string(trim($data));
        $data = strip_tags($data);
    }

// Return the escaped value.
    return $data;
}

// End of function.
?>
<?php
if (isset($_POST['submitted'])) {

    //username
    if (preg_match('%^[a-z0-9_-]{3,15}%', stripcslashes(trim($_POST['username'])))) {
        $un = $_POST['username'];
    } else {
        echo '<p>Please fill in the correct username lol!</p>';
    }

    //firstname
    if (preg_match('%^[A-Za-z\.\' \-]{2,15}$%', stripslashes(trim($_POST['firstname'])))) {

        $fn = escape_data($_POST['firstname']);
    } else {

        $fn = false;

        echo '<p><font color="red" size="+1">Please enter your first name!</font></p>';
    }

    //lastname
    if (preg_match('%^[A-Za-z\.\' \-]{2,30}$%', stripslashes(trim($_POST['lastname'])))) {
        $ln = escape_data($_POST['lastname']);
    } else {
        $ln = false;
        echo '<p><font color="red" size="+1">Please enter your last name!</font></p>';
    }

    //postcode
    if (preg_match('%^[0-9]{4}%', stripcslashes(trim($_POST['postcode'])))) {
        $post = escape_data($_POST['postcode']);
    } else {
        $post = false;
        echo '<b>Please enter valid 4 digit postcode!</b>';
    }

    //phone number
    if (preg_match('%^([0-9]( |-)?)?(\(?[0-9]{3}\)?|[0-9]{3})( |-)?([0-9]{3}( |-)?[0-9]{4}|[a-zA-Z0-9]{7})$%', stripslashes(trim($_POST['phone'])))) {

        $ph = escape_data($_POST['phone']);
    } else {

        $ph = false;

        echo '<p><font color = "red" size = "+1">Please enter a valid phone number!</font></p>';
    }

    // Check for an email address.

    if (preg_match('%^[A-Za-z0-9._\%-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,4}$%', stripslashes(trim($_POST['email'])))) {

        $e = escape_data($_POST['email']);
    } else {
        $e = false;
        echo '<p><font color=”red” size=”+1″>Please enter a valid email address!</font></p>';
    }



    if ($fn && $ln && $un && $post && $ph && $e) {
        $query = "SELECT username FROM user WHERE email='$e'";
        //$query = "SELECT * FROM user";
        $result = mysql_query($query) or trigger_error('<p><font color=”red” size=”+1″>Email is taken already!</font></p>');

        if (mysql_num_rows($result) == 0) {
            $a = md5(uniqid(rand(), true));
            //post code is IP address in thiscase
            $ip = $_SERVER['REMOTE_ADDR'];
            $query = "INSERT INTO user(username, password, email, postcode, phone) VALUES('$un', '12345', '$e', '$ip', '$ph')";
            $result = mysql_query($query) or trigger_error('Shit, I think someone has taken down the database!');

            if (mysql_affected_rows() == 1) {
                echo 'Thanks, you have successfully registered!';
                exit();
            } else {

                echo '<p><font color=”red” size=”+1″>You could not be registered due to a system error. We apologize for any inconvenience.</font></p>';
            }
        } else {
            echo 'WTF?! SQL Injection?';
        }
    }
}
?>

<form action = "registeration.php" method = "POST">
    <p>User Name: <input type = "text" name = "username"></p>
    <p> First name:<input type = "text" name = "firstname"></p>
    <p> Last name:<input type = "text" name = "lastname"></p>
    <p> Phone:<input type = "text" name = "phone"></p>
    <p> Email:<input type = "text" name = "email"></p>
    <p> Post Code:<input type = "text" name = "postcode"></p>

    <p> <input type = "submit" name = "submit" value = "Register! or die!"></p>
    <input type = "hidden" name = "submitted" value = "TRUE" />
</form>