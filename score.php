<?php 
       session_start();
       include 'config.php';
       if(isset($_POST['sub'])){
        $num = $_SESSION['score'];//q answered
        $tempn = $_SESSION['temp'];// checked
        $userid=$_SESSION['fd'];
        echo $num." ".$tempn;
        $feckn=$num-1;///total Q in test session
        $selectquery3 = "select * from prepareq where fetch_id='$userid'";
        $query3 = mysqli_query($con,$selectquery3);
        $nr3 = mysqli_num_rows($query3);
        // echo $_POST[$s];
        
        // $num++;
        // $tempn++;
        $i=0;//total attempted question 
        $score=0;
        // $id_f=$_POST['temp'];
        while(--$num){
            // echo "enter".$num."time"." ";
            if($num==0){
            break;}
            --$tempn;
            $i++;
            if(!isset($_POST[$tempn])){
                $i--;
            }
            if (!isset($_POST[$num]) || !isset($_POST[$tempn])) {
            // echo "deleted element:".$num." ";
            
            continue;
            }
            // else{
            //     echo $_POST[$num]." ";
            // }
            $qid_user_take=$_POST[$tempn];//give q_id by checkbox
            $select3 = "select * from prepareq where q_id='$qid_user_take'";
            $query3 = mysqli_query($con,$select3);
            $select3=mysqli_fetch_array($query3);

            // echo " ".$qid_user_take." ".$select3['ans']." ";
            // echo $_POST[$tempn];  //give q_id by checkbox

            $option = $_POST[$num]; //option whick is selected by user
            // echo " ".$option." " ;.
            if($option===$select3['ans']){
                $score++;
            }

            // echo "</br>";
            if($num<=0 || $tempn<=0){
            break;
            }
        
    }
    if($i!=0){
    $pr = ($score*100)/$feckn;
    }else{
        $pr=0;
    }
    $pr_num_for=number_format($pr,2);//set presion
    $_SESSION['score']=$score;
    $_SESSION['attempt']=$i;
    $_SESSION['feckn']=$feckn;
    $_SESSION['pr']=$pr_num_for;
    

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Q attempt</title>
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
                <li><a href="viewscore.php">VIEW_SCORE</a></li>
            </ul>
        </nav>
        <div class="lilo">
        <nav >
            <button type="button" onclick="window.location.href='logout.php';"   value="logout" name="logout" id="logout" style="color:red;">logout</button>
            <!-- <button type="button" onclick="window.location.href='login.php';" value="login" name="login" id="login" style="color:blue;">login</button> -->
        </nav>
        <!-- <div style="display:inline-block; font-size:2.5rem; border:2px solid gray; border-radius:30%; ">
                  <span style="color:red;">Q</span><span style="color:white;"> & </span><span style="color:blue;">A</span>
        </div> -->
        <div id="my" style="background-color:rgb(152, 208, 245); color:black;">
        <b> <p>Welcome! to<b style="color:red"> SCORE </b>section<b style="color:red;"> <?php echo $_SESSION['username'];?> </b></p></b>
    </div>
        </div>

    </header>
    <div id="my">
         <p>Welcome! to score section <?php echo $_SESSION['username'];?> <?php echo $_SESSION['id']; ?></p>
    </div>
    

    <table id="customers">
         <thead >
            <th>Sr.no</th>
            <th>Question</th>
            <th colspan="4">Option</th>
            <th>Image</th>
            <th>Conform</th>
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
    
?> <div>
        <h2 style="color:rgb(39, 239, 232); text-align:center; "><span style=" border-bottom:4px solid red; padding:2px;"><?php echo $select2['topic']; ?></span> </h2>

</div>
           <!-- <div>
            <h2 style="color:rgb(39, 239, 232); text-align:center; "><span style=" border-bottom:4px solid red; padding:2px;"><?php echo $select2['topic']; ?></span> </h2>
            <h2 style="color:rgb(39, 239, 39); text-align:center;">Your attempt : <?php //echo $i; ?> out of <?php //echo $feckn; ?> </h2>
            <h2 style="color:rgb(39, 239, 39); text-align:center;">Your score : <?php //echo $score; ?>  / <?php //echo $feckn; ?> </h2>
            <h2 style="color:rgb(39, 239, 39); text-align:center;">Your Percentage : <?php //echo $pr_num_for; ?> %  </h2>
           </div> 
            -->
        <?php
         while($select=mysqli_fetch_array($query)){
            
            $num++; 
            $tempn++;
            // echo $select['q_id']." ";
               ?>
            <div>
         <tr >
            <td rowspan="2">
                <?php echo "(".$num .")"; ?>
            </td>
            <td rowspan="2">
                <textarea name="q1" rows="6"><?php echo $select['question']; ?></textarea>
            </td>

            <td>(A)</td>
            <td>
                <input type="radio" name="<?php echo $num; ?>" id="o1"  value="10" <?php if(isset($_POST[$num])){ if($_POST[$num]==$select['a']) echo "checked"; else echo "disabled"; }else echo"disabled";?> ><?php echo $select['a']; ?></input>
            </td>
            <td>(B)</td>
            <td> <input type="radio" name="<?php echo $num; ?>" id="o2" value="<?php echo $select['b']; ?>" <?php if(isset($_POST[$num])){ if($_POST[$num]==$select['b']) echo "checked"; else echo "disabled"; }else echo"disabled";?> ><?php echo $select['b']; ?></input> </td> 
            
            <td rowspan="2">
            <input type="checkbox" name="<?php echo $tempn; ?>" id="cb" value="<?php  echo $select['q_id']; ?>" <?php if(isset($_POST[$tempn])){ echo "checked";}else echo "disabled"; ?>>conform question to attempt</input></td>
            <td rowspan="2"> <img src="<?php echo $select['image']; ?>" height="100px" width="100px" ></td>

        </tr>
         <!-- to display option in post -->
         <tr>
         <td>(C)</td>
         <td>   <input type="radio" name="<?php echo $num; ?>" id="o3"  value="<?php echo $select['c']; ?>" <?php if(isset($_POST[$num])){ if($_POST[$num]==$select['c']) echo "checked"; else echo "disabled"; }else echo"disabled";?>><?php echo $select['c']; ?></input>   </td>
         <td>(D)</td>
         <td>   <input type="radio" name="<?php echo $num; ?>" id="o4"  value="<?php echo $select['d']; ?>" <?php if(isset($_POST[$num])){ if($_POST[$num]==$select['d']) echo "checked"; else echo "disabled"; }else echo"disabled";?>><?php echo $select['d']; ?></input> </td>
         </tr>
         
        </div>

        <?php
        }
    }
    ?>

</table>
            <div style="font-size:12px; text-align: center; color:white; padding-top:2rem; " ><h2><span style=" border-bottom:4px solid red; padding:2px;">To view SCORE:</span></h2><a href="viewscore.php ?userid=<?php echo $_SESSION['id']; ?>" style="color:blue; background-color:white; font-size:2rem;">Displayscore</a></div>
</body>
</html>
