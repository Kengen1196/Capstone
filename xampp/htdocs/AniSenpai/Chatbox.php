<!-- 
Kevin Nguyen
Le Phan
Ethan Thao

AniSenpai The Greatest Webpage
Reference code from “Online Group Chat Application Using PHP.” GeeksforGeeks, 7 Aug. 2021, https://www.geeksforgeeks.org/online-group-chat-application-using-php/.
-->



<?php
session_start();
if (!empty($_POST)){
if (isset($_POST['global'])) {
   $_SESSION['channel'] = 0;
}
    
if (isset($_POST['discussion'])) {
   $_SESSION['channel'] = 1;
}
if (isset($_POST['action'])) {
   $_SESSION['channel'] = 2;
   }
if (isset($_POST['slice'])) {
   $_SESSION['channel'] = 3;
}
if (isset($_POST['fantasy'])) {
   $_SESSION['channel'] = 4;
}
}
else{
    $_SESSION['channel'] = 0;
}
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <link rel="stylesheet" href="Chatbox.css">
        <title>WeebChat</title>
    </head>

    <body onload="show_func()">

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
    </div>
    <a href="AnimeList.php">Anime</a>
    <a href="Forum.php">Forum</a>
    <a href='Homepage.php#ads'>Sites</a>
    
    <div class="AniSenpai">
      <li><a href=Homepage.php>AniSenpai</a></li>
    </div>

    </div>


    <div id="container">
            <div id="title">
                <h1 class="title">Weeb Social</h1>
            </div>
            <div class="chatbox">
            <form action="Chatbox.php" method = "POST">
                <div class="channels">
                    <h2>Channels</h2>
                    <br>
                    <ul>
                        <li>
                            <input name="global" type="submit" value="Global Chat" style="background-color: inherit;width: 100%;outline: none;cursor: pointer;transition: 0.3s;font-size: 30px;color: white;"/>
                        </li>
                        <li>
                        <input name="discussion" type="submit" value="Discussion Chat" style="background-color: inherit;width: 100%;outline: none;cursor: pointer;transition: 0.3s;font-size: 30px;color: white;"/>
                        </li>
                        <li>
                        <input name="action" type="submit" value="Action Chat" style="background-color: inherit;width: 100%;outline: none;cursor: pointer;transition: 0.3s;font-size: 30px;color: white;"/>
                        </li>
                        <li>
                        <input name="slice" type="submit" value="Slice of Life Chat" style="background-color: inherit;width: 100%;outline: none;cursor: pointer;transition: 0.3s;font-size: 30px;color: white;"/>
                        </li>
                        <li>
                        <input name="fantasy" type="submit" value="Fantasy Chat" style="background-color: inherit;width: 100%;outline: none;cursor: pointer;transition: 0.3s;font-size: 30px;color: white;"/>
                        </li>
                    </ul>
                </div>
                </form>
                <div class="chat">
                        <div class="inner_div" id="chathist">
                        <?php
                        include_once 'config.php';
                        $channel = $_SESSION['channel'];
                        echo $channel;

                        $query = "SELECT * FROM chat";
                         $run = $link->query($query);
                         $i=0;
                         while($row = $run->fetch_array()) :
                            
                        if($row["channel"] == $channel){
                             if($row['Sender'] != $_SESSION["username"]){
                             $i=5;
                             $first=$row;
                             ?>
                             <div id="triangle2" class="triangle2"></div>
                             <div id="message2" class="message2">
                            <h3>
                             <?php echo $row['Sender']; ?>
                             </h3>
                             <span style="color:white;float:right;">
                              <?php echo $row['Content']; ?>
                             </span> <br/>
                             <div>
                              <span style="color:black;float:left;
                               font-size:10px;clear:both;">
                               <?php echo $row['Created']; ?>
                             </span>
                             </div>
                            </div>
                            <br/><br/>
                             <?php
                             }
                            else
                            {
                            ?>
                             <div id="triangle1" class="triangle1"></div>
                             <div id="message1" class="message1">
                             <h3>
                             <?php echo $row['Sender']; ?>
                             </h3>
                             <span style="color:white;float:left;">
                             <?php echo $row['Content']; ?></span> <br/>
                             <div>
                              <span style="color:black;float:right;
                                      font-size:10px;clear:both;">
                                    <?php echo $row['Created']; ?>
                             </span>
                            </div>
                            </div>
                            <br/><br/>
                            <?php
                            }
                        }
                        endwhile; ?>
                        </div>
                </div>
            </div>
            <footer>
                <form action="chatSubmit.php" method = "POST">
                    <input id="Content" name="Content" type="text" />
                    <input id="submit" name="submit" type="submit" value="Send" />
                </form>
            </footer>
    </div>
</html>