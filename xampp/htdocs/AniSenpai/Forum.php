<!-- 
Kevin Nguyen
Le Phan
Ethan Thao

AniSenpai The Greatest Webpage

-->


<!-- Connect to the HTML and CSS page-->
<!DOCTYPE html>
<html>

<head>

  <link rel="stylesheet" href="Forum.css">

  <title>Forum</title>

</head>

<body>

   <!-- Navigation Bar to go back and forth between the various pages-->

  
  <div class="navbar">
    <div class="dropdown">
      <button class="dropbtn">Profile
        <i class="fa fa-caret-down"></i>
      </button>
      <div class="dropdown-content">
        <a href="reset-password.php">Reset Passowrd</a>
        <a href="logout.php">Logout</a>
      </div>
    <a href="Forum.php">Forum</a>
    <a href="Homepage.php">Sites</a>
    <a href="Chatbox.php">Chat</a>
    
    <div class="AniSenpai">
      <li><a href="Homepage.php">AniSenpai</a></li>
    </div>

  </div>
  <div class="border">

    <div class="theForum">

     <!-- Form to post the user input -->
     <!-- User input for the form by getting the title, upvote, downvote, and reasoning-->
      <form action="testTwo.php" method="POST">

        <br><label for="animeTitle">Anime Title:</label><br>
        <input type="text" id="animeTitle" name="animeTitle" value=""><br><br>

        <label for="upVote">Upvote</label>
        <input type="radio" id="upVote" name="Upvoting" value="Upvote">

        <label for="downVote">Downvote</label>
        <input type="radio" id="downVote" name="Downvoting" value="Downvote"><br><br>

        <label for="animeBox">Reasoning:</label><br>
        <input type="explaination" id="animeBox" name="animeBox" value=""><br><br>

        <!-- Submit button that goes to a submission page-->
        <input type="submit" id="submitButton" name="submitButton" value="Submit">
      

        </a>

    </div>

    </form>

  </div>
  </div>

</body>


</html>