<!-- 
Kevin Nguyen
Le Phan
Ethan Thao

AniSenpai The Greatest Webpage

-->




<?php
// Initialize the session
session_start();
$_SESSION['channel'] = 1;

// Check if the user is logged in, if not then redirect him to login page
if (!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true) {
    header("location: login.php");
    exit;
}
?>

<!DOCTYPE html>
<html>

<!--This is the header/CSS-->
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="Homepage.css">
    <title>AniSenpai</title>
    <script type="text/javascript"></script>
</head>


<!-- This is the main body for the homepage -->

<body>

    <!-- Navigation Bar-->
  
  <div class="navbar">
      <div class="dropdown">
        <button class="dropbtn">Profile
        <i class="fa fa-caret-down"></i>
        </button>
      <div class="dropdown-content">
        <a href="reset-password.php">Reset Password</a>
        <a href="logout.php">Logout</a>
      </div>
    </div>

        <a href='#animeList'>Anime</a>
        <a href="#forum">Forum</a>
        <a href='#ads'>Sites</a>
        <a href="#chat">Chat</a>
    
    <div class="AniSenpai">
      <li><a href=homepage.php#slideshow>AniSenpai</a></li>
    </div>  
  </div>

--  <!--Link containers/The grid layout-->
    <div class="grid-container">
        

    <!--This container has a slide show gotten from: https://www.w3schools.com/howto/howto_js_slideshow.asp-->
        <div id="title">
        <a id='slideshow' href="Forum.php"> </a> 
            <div class="slideshow-container">
                <div class="mySlides fade">
                  <div class="numbertext">1 / 3
                  </div>
                  <img src="Images/welcome.gif" style="width:100vw; height: 100vh;">
                </div>
                <div class="mySlides fade">
                  <div class="numbertext">2 / 3
                  </div>
                  <img src="Images/to.jpg" style="width:100vw; height: 100vh;">
                </div>
                <div class="mySlides fade">
                  <div class="numbertext">3 / 3
                  </div>
                  <img src="Images/aniSenpaiFinal.jpg" style="width:100vw; height:100vh;">
                </div>      
             </div>

            <!--This is the rest of the grid -->
            <div id="animeList">
              <a id='animeList' href="AnimeList.php"><img alt="" src="Images/animeList.PNG" style="width:100vw; height: 100vh;"></a>
            </div>
            <div id="forum">
              <a id='forum' href="Forum.php"><img alt="" src="Images/Forum.png" style="width:100vw; height: 100vh;"> </a> 
            </div>
            <div id=ads>
              <a id='ads'>
                <div class="ad-container">
                  <div class='ad1'>
                    <a href="https://www.funimation.com/"><img alt="" src="Images/funimation.jfif" width="100%"; height="100%">
                    </a>
                  </div>
                  <div class='ad2'>
                    <a href="https://www.crunchyroll.com/"><img alt="" src="Images/Crunchyroll.jfif" width="100%"; height="100%"/>
                    </a>
                  </div>
                  <div class='ad3'>
                    <a href="https://www.Netflix.com/"><img alt="" src="Images/Netflix.jpg" width="100%"; height="100%"/></a>
                  </div>
                  <div class='ad4'>
                    <a href="https://www.amazon.com/Prime-Video-Anime-Movies-TV/s?rh=n%3A2858778011%2Cp_n_theme_browse-bin%3A2650364011"><img alt="" src="Images/amazon.jpg" width="100%"; height="100%"/></a>
                  </div>
                </div>
              </a>
            </div>
          <div id="chat">
            <a id='chat' href="Chatbox.php"><img alt="" src="Images/Chat BBox.gif" style="width:100vw; height: 100vh;">
            </a>
          </div>
    </div>

    <!--This is the java script for the slide show -->
    <script>
        var slideIndex = 0;
        showSlides();
        
        function showSlides() {
          var i;
          var slides = document.getElementsByClassName("mySlides");
        
          for (i = 0; i < slides.length; i++) {
            slides[i].style.display = "none";  
          }
          slideIndex++;
          if (slideIndex > slides.length) {slideIndex = 1}    
          slides[slideIndex-1].style.display = "block";  
  
          setTimeout(showSlides, 3000); // Change image every 3 seconds
        }
        </script>

</body>

</html>