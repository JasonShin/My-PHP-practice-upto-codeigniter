<?php ob_start(); ?>
<?php
$redirecting_page = 'http://google.com.au';
$redirect = true;
if($redirect){
    //redirect page
    header('Location: '.$redirecting_page);
}
ob_end_clean();
?>
