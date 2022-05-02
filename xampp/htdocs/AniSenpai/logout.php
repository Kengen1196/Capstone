<!-- 
Kevin Nguyen
Le Phan
Ethan Thao

AniSenpai The Greatest Webpage

sourced from: https://www.tutorialrepublic.com/php-tutorial/php-mysql-login-system.php
-->



<?php
// Initialize the session
session_start();
 
// Unset all of the session variables
$_SESSION = array();
 
// Destroy the session.
session_destroy();
 
// Redirect to login page
header("location: login.php");
exit;

?>