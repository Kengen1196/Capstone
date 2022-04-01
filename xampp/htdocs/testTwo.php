<?php
include_once 'testPage.php';

$Anime = $_POST['animeTitle'];
$VoteUp = $_POST['voting'];
$VoteDown = $_POST['voting'];
$Reasons = $_POST['animeBox'];

$sql =  " INSERT INTO forum (AnimeTitle, Upvote, Downvote, Reasoning)
VALUES (' $Anime ', '$VoteUp ', '$VoteDown ', ' $Reasons' );";
mysqli_query($conn, $sql);

header("Location:  ./Forum.php");
?>
    

    
