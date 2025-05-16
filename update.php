
<?php 
       session_start();
       include 'config.php';
       $checkid=$_GET['idmake'];

        $showquery="select * from prepareq where q_id='$checkid'";
        $showdata=mysqli_query($con,$showquery);
        $arrdata=mysqli_fetch_array($showdata);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>update Q</title>
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
    <!-- <div <p>Welcome! to UPDATE Question section</p>
    </div>id="my"> -->
    <div id="my" style="background-color:rgb(152, 208, 245); color:black;">
        <b> <p>Welcome! to<b style="color:red"> UPDATE </b>section<b style="color:red;"> <?php echo $_SESSION['username'];?> </b></p></b>
    </div>
         
<form method="post" enctype="multipart/form-data">
    <div>
    <!-- <input type="text" name="topic" placeholder="SUBJECT"> -->
    </div>
    <table id="insert_table">
         <thead id="td1">
            
            <th>Question</th>
            <th colspan="4">Option</th>
            <th>Answer</th>
            <th colspan="3">image</th>
            <th >Action</th>
         </thead>
        <div id="com1">
         <tr >
            
            <td rowspan="2">
                <textarea name="q1" plaseholder="Question type hear" rows="6"><?php echo $arrdata['question']; ?></textarea>
            </td>
            <td>(A)</td>
            <td>
                <input type="text" name="option1" id="o1" value="<?php echo $arrdata['a']; ?>">
            </td>
            <td>(B)</td>
            <td> <input type="text" name="option2" id="o2" value="<?php echo $arrdata['b']; ?>"> </td>
            <td rowspan="2">    <input type="text" name="ans" id="ans"  value="<?php echo $arrdata['ans']; ?>"> </td>
            <td rowspan="2"> <input type="file" name="image"></input><td>
            <td rowspan="2"><img src="<?php echo $arrdata['image']; ?>" alt="img" height="100px" width="100px"> </td>

            <!-- <td class="icon" rowspan="2" data-toggle="tooltip" data-placement="bottom" title="UPDATE"><i class="fa fa-edit"></i> </a></td> -->
                <!-- <td><a href="update.php?id">Edit</a></td> -->
            <!-- <td class="icon" rowspan="2" data-toggle="tooltip" data-placement="bottom" title="UPDATE"><i class="fa fa-edit"></i> </a></td> -->
            <td class="icon" rowspan="2"> <input type="submit" name="submit" value="SUBMIT Q" id="submit" > </td>
         </tr>
         <tr>
         <td>(C)</td>
         <td>   <input type="text" name="option3" id="o3" value="<?php echo $arrdata['c']; ?>">   </td>
         <td>(D)</td>
         <td>   <input type="text" name="option4" id="o4" value="<?php echo $arrdata['d']; ?>">   </td>
         </tr>
        </div>
    </table>
    <div style="font-size:12px; text-align: center; color:white; padding-top:2rem;" ><h3>To view all created Question:</h3><a href="viewq.php ?userid=<?php echo $_SESSION['id']; ?>" style="color:blue; background-color:white;">View Q</a></div>
    
</form>


<?php 
    if(isset($_POST['submit'])){
        // include 'config.php';
        

        $fetch_id = $_SESSION['id']; 
        $question = $_POST['q1'];
        $opt1 = $_POST['option1'];
        $opt2 = $_POST['option2'];
        $opt3 = $_POST['option3'];
        $opt4 = $_POST['option4'];
        $ans = $_POST['ans'];
        $image = $_FILES['image'];

        $filename=$image['name'];
        $filepath=$image['tmp_name'];
        $fileerror=$image['error'];
 
        $destfile="upload/".$filename;
        move_uploaded_file($filepath,$destfile);


        if($ans==$opt1 || $ans==$opt2 || $ans==$opt3 || $ans==$opt4){
        $update_query="UPDATE prepareq SET fetch_id='$fetch_id', question='$question', a='$opt1', b='$opt2' ,c='$opt3' ,d='$opt4' ,ans='$ans',image='$destfile' WHERE q_id=$checkid";
        $res=mysqli_query($con,$update_query);
        header('Location:viewq.php');

        }else{
            echo "not updated!!";
        }
       

       

      
    }
    ?>
</body>
</html>