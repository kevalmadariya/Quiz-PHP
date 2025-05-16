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
    <title>VIEW Q</title>
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
         <p>Welcome! to VIEW Question section <?php echo $_SESSION['username'];?> <?php echo $_SESSION['id']; ?></p>
    </div> -->
    <div id="my" style="background-color:rgb(152, 208, 245); color:black;">
        <b> <p>Welcome! to<b style="color:red"> VIEW Q </b>section<b style="color:red;"> <?php echo $_SESSION['username'];?> </b></p></b>
    </div>
<form method="post">
    <table id="insert_table">
         <thead id="td1">
            <th>Sr.no</th>
            <th>Question</th>
            <th colspan="4">Option</th>
            <th>Answer</th>
            <th>Image</th>
            <th colspan="2">Action</th>
            
         </thead>
    <?php

    if(isset($_GET['userid'])){
        $ids=$_GET['userid'];
    }
    else{
        $ids=$_SESSION['id'];
    }
    $selectquery="select * from prepareq where fetch_id='$ids'";
    $selectquery2="select * from topic_name where fetch_id='$ids'";
    
    $query = mysqli_query($con,$selectquery);
    $query2 = mysqli_query($con,$selectquery2);

    $select2 = mysqli_fetch_array($query2);

    $nr = mysqli_num_rows($query);
?> 
           <div>
            <!-- <h2 style="color:blue; text-align:center;"><?php echo $select2['topic']; ?> </h2> -->
            <h2 style="color:rgb(39, 239, 232); text-align:center; "><span style=" border-bottom:4px solid red; padding:2px;"><?php echo $select2['topic']; ?></span> </h2>   
        </div> 
        <?php
        $num=0;
         while($select=mysqli_fetch_array($query)){
            $num++;
               ?>
            <div id="com1">
         <tr >
            <td rowspan="2">
                (<?php echo $num; ?>) 
            </td>
            <td rowspan="2">
                <textarea name="q1" rows="6"><?php echo $select['question']; ?></textarea>
            </td>
            <td>(A)</td>
            <td>
                <input type="text" name="option1" id="o1" placeholder="Option(A)" value="<?php echo $select['a']; ?>">
            </td>
            <td>(B)</td>
            <td> <input type="text" name="option2" id="o2" placeholder="Option(B)" value="<?php echo $select['b']; ?>"> </td>
            <td rowspan="2">    <input type="text" name="ans" id="ans" placeholder="type correct option" value="<?php echo $select['ans']; ?>"> </td>
            <!-- <td class="icon" rowspan="2" data-toggle="tooltip" data-placement="bottom" title="UPDATE"><i class="fa fa-edit"></i> </a></td> -->
                <!-- <td><a href="update.php?id">Edit</a></td> -->
            <!-- <td class="icon" rowspan="2" data-toggle="tooltip" data-placement="bottom" title="UPDATE"><i class="fa fa-edit"></i> </a></td> -->
            <!-- <td class="icon" rowspan="2"> <input type="submit" name="submit" value="SUBMIT Q" id="submit" > </td> -->
            <td rowspan="2"><img src="<?php echo $select['image']; ?> " height="100px" width="100px"></td>
            <td class="icon" rowspan="2"> <a href="update.php ?idmake=<?php echo $select['q_id']; ?>" data-toggle="tooltip" data-placement="bottom" title="UPDATE"><i class="fa fa-edit"></i> </a></td>
            <td class="icon" rowspan="2">  <a href="delete.php ?idcheck=<?php echo $select['q_id']; ?>"  data-toggle="tooltip" data-placement="bottom" title="DELETE"><i class="fa fa-trash"></i></a></td>

         </tr>
         <tr>
         <td>(C)</td>
         <td>   <input type="text" name="option3" id="o3" placeholder="Option(C)" value="<?php echo $select['c']; ?>">   </td>
         <td>(D)</td>
         <td>   <input type="text" name="option4" id="o4" placeholder="Option(D)" value="<?php echo $select['d']; ?>"> </td>
         </tr>
        </div>
    
        <?php
        }
    ?>
    </table>
</body>
</html>