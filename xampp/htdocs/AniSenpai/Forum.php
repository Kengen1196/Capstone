

<!DOCTYPE html>
<html>

<head>

  <link rel="stylesheet" href="Forum.css">

  <title>Forum</title>

</head>

<body>

  <!-- 
<h1><b>Forum</b></h1>
-->

  <!-- Navigation Bar-->

  <!-- Make the upvote and downvote as a int counter that uses javascript for it
  So within phpMyAdmin, do the int variable and see how it works out from there. -->

   <!-- Navigation Bar-->

   <div class="navbar">
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
    <a href="Hanimeage.php">Sites</a>
    <a href="Chatbox.php">Chat</a>
    
    <div class="AniSenpai">
      <li><a href="Homepage.php">AniSenpai</a></li>
    </div>
  <div class="border">

    <div class="theForum">

      <!-- https://www.quora.com/How-do-I-create-a-database-that-stores-user-inputs-from-a-website 
  
  Reference this page for the get and post method 
  You don't even have any php code, what if you have to include the php code within the body or another file that is dedicated to the php such as action_page.php?
    
  -->
      <!-- After the user has submitted the form, it will go to testPage.php
      What is the purpose of testTwo.php? -->
      <form action="testTwo.php" method="POST">

        <br><label for="animeTitle">Anime Title:</label><br>
        <input type="text" id="animeTitle" name="animeTitle" value=""><br><br>

        <label for="upVote">Upvote</label>
        <input type="radio" id="upVote" name="Upvoting" value="Upvote">

        <label for="downVote">Downvote</label>
        <input type="radio" id="downVote" name="Downvoting" value="Downvote"><br><br>

        <label for="animeBox">Reasoning:</label><br>
        <input type="explaination" id="animeBox" name="animeBox" value=""><br><br>

        <!-- 
  <div class = "borderForSubmitButton"> 
  -->
        <input type="submit" id="submitButton" name="submitButton" value="Submit">
        <!-- <a href="ForumSubmit.html">Submit -->

        </a>

    </div>

    </form>

  </div>
  </div>

</body>


</html>