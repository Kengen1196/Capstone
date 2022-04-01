<?php
if (isset($_POST['submit'])){
      
    $link = mysqli_connect("localhost",
                "root", "", "anisenpai");
       
    // Check connection
    if($link === false){
        die("ERROR: Could not connect. "
                . mysqli_connect_error());
    }
       
    // Escape user inputs for security
    $un= mysqli_real_escape_string(
            $link, $_REQUEST['Sender']);
    $m = mysqli_real_escape_string(
            $link, $_REQUEST['Content']);
    date_default_timezone_set('America/North_Dakota/Center');
    $ts = time();
       
    // Attempt insert query execution
    $sql = "INSERT INTO chat (Sender, Content, Created)
                VALUES ('$un', '$m', '$ts')";
    if(mysqli_query($link, $sql)){
        ;
    } else{
        echo "ERROR: Message not sent!!!";
    }
      
    // Close connection
    mysqli_close($link);
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
    <a href="#animeList">Anime</a>
    <a href="#forum">Forum</a>
    <a href='#ads'>Sites</a>
    <a href="#chat">Chat</a>
    
    <div class="AniSenpai">
      <li><a href=homepage.php>AniSenpai</a></li>
    </div>




  </div>

    <div id="container">
            <div id="title">
                <h1 class="title">Weeb Social</h1>
            </div>
            <div class="chatbox">
                <div class="channels">
                    <h2>Channels</h2>
                    <ul>
                        <li>
                            <button class="tablinks" onclick="openCity(event, 'London')">Channel 1</button>
                        </li>
                        <li>
                            <button class="tablinks" onclick="openCity(event, 'London')">Channel 2</button>
                        </li>
                        <li>
                            <button class="tablinks" onclick="openCity(event, 'London')">Channel 3</button>
                        </li>
                        <li>
                            <button class="tablinks" onclick="openCity(event, 'London')">Channel 4</button>
                        </li>
                        <li>
                            <button class="tablinks" onclick="openCity(event, 'London')">Channel 5</button>
                        </li>
                    </ul>
                </div>
                <div class="chat">
                    <script>
                        function show_func(){
                        
                         var element = document.getElementById("chathist");
                            element.scrollTop = element.scrollHeight;
                        
                         }
                    </script>

                        <form id="myform">
                        <div class="inner_div" id="chathist">
                        <?php
                        $host = "localhost";
                        $user = "root";
                        $pass = "";
                        $db_name = "anisenpai";
                        $con = new mysqli($host, $user, $pass, $db_name);

                        $query = "SELECT * FROM chat";
                         $run = $con->query($query);
                         $i=0;

                         while($row = $run->fetch_array()) :
                         if($i==0){
                         $i=5;
                         $first=$row;
                         ?>
                         <div id="triangle1" class="triangle1"></div>
                         <div id="message1" class="message1">
                         <span style="color:white;float:right;">
                          <?php echo $row['Content']; ?>
                         </span> <br/>
                         <div>
                          <span style="color:black;float:left;
                           font-size:10px;clear:both;">
                           <?php echo $row['Sender']; ?>, <?php echo $row['Created']; ?>
                         </span>
                         </div>
                        </div>
                        <br/><br/>
                         <?php
                         }
                        else
                        {
                        if($row['Sender']!=$first['Sender'])
                        {
                        ?>
                         <div id="triangle" class="triangle"></div>
                         <div id="message" class="message">
                         <span style="color:white;float:left;">
                         <?php echo $row['Content']; ?></span> <br/>
                         <div>
                          <span style="color:black;float:right;
                                  font-size:10px;clear:both;">
                           <?php echo $row['Sender']; ?>,
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
                         <span style="color:white;float:right;">
                         <?php echo $row['Content']; ?></span> <br/>
                         <div>
                          <span style="color:black;float:left;
                                  font-size:10px;clear:both;">
                            <?php echo $row['Sender']; ?>,
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
                        </form>
                </div>
            </div>
            <footer>
                <form action="Chatbox.php" method = "POST">
                    <input id = "Content" name="Content" type="text" id="Content" />
                    <input name="submit" type="submit" id="submit" value="Send" />
                </form>
            </footer>
    </div>
</html>