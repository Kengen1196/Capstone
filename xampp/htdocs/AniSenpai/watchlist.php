<?php
session_start();
include_once 'config.php';

$status = $_POST['status'];
$user = $_SESSION['id'];
$anime = $_POST['anime'];

$query = "SELECT * FROM watchlist WHERE anime = '$anime'";
$result = mysqli_query($link, $query);
if(mysqli_num_rows($result) == 0) {
    $sql =  " INSERT INTO watchlist (user, anime, watching)
    VALUES (' $user ', '$anime ', '$status ');";
} else {
    $sql = "UPDATE watchlist SET watching='$status' WHERE anime='$anime'";
}
mysqli_query($link, $sql);

/* Header code that brings the user back to the form page */
header("Location: https://anisenpai.000webhostapp.com/AnimeList.php");
?>