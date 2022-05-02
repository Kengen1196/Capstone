<!-- 
Kevin Nguyen
Le Phan
Ethan Thao

AniSenpai The Greatest Webpage

-->

<!-- Php page for the form that allows the user to post to the database and return back to the form page -->
<?php
include_once 'config.php';

$Anime = $_POST['animeTitle'];
$Vote = $_POST['vote'];
$Reasons = $_POST['animeBox'];


$sql =  " INSERT INTO forum (AnimeTitle, Reasoning, vote)
VALUES (' $Anime ', ' $Reasons', ' $Vote ');";

mysqli_query($link, $sql);

/* Header code that brings the user back to the form page */
header("Location: https://anisenpai.000webhostapp.com/Forum.php");
?>
    

    
