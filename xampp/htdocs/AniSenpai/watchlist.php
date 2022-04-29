<?php
session_start();
$servername = "localhost";
$username = "root";


$password = "";
$dbname = "anisenpai";

$conn = mysqli_connect($servername, $username, $password, $dbname);

$status = $_POST['status'];
$user = $_SESSION['id'];
$anime = $_POST['anime'];

$query = "SELECT * FROM watchlist WHERE anime = '$anime'";
$result = mysqli_query($conn, $query);
if(mysqli_num_rows($result) == 0) {
    $sql =  " INSERT INTO watchlist (user, anime, watching)
    VALUES (' $user ', '$anime ', '$status ');";
} else {
    $sql = "UPDATE watchlist SET watching='$status' WHERE anime='$anime'";
}
mysqli_query($conn, $sql);

/* Header code that brings the user back to the form page */
header("Location:  ./animeList.php");
?>