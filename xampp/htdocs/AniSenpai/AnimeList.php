<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Anime List</title>
<script type="text/javascript"></script>
<link rel="stylesheet" href="AnimeList.css">
</head>
<body>
     <!-- Navigation Bar-->

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

    <div class="container">
        <?php
              
        $link = mysqli_connect("localhost","root", "", "anisenpai");      
        $query = "SELECT * FROM animelibrary";
        $result1 = mysqli_query($link, $query);
        $dataRow = "";
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
            <?php while($row1 = mysqli_fetch_array($result1)):;?>
            <tr>
                <td><?php echo $row1[0];?></td>
                <td><img src= <?php echo "Images/".$row1[7];?>> 
                    <div class="tooltip"><?php echo $row1[1];?>
                        <div class="genre">
                            <p>Genres:<?php echo $row1[4];?>
                           <br>
                           Episodes:<?php echo $row1[3];?>
                        </p>
                        </div>
                        <span class="tooltiptext">
                            <?php echo $row1[5];?>
                        </span> 
                    </div>
                </td>
                <td><?php echo $row1[2];?></td>
                <td>
                <select name="score" id="userScore">
                    <option value="-">--</option>
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
                    <select name="watching" id="status">
                    <option value="-">--</option>
                    <option value="watching">Watching</option>
                    <option value="stalled">Stalled</option>
                    <option value="completed">Completed</option>
                    <option value="dropped">Dropped</option>
                    <option value="wantToWatch">Want to Watch</option>
                  </select>
                </td>
            </tr>
            <?php endwhile;?>
            <?php echo $dataRow;?>
        <br><br>
        </table>
    </div>
</body>
</html>
