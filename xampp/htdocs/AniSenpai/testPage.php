
<?php
$servername = "localhost";
$username = "root";

/* it just needed a password, within user accounts on phpmyadmin, the account being used is 'root'@'localhost' */
$password = "";
$dbname = "anisenpai";

$conn = mysqli_connect($servername, $username, $password, $dbname);

/*
if ($conn -> connect_error){
  die("Connection failed: " . $conn-> connect_error);
}

echo "connected successfully";

/*
echo $_GET['Animetitle'];

echo "I love $txt!";
echo "This is working now!";
echo "Time to figure out the databae connection";

if(isset($_POST['submitButton']))
{
  $id = $_POST['animeTitle'];
  $upvote = $_POST['Upvote'];
  $downvote = $_POST['Downvote'];
  $reasoning = $_POST['Reasoning'];

  $query = "UPDATE forum SET Animetitle = '$id', Upvote = '$upvote', Downvote = '$downvote', Reasoning='$reasoning' WHERE id = '$id ";
  $query_run = mysqli_query($con, $query);

  

}
// Maybe use the $sql = insert commands 
// Refer to this quora page for more info under line 17 of form 'Retreiving and inserting the form data
// https://www.quora.com/How-do-I-create-a-database-that-stores-user-inputs-from-a-website

$sql = "INSERT INTO forum (AnimeTitle, Upvote, Downvote, Reasoning)
VAlUES ('$animeTitle', '$upvote', '$downvote', '$reasoning') ";

*/

//$conn->close();

?>