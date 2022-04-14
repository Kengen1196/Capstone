<!-- 
Kevin Nguyen
Le Phan
Ethan Thao

AniSenpai The Greatest Webpage

-->

<!-- Php page for the form that allows the user to post to the database and return back to the form page -->
<?php
include_once 'testPage.php';

$Anime = $_POST['animeTitle'];
$VoteUp = $_POST['voting'];
$VoteDown = $_POST['voting'];
$Reasons = $_POST['animeBox'];

$sql =  " INSERT INTO forum (AnimeTitle, Upvote, Downvote, Reasoning)
VALUES (' $Anime ', '$VoteUp ', '$VoteDown ', ' $Reasons' );";
mysqli_query($conn, $sql);

/* Header code that brings the user back to the form page */
header("Location:  ./Forum.php");
?>
    

    
