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
    <title>SOLUTION</title>
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
                <!-- <li><a href="score.php"></a></li> -->
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
         <p>Welcome! to SOLUTION section <?php echo $_SESSION['username'];?> <?php echo $_SESSION['id']; ?></p>
    </div> -->
    <div id="my" style="background-color:rgb(152, 208, 245); color:black;">
        <b> <p>Welcome! to<b style="color:red"> SOLUTION </b>section<b style="color:red;"> <?php echo $_SESSION['username'];?> </b></p></b>
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
           <!-- <div>
            <h2 style="color:rgb(39, 239, 232); text-align:center; "><span style=" border-bottom:4px solid red; padding:2px;"><?php echo $select2['topic']; ?></span> </h2>
            <h2 style="color:rgb(39, 239, 39); text-align:center;">Your attempt : <?php echo $_SESSION['attempt']; ?> out of <?php echo $_SESSION['feckn']; ?> </h2>
            <h2 style="color:rgb(39, 239, 39); text-align:center;">Your score : <?php echo $_SESSION['score']; ?>  / <?php echo $_SESSION['feckn']; ?> </h2>
            <h2 style="color:rgb(39, 239, 39); text-align:center;">Your Percentage : <?php echo $_SESSION['pr']; ?> %  </h2>
           </div>  -->
           <table id="customers">
         <thead >
            <th>Sr.no</th>
            <th>Question</th>
            <th colspan="4">Option</th>
            <th>Image</th>
            
         </thead>
         <div>
            <h2  style="color:rgb(39, 239, 232); text-align:center; "><spna style=" border-bottom:4px solid red; padding:2px;"><?php echo $select2['topic'];"'s" ?> solution </spna></h2>
           </div> 
        <?php
         while($select=mysqli_fetch_array($query)){
            $num++; 
            $tempn++;
            // echo $select['q_id']." ";
               ?>
            <div >
         <tr >
            <td rowspan="2">
                <?php echo "(".$num .")"; ?>
            </td>
            <td rowspan="2">
                <textarea name="q1" rows="6"><?php echo $select['question']; ?></textarea>
            </td>

            <td>(A)</td>
            <td>
                <input type="radio" name="<?php echo $num; ?>" id="o1"  value="<?php echo $select['a']; ?>" <?php if($select['ans']==$select['a'])echo 'checked';else echo "disabled"; ?> ><?php echo $select['a']; ?></input>
            </td>
            <td>(B)</td>
            <td> <input type="radio" name="<?php echo $num; ?>" id="o2" value="<?php echo $select['b']; ?>" <?php if($select['ans']==$select['b'])echo 'checked';else echo "disabled"; ?>><?php echo $select['b']; ?></input> </td> 
            <td rowspan="2"> <img src="<?php echo $select['image']; ?>" height="100px" width="100px" ></td>
            <!-- <td rowspan="2"> -->
            <!-- <input type="checkbox" name="" id="cb" value="">conform question to attempt</input></td> -->
         </tr>
         <!-- to display option in post -->
         <tr>
         <td>(C)</td>
         <td>   <input type="radio" name="<?php echo $num; ?>" id="o3"  value="<?php echo $select['c']; ?>" <?php if($select['ans']==$select['c'])echo 'checked';else echo "disabled"; ?>><?php echo $select['c']; ?></input>   </td>
         <td>(D)</td>
         <td>   <input type="radio" name="<?php echo $num; ?>" id="o4"  value="<?php echo $select['d']; ?>" <?php if($select['ans']==$select['d'])echo 'checked';else echo "disabled"; ?>><?php echo $select['d']; ?></input> </td>
         </tr>
         
        </div>
    
        <?php
        }
    ?>
</table>
<
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
    
