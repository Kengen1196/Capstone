<!-- 
Kevin Nguyen
Le Phan
Ethan Thao

AniSenpai The Greatest Webpage

-->



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

    <a href="AnimeList.php">Anime</a>
    <a href="#forum">Forum</a>
    <a href='#ads'>Sites</a>
    <a href="#chat">Chat</a>
    
    <div class="AniSenpai">
      <li><a href=homepage.php>AniSenpai</a></li>
</div>
  </div>

  <form action="userSubmission.php" method="POST">
    <div class="container">
        <?php    
        $link = mysqli_connect("localhost","root", "", "anisenpai");      
        $query = "SELECT * FROM animelibrary";
        $result = mysqli_query($link, $query);
        ?>

        <table cellpadding="0" cellspacing="0" width="100%" class="animeList">
            <caption class="header" style="text-align:center"></caption>
            <tr class="table-header">
                <td class="rank">Rank</td>
                <td class="title">Title</td>
                <td class="score">Score</td>
                <td class="userScore">User Rating</td>
                <td class="status">Status</td>
            </tr>
            
            <?php while($row = mysqli_fetch_array($result)):;?>
            <tr>
                <td><?php echo $row[0];?></td>
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
                <td><?php echo $row[2];?></td>
                <td>
                <select onchange="this.form.submit()" name="score" id="userScore">
                    <option value="">--</option>
                    <option value="10">10</option>
                    <option value="9">9</option>
                    <option value="8">8</option>
                    <option value="7">7</option>
                    <option value="6">6</option>
                    <option value="5">5</option>
                    <option value="4">4</option>
                    <option value="3">3</option>
                    <option value="2">2</option>
                    <option value="1">1</option>
                    <option value="0">0</option>
                  </select>
                </td>
                <td>
                    <select onchange="this.form.submit()" name="watching" id="status">
                    <option value="">--</option>
                    <option value="watching">Watching</option>
                    <option value="stalled">Stalled</option>
                    <option value="completed">Completed</option>
                    <option value="dropped">Dropped</option>
                    <option value="wantToWatch">Want to Watch</option>
                  </select>
                </td>
            </tr>
            <?php endwhile;?>
            </table>
    </div>
    </form>
</body>

  <html>
