<?php
include_once 'chatSubmit.php';

$Content = $_POST['Content'];
$con = new mysqli($host, $user, $pass, $db_name);

$sql =  " INSERT INTO chat (Content)
VALUES ('$Content' );";
mysqli_query($con, $sql);

header("Location:  ./Chatbox.php.php");
?>