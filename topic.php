
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
    <title>Prepare Quiz</title>
    <link rel="stylesheet" type="text/css" href="eh.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    
</head>
<style>

</style>
<body id="homeback">

    <heade id="head1">
        <nav >
            <ul class="navigation text-center">
                <li><a href="homepage.php">HOME</a></li>
                <li><a href="#about">ABOUT</li>
                <!-- <li><a href="insert.php">PREPARE Q</a></li> -->
                <li><a href="quizlist.php">TEST</a></li>
                <li><a href="viewq.php ?userid=<?php echo $_SESSION['id']; ?>">VIEW Q</a></li>
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

    </heade>
    <!-- <div id="my">
         <p>Welcome! please enter topic name </p>
    </div> -->
    <div id="my" style="background-color:rgb(152, 208, 245); color:black;">
        <b> <p>Welcome! to<b style="color:red">  </b><b style="color:red;"> <?php echo $_SESSION['username'];?> </b></p></b>
    </div>
<form method="post">
    <div>
    <h3 style="color:rgb(62, 245, 30); text-align:center;">Write topic for question:<input type="text" name="topic" placeholder="SUBJECT">
    <input type="submit" name="submit" value="conform topic name"></h3>
</form>


<?php 
    if(isset($_POST['submit'])){
        // include 'config.php';

        $fetch_id = $_SESSION['id']; 
        $topicnm = $_POST['topic'];
        $insert_query2 = "insert into topic_name(fetch_id,topic)values('$fetch_id','$topicnm')";
        $res2=mysqli_query($con,$insert_query2);

        
            if($res2){
            echo "added question succsefully";
            }
        
        header('Location:insert.php');

    }
    ?>
</body>
</html>