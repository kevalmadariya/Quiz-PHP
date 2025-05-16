<?php
     session_start();
     include 'config.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SCORE</title>
    <link rel="stylesheet" type="text/css" href="eh.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body id="homeback">
<header id="head1">
        <nav >
            <ul class="navigation text-center">
                <li><a href="homepage.php">HOME</a></li>
                <li><a href="#about">ABOUT</li>
                <!-- <li><a href="insert.php">PREPARE Q</a></li> -->
                <li><a href="quizlist.php">TEST</a></li>
                <li><a href="solution.php">SOLUTION</a></li>
            </ul>
        </nav>
        <div class="lilo">
        <nav >
            <button type="button" onclick="window.location.href='logout.php';"   value="logout" name="logout" id="logout" style="color:red;">logout</button>
            <!-- <button type="button" onclick="window.location.href='login.php';" value="login" name="login" id="login" style="color:blue;">login</button> -->
        </nav>
        <div style="display:inline-block; font-size:2.5rem; border:2px solid gray; border-radius:30%; ">
                  <span style="color:red;">Q</span><span style="color:white;"> & </span><span style="color:blue;">A</span>
        </div>
        </div>

    </header>
    <!-- <div id="my">
         <p>Welcome! to score section <?php echo $_SESSION['username'];?> <?php echo $_SESSION['id']; ?></p>
    </div> -->
    <div id="my" style="background-color:rgb(152, 208, 245); color:black;">
        <b> <p>Welcome! to<b style="color:red"> VIEW SCORE </b>section<b style="color:red;"> <?php echo $_SESSION['username'];?> </b></p></b>
    </div>

   
         </thead>
    <?php
   $num=0;
   $tempn=100;
    $ids = $_SESSION['topic'];
    $selectquery2="select * from topic_name where fetch_id='$ids'";
    $query2 = mysqli_query($con,$selectquery2);
    $select2 = mysqli_fetch_array($query2);//topic-selest2
    $userid = $select2['fetch_id'];//user's id vi topic

    $selectquery="select * from prepareq where fetch_id='$userid'";
    $query = mysqli_query($con,$selectquery);
    $nr = mysqli_num_rows($query);
?> 
            <h2 style="color:rgb(39, 239, 232); text-align:center; "><span style=" border-bottom:4px solid red; padding:2px;"><?php echo $select2['topic']; ?></span> </h2>
           <div style="background-color:white;">
            <h2 style="color:rgb(39, 239, 39); text-align:center;">Your attempt : <?php echo $_SESSION['attempt']; ?> out of <?php echo $_SESSION['feckn']; ?> </h2>
            <h2 style="color:rgb(39, 239, 39); text-align:center;">Your score : (<?php echo $_SESSION['score']; ?>  / <?php echo $_SESSION['feckn']; ?>) </h2>
            <h2 style="color:rgb(39, 239, 39); text-align:center;">Your Percentage : <?php echo $_SESSION['pr']; ?> %  </h2>
           </div>
            <div style="color:red; text-align:center;">
            <?php 
              if($_SESSION['pr']>=90){
                   ?>
                   <h3>exelleant</h3>
                   <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQserHBsKt1yTkhzFEBpYK_0HQ1ljJ6sO8tGt2Ph7KAPg&usqp=CAU&ec=48665699" alt="exelleant">
                   <?php
              }else if($_SESSION['pr']>=80){
                ?>
                <h3>good</h3>
                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSS80Skvm3QvPnC9QPB1wl3IBsrflFsR5JLohuqIvlOKw&usqp=CAU&ec=48665699" alt="good">
                <?php
              }else if($_SESSION['pr']>=65){
                ?>
                <h3>average</h3>
                <img src="https://en.pimg.jp/050/958/848/1/50958848.jpg" alt="medium">
                <?php
              }else if($_SESSION['pr']>=33){
                ?>
                <h3>poor</h3>
                <img src="https://t.pimg.jp/053/154/802/1/53154802.jpg" alt="poor">
                <?php
              }else{
                ?>
                <h3>fail</h3>
                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQ1EOxNV1xdgVEp7ZaQQM5qZdYbQTm0u71bYf3frWGJWg&usqp=CAU&ec=48665699" alt="fail">
                <?php
              }
            ?>
           </div> 
           <div style="font-size:12px; text-align: center; color:white; padding-top:2rem;" ><h2>To view SOLUTION:</h2><a href="solution.php ?userid=<?php echo $_SESSION['id']; ?>" style="color:blue; background-color:white; font-size:2rem;">SOLUTION</a></div>


    
</body>
</html>