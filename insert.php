
<?php 
       session_start();
       include 'config.php';
       $error_msg = ""; 
      
?>
<?php 
    if(isset($_POST['submit'])){
        // include 'config.php';
        // $srno= $_POST['sr'];

        $fetch_id = $_SESSION['id']; 
        $question = $_POST['q1'];
        $opt1 = $_POST['option1'];
        $opt2 = $_POST['option2'];
        $opt3 = $_POST['option3'];
        $opt4 = $_POST['option4'];
        $ans = $_POST['ans'];
        // $img = $_FILES['image'];

        $image = $_FILES['image'];
        //  print_r($image);
 
        $filename=$image['name'];
        $filepath=$image['tmp_name'];
        $fileerror=$image['error'];
        if($fileerror==0){
            $destfile= 'upload/'.$filename;
            move_uploaded_file($filepath,$destfile);
            // $insert=" insert into prepa (image) values('$destfile')";
            // $res=mysqli_query($con,$insert);
        }
        // $res_image=mysqli_query($con,$insert_query_image);

         
        if($ans==$opt1 || $ans==$opt2 || $ans==$opt3 || $ans==$opt4){
        $insert_query =" insert into prepareq(fetch_id,question,a,b,c,d,ans,image) values('$fetch_id','$question','$opt1','$opt2','$opt3','$opt4','$ans','$destfile')"; 
        $res=mysqli_query($con,$insert_query);
        }
        else{
              $error_msg="corresponding entered answer not valid!!";

        }

        if ($error_msg !== '') {
            echo "<h2 style='color: red;'>$error_msg</h2>";
        }
        
        if($res){
            header('Location:viewq.php');
            // echo "added question succsefully";
        }
            // echo "ssssssssssssssssssss";
        
        
       

 
    }
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
         <p>Welcome! to PREPARE Question section <?php echo $_SESSION['username'];?></p>
    </div> -->
    <div id="my" style="background-color:rgb(152, 208, 245); color:black;">
        <b> <p>Welcome! to<b style="color:red"> PREPARE Q </b>section<b style="color:red;"> <?php echo $_SESSION['username'];?> </b></p></b>
    </div>
<form method="post" enctype="multipart/form-data">
    <div>
    <!-- <input type="text" name="topic" placeholder="SUBJECT"> -->
    </div>
    <div>
        <?php
        // $selectquery="select * from prepareq where fetch_id='$ids'";
        $selectquery2="select * from topic_name where fetch_id='$ids'";
        
        // $query = mysqli_query($con,$selectquery);
        $query2 = mysqli_query($con,$selectquery2);
    
        $select2 = mysqli_fetch_array($query2);
?>    
    <!-- <h2 style="color:rgb(39, 239, 232); text-align:center; "><span style=" border-bottom:4px solid red; padding:2px;"></span> </h2> -->

    </div>
    <table id="insert_table">
         <thead id="td1">
            
            <th>Question</th>
            <th colspan="4">Option</th>
            <th>Answer</th>
            <th>image</th>
            <th>Action</th>
         </thead>
        <div id="com1">
         <tr >
            <!-- <td rowspan="2">
            
            </td> -->
            <td rowspan="2">
                <textarea name="q1" plaseholder="Question type hear" rows="6"></textarea>
            </td>
            <td>(A)</td>
            <td>
                <input type="text" name="option1" id="o1" placeholder="Option(A)">
            </td>
            <td>(B)</td>
            <td> <input type="text" name="option2" id="o2" placeholder="Option(B)"> </td>
            <td rowspan="2">    <input type="text" name="ans" id="ans" placeholder="type correct option"> </td>
            <td rowspan="2"><input type="file" name="image" ></td>
            <!-- <td class="icon" rowspan="2" data-toggle="tooltip" data-placement="bottom" title="UPDATE"><i class="fa fa-edit"></i> </a></td> -->
                <!-- <td><a href="update.php?id">Edit</a></td> -->
            <!-- <td class="icon" rowspan="2" data-toggle="tooltip" data-placement="bottom" title="UPDATE"><i class="fa fa-edit"></i> </a></td> -->
            <td class="icon" rowspan="2"> <input type="submit" name="submit" value="SUBMIT Q" id="submit" > </td>
         </tr>
         <tr>
         <td>(C)</td>
         <td>   <input type="text" name="option3" id="o3" placeholder="Option(C)">   </td>
         <td>(D)</td>
         <td>   <input type="text" name="option4" id="o4" placeholder="Option(D)">   </td>
         </tr>
        </div>
    </table>
    <div style="font-size:12px; text-align: center; color:white; padding-top:2rem;" ><h3>To view all created Question:</h3><a href="viewq.php ?userid=<?php echo $_SESSION['id']; ?>" style="color:blue; background-color:white;">View Q</a></div>
    
</form>



</body>
</html>