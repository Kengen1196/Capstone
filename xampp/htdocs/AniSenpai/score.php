<?php
session_start();
$servername = "localhost";
$username = "root";


$password = "";
$dbname = "anisenpai";

$conn = mysqli_connect($servername, $username, $password, $dbname);

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

mysqli_query($conn, $sql);

/* Header code that brings the user back to the form page */
header("Location:  ./animeList.php");
?>