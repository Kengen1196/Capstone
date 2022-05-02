<?php
session_start();
include_once 'config.php';

$score = $_POST['score'];
$user = $_SESSION['id'];
$anime = $_POST['anime'];

$query = "SELECT * FROM watchlist WHERE anime = '$anime'";
$result = mysqli_query($conn, $query);
if(mysqli_num_rows($result) == 0) {;
    $sql =  " INSERT INTO watchlist (user, anime, score)
    VALUES (' $user ', '$anime ', '$score ');";
} else {
    $sql = "UPDATE watchlist SET score='$score' WHERE anime='$anime'";
}

mysqli_query($link, $sql);

/* Header code that brings the user back to the form page */
header("Location: https://anisenpai.000webhostapp.com/AnimeList.php");
?>