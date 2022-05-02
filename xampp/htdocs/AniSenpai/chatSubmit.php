<!-- 
Kevin Nguyen
Le Phan
Ethan Thao

AniSenpai The Greatest Webpage

-->


<?php
session_start();
include_once 'config.php';
    // Escape user inputs for security
    $user= $_SESSION["username"];
    $message = $_POST['Content'];
    date_default_timezone_set('America/North_Dakota/Center');
    $time = date("Y-m-d H:i:s");   
    $channel = $_SESSION["channel"];
    // Attempt insert query execution
    $sql = "INSERT INTO chat (Sender, Content, Created, channel)
                VALUES ('$user', '$message', '$time', '$channel')";
                
    // Close connection
    mysqli_query($link, $sql);

header("Location: https://anisenpai.000webhostapp.com/Chatbox.php");
?>