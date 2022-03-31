<?php
include_once 'chatSubmit.php';

$Sender = $_POST['Sender'];
$Content = $_POST['Content'];
$Created = $_POST['Created'];

$sql =  " INSERT INTO chat (Sender, Content, Created)
VALUES ('$User', '$Content', '$Created' );";
mysqli_query($conn, $sql);

header("Location:  ./Chatbox.php.php");
?>