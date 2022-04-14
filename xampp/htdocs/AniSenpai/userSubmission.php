<?php
include_once 'testPage.php';

$score = $_POST['userScore'];
$status = $_POST['status'];

$sql =  " INSERT INTO watchlist (score, status)
VALUES ('$score','$status');";
mysqli_query($conn, $sql);

header("Location:  ./AnimeList.php");
?>
    
