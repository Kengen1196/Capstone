<!-- 
Kevin Nguyen
Le Phan
Ethan Thao

AniSenpai The Greatest Webpage

-->


<?php
session_start();

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "anisenpai";

 $link = mysqli_connect("localhost",
                "root", "", "anisenpai");
       
    // Check connection
    if($link === false){
        die("ERROR: Could not connect. "
                . mysqli_connect_error());
    }
       
    // Escape user inputs for security
    $user= $_SESSION["username"];
    $message = mysqli_real_escape_string(
            $link, $_REQUEST['Content']);
    date_default_timezone_set('America/North_Dakota/Center');
    $time = date("Y-m-d H:i:s");   
    $channel = $_SESSION["channel"];
    // Attempt insert query execution
    $sql = "INSERT INTO chat (Sender, Content, Created, channel)
                VALUES ('$user', '$message', '$time', '$channel')";
    if(mysqli_query($link, $sql)){
        ;
    } else{
        echo "ERROR: Message not sent!!!";
    }
      
    // Close connection
    mysqli_close($link);
}
/* Header code that brings the user back to the form page */
header("Location:  ./Chatbox.php");
?>