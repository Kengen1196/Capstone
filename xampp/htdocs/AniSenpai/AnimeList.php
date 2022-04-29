<!-- 
Kevin Nguyen
Le Phan
Ethan Thao

AniSenpai The Greatest Webpage

-->

<?php
  session_start();
?>

<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Anime List</title>
<link rel="stylesheet" href="AnimeList.css">
</head>
</script>
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
 
    <a href="Forum.php">Forum</a>
    <a href='Homepage.php#ads'>Sites</a>
    <a href="Chatbox.php">Chat</a>
    
    <div class="AniSenpai">
      <li><a href=homepage.php>AniSenpai</a></li>
</div>
  </div>
    <div class="container">
        <?php    
        $link = mysqli_connect("localhost","root", "", "anisenpai");      
        $query = "SELECT * FROM animelibrary";
        $result = mysqli_query($link, $query);
        ?>

        <table cellpadding="0" cellspacing="0" width="100%" class="animeList">
            <caption class="header" style="text-align:center"></caption>
            <tr class="table-header">
                <td class="title">Title</td>
                <td class="userScore">User Rating</td>
                <td class="status">Status</td>
            </tr>
            
            <?php while($row = mysqli_fetch_array($result)):;?>
            <tr>
                <td><img src= <?php echo "Images/".$row[7];?>> 
                    <div class="tooltip"><?php echo $row[1];?>
                        <div class="genre">
                            <p>Genres:<?php echo $row[4];?>
                           <br>
                           Episodes:<?php echo $row[3];?>
                        </p>
                        </div>
                        <span class="tooltiptext">
                            <?php echo $row[5];?>
                        </span> 
                    </div>
                </td>
                <td>
                <form method="post" action="score.php">
                <?php $scoreQuery = "SELECT * FROM watchlist WHERE anime = $row[0]";
                  $scoreResult = mysqli_query($link, $scoreQuery);
                  if(mysqli_num_rows($scoreResult) != 0) {
                    $scoreRow = mysqli_fetch_array($scoreResult);
                    $score = $scoreRow[2];
                  }
                  else{
                    $score = -1;
                  }
                  ?>
                  <select onchange="this.form.submit()" name="score" id="userScore">
                      <option value="">--</option>
                      <option value="10"<?php if($score == 10){ echo "selected";}?>>10</option>
                      <option value="9"<?php if($score == 9){ echo "selected";}?>>9</option>
                      <option value="8"<?php if($score == 8){ echo "selected";}?>>8</option>
                      <option value="7"<?php if($score == 7){ echo "selected";}?>>7</option>
                      <option value="6"<?php if($score == 6){ echo "selected";}?>>6</option>
                      <option value="5"<?php if($score == 5){ echo "selected";}?>>5</option>
                      <option value="4"<?php if($score == 4){ echo "selected";}?>>4</option>
                      <option value="3"<?php if($score == 3){ echo "selected";}?>>3</option>
                      <option value="2"<?php if($score == 2){ echo "selected";}?>>2</option>
                      <option value="1"<?php if($score == 1){ echo "selected";}?>>1</option>
                      <option value="0"<?php if($score == 0){ echo "selected";}?>>0</option>
                    </select>
                    <input type="hidden" name="anime" value="<?php echo $row[0] ?>" />
                  </form>
                </td>
                <td>
                  <form method="post" action="watchlist.php">
                  <?php $scoreQuery = "SELECT * FROM watchlist WHERE anime = $row[0]";
                  $watchResult = mysqli_query($link, $scoreQuery);
                  if(mysqli_num_rows($watchResult) != 0) {
                    $watchRow = mysqli_fetch_array($watchResult);
                    $watch = $watchRow[3];
                  }
                  else{
                    $watch = -1;
                  }
                  ?>
                    <select onchange="this.form.submit()" name="status" id="status">
                      <option value="">--</option>
                      <option value="watching" <?php if(strcmp($watch, 'watching') == 1){ echo "selected";}?>>Watching</option>
                      <option value="stalled"<?php if(strcmp($watch, 'stalled') == 1){ echo "selected";}?>>Stalled</option>
                      <option value="completed"<?php if(strcmp($watch, 'completed') == 1){ echo "selected";}?>>Completed</option>
                      <option value="dropped"<?php if(strcmp($watch, 'dropped') == 1){ echo "selected";}?>>Dropped</option>
                      <option value="wantToWatch"<?php if(strcmp($watch, 'watToWatch') == 1){ echo "selected";}?>>Want to Watch</option>
                    </select>
                    <input type="hidden" name="anime" value="<?php echo $row[0] ?>" />
                  </form>
                </td>
            </tr>
            <?php endwhile;?>
            </table>
    </div>
</body>

  <html>
