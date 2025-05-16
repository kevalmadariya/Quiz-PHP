
<?php 
       session_start();

       if(!isset($_SESSION['username'])){
        echo "you are loged out";
        header('location:login.php');
       }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>home page</title>
    <link rel="stylesheet" type="text/css" href="eh.css">
    
</head>
<style>
#homeback{
    height:65vh;
    /* background-image:  url("https://www.google.com/imgres?q=background%20image%20for%20website&imgurl=https%3A%2F%2Ft3.ftcdn.net%2Fjpg%2F07%2F23%2F11%2F50%2F360_F_723115083_Xxh78ffOyOcBqeSJQ1bXOm9xEqcaQ2mr.jpg&imgrefurl=https%3A%2F%2Fstock.adobe.com%2Fsearch%3Fk%3Dwebsite%2Bbackground&docid=G3d1jNe1C_KzvM&tbnid=teiNE3YdK6lkTM&vet=12ahUKEwjVkMrYkKONAxVzjWMGHZ-2M6QQM3oECFUQAA..i&w=643&h=360&hcb=2&ved=2ahUKEwjVkMrYkKONAxVzjWMGHZ-2M6QQM3oECFUQAA"); */
    background-image:linear-gradient(rgba(52, 41, 109, 0.4), rgba(17, 12, 12, 0.4)),url("https://www.google.com/imgres?q=background%20image%20for%20website&imgurl=https%3A%2F%2Ft3.ftcdn.net%2Fjpg%2F07%2F23%2F11%2F50%2F360_F_723115083_Xxh78ffOyOcBqeSJQ1bXOm9xEqcaQ2mr.jpg&imgrefurl=https%3A%2F%2Fstock.adobe.com%2Fsearch%3Fk%3Dwebsite%2Bbackground&docid=G3d1jNe1C_KzvM&tbnid=teiNE3YdK6lkTM&vet=12ahUKEwjVkMrYkKONAxVzjWMGHZ-2M6QQM3oECFUQAA..i&w=643&h=360&hcb=2&ved=2ahUKEwjVkMrYkKONAxVzjWMGHZ-2M6QQM3oECFUQAA");
    background-size:cover;
    background-position: center;
    background-attachment: fixed;
}
</style>
<body id="homeback">

    <heade id="head1">
        <nav >
            <ul class="navigation text-center">
                <li><a href="homepage.php">HOME</a></li>
                <li><a href="#about">ABOUT</li>
                <li><a href="topic.php">PREPARE Q</a></li>
                <li><a href="quizlist.php">TEST</a></li>
            </ul>
        </nav>
        <div class="lilo">
             <div style="display:inline-block; font-size:2.5rem; border:2px solid gray; border-radius:30%; ">
                  <span style="color:red;">Q</span><span style="color:white;"> & </span><span style="color:blue;">A</span>
             </div>
        <nav >
            <button type="button" onclick="window.location.href='logout.php';"   value="logout" name="logout" id="logout" style="color:red;">logout</button>
            <!-- <button type="button" onclick="window.location.href='login.php';" value="login" name="login" id="login" style="color:blue;">login</button> -->
            
        </nav>
        </div>

    </heade>
    <div id="myname">
         <p>Welcome! &nbsp <?php echo $_SESSION['username'];?></p>
    </div>

    
</body>
</html>