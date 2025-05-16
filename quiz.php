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
    <title>QUIZ</title>
    <link rel="stylesheet" type="text/css" href="ext_quiz.css">
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
                <li><a href="insert.php">ADD Q</a></li>
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
         <p >Welcome! to QUIZ Question section <?php echo $_SESSION['username'];?></p>
    </div> -->
    <div id="my" style="background-color:rgb(152, 208, 245); color:black;">
        <b> <p>Welcome! to<b style="color:red"> QUIZ </b>section<b style="color:red;"> <?php echo $_SESSION['username'];?> </b></p></b>
    </div>
    
<form action="score.php" method="post">
    <table id="customers">
         <thead id="td1">
            <th>Sr.no</th>
            <th>Question</th>
            <th colspan="4">Option</th>
            <th >Image</th>
            <th>Conform</th>
         </thead>
    <?php
   $num=0;
   $tempn=100;
    $ids = $_GET['topic_id'];
    $_SESSION['topic']=$ids;
    $selectquery2="select * from topic_name where fetch_id='$ids'";
    $query2 = mysqli_query($con,$selectquery2);
    $select2 = mysqli_fetch_array($query2);//topic-selest2
    $userid = $select2['fetch_id'];//user's id vi topic

    $selectquery="select * from prepareq where fetch_id='$userid'";
    $query = mysqli_query($con,$selectquery);
    $nr = mysqli_num_rows($query);
?> 
           <div>
            <!-- <h2 style="color:blue; text-align:center;"> </h2> -->
            <h2 style="color:rgb(39, 239, 232); text-align:center; "><span style=" border-bottom:4px solid red; padding:2px;"><?php echo $select2['topic']; ?></span> </h2>   
        </div> 
        <?php
         while($select=mysqli_fetch_array($query)){
            $num++; 
            $tempn++;
            // echo $select['q_id']." ";
               ?>
            <div id="com1">
         <tr >
            <td rowspan="2" class="nop">
                <?php echo "(".$num .")"; ?>
            </td>
            <td rowspan="2">
                <textarea name="q1" rows="6" ><?php echo $select['question']; ?></textarea>
            </td>

            <td>(A)</td>
            <td>
                <input type="radio" name="<?php echo $num; ?>" id="o1"  value="<?php echo $select['a']; ?>"><?php echo $select['a']; ?></input>
            </td>
            <td>(B)</td>
            <td> <input type="radio" name="<?php echo $num; ?>" id="o2" value="<?php echo $select['b']; ?>"><?php echo $select['b']; ?></input> </td> 
            <td rowspan="2"><img src="<?php echo $select['image']; ?>" height="100px" width="100px"></td>
            <td rowspan="2">
            <input type="checkbox" name="<?php echo $tempn; ?>" id="cb" value="<?php  echo $select['q_id']; ?>">conform question to attempt</input></td>
         </tr>
         <!-- to display option in post -->
         <tr>
         <td>(C)</td>
         <td>   <input type="radio" name="<?php echo $num; ?>" id="o3"  value="<?php echo $select['c']; ?>"><?php echo $select['c']; ?></input>   </td>
         <td>(D)</td>
         <td>   <input type="radio" name="<?php echo $num; ?>" id="o4"  value="<?php echo $select['d']; ?>"><?php echo $select['d']; ?></input> </td>
         </tr>
         
        </div>
    
        <?php
        }
    ?>
</table>
<div >
  <h3 style="color:aliceblue; text-align:center;"><input type="submit" name="sub" value="SUBMIT QUIZ" ></h3>
    </div>
    <?php
$num++;
 $tempn++;
        $_SESSION['fd']=$userid;
        // echo $_SESSION['fb'];
        $_SESSION['score']=$num;
        $_SESSION['temp']=$tempn;
        // echo $_SESSION['temp'];
//         $_SESSION['attempt']=$i;
    
//         // echo " ".$i;
//     }
              
         
       ?> 
       

</form>
</body>
</html>