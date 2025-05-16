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
    <title>QUIZ-LIST</title>
    <link rel="stylesheet" type="text/css" href="ext_list.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body id="homeback">
<header id="head1">
        <nav >
            <ul class="navigation text-center">
                <li><a href="homepage.php">HOME</a></li>
                <li><a href="#about">ABOUT</li>
                <!-- <li><a href="insert.php">PREPARE Q</a></li> -->
                <!-- <li><a href="test.php">TEST</a></li> -->
                <li><a href="insert.php">CREATE Q</a></li>
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
    <style>
        #customers {
    font-family: Arial, Helvetica, sans-serif;
    border-collapse: collapse;
    width: 100%;
  }
  
  #customers td, #customers th {
    border: 1px solid #ddd;
    padding: 8px;
  }
  
  #customers tr:nth-child(even){background-color: #f2f2f2;}
  
  #customers tr:hover {background-color: #ddd;}
  
  #customers th {
    padding-top: 12px;
    padding-bottom: 12px;
    text-align: left;
    background-color: #04AA6D;
    color: white;
  }
  </style>
    <div id="my" style="background-color:rgb(152, 208, 245); color:black;">
        <b> <p>Welcome! to<b style="color:red"> QUIZ LIST</b>section<b style="color:red;"> <?php echo $_SESSION['username'];?> </b></p></b>
    </div>
<form method="post">
    <!-- <table id="insert_table"> -->
        
<table id="customers">
         <thead >
            <th>Sr.no</th>
            <th>TOPIC</th>
            <th></th>
         </thead>
    <?php

    // $ids = $_GET['userid'];
    // $selectquery="select * from topic where fetch_id='$ids'";
    $selectquery="select * from topic_name ";
    
    $query = mysqli_query($con,$selectquery);
    $num=0;
    // $query2 = mysqli_query($con,$selectquery2);

    // $select2 = mysqli_fetch_array($query2);

    $nr = mysqli_num_rows($query);
?> 
           
        <?php
         while($select=mysqli_fetch_array($query)){
            $num++;
               ?>
            
         <tr >
            <td >
                 <?php echo "(".$num.")"; ?>
            </td>
            <td >
                <?php echo $select['topic']; ?>
            </td>
            <td>
                <a href="quiz.php ?topic_id=<?php echo $select['fetch_id']; ?>" >Attempt this</a> 
            </td>
         </tr>
    
        <?php
        }
    ?>
    </table>
</body>
</html>