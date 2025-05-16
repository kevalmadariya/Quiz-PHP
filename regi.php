<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>regidtration for q&a</title>
    <link rel="stylesheet" type="text/css" href="external.css">
</head>
<body id="regibody">
<div style="display:inline-block; font-size:2.5rem; border:2px solid gray; border-radius:30%; ">
                  <span style="color:red;">Q</span><span style="color:white;"> & </span><span style="color:blue;">A</span>
             </div>
<?php include "config.php" ;?>
<?php 
               $error_msg = "";  

     if(isset($_POST['registration'])){
                        
            $username   = mysqli_real_escape_string($con,$_POST['username']);
            $email      = mysqli_real_escape_string($con,$_POST['email']);
            $password   = mysqli_real_escape_string($con,$_POST['password']);
            $repassword = mysqli_real_escape_string($con,$_POST['repassword']);
    
            $pass = password_hash($password,PASSWORD_BCRYPT);
            $repass = password_hash($repassword,PASSWORD_BCRYPT);

            $email_query="select * from registration where email='$email' ";
            $query=mysqli_query($con,$email_query);
            $email_count=mysqli_num_rows($query);
            echo $username;
            if($email_count>0){
              
              $error_msg="This email alredy Register Plese use another";

            }
            else{
              if($password === $repassword){
                     $insert_query="insert into registration (username,email,password,repassword) value('$username','$email','$pass','$repass')";

                     $iquery=mysqli_query($con,$insert_query);
                     if($iquery){
                      header("Location: login.php");
                      exit;
                     }
                     else{
                      $error_msg = "Error occurred. Please try again.";
                     }
              }
              else{
                $error_msg = "Passwords are not the same.";

              }
            }

     }

        //  $error_msg = " ";
        if ($error_msg !== '') {
            echo "<h2 style='color: red;'>$error_msg</h2>";
        }
?>

    <form  method="post">
    <h1> <br></h1>
    <table>
        <tr>
            <td colspan=2 id="td1">
                     <b style="color:white;">Registration Form</b>
            </td>
        </tr>
        <tr>
            <td >
              <img src="https://static.vecteezy.com/system/resources/previews/007/409/979/original/people-icon-design-avatar-icon-person-icons-people-icons-are-set-in-trendy-flat-style-user-icon-set-vector.jpg   "
                        height="30" width="30">
            </td>
            <td id="com1">
              <input type="text" name="username" placeholder="Entet Username" id="unm">
            </td>

            <tr>
            <td>
              <img src="data:image/png;base64,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"
                       height="30" width="30">
            </td>
            <td id="com1">
              <input type="email" name="email" placeholder="Enter Valid email" id="email">
            </td>

        </tr>


        </tr>
        <tr>
            <td>
              <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQndwgJyIwhGHk4J208WKAud8XP9pG-ANZEog&usqp=CAU"
                       height="30" width="30">
            </td>
            <td id="com1">
              <input type="password" name="password" placeholder="Create password" id="pass">
            </td>

        </tr>
        <tr>
            <td>
              <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQndwgJyIwhGHk4J208WKAud8XP9pG-ANZEog&usqp=CAU"
                       height="30" width="30">
            </td>
            <td id="com1">
              <input type="password" name="repassword" placeholder="Retype password" id="repass">
            </td>

        </tr>
        <tr>
          <div id="t">
            <td colspan=2 >
                     <input type="submit"  name="registration" id="registration"  value="Register" style=" color:red; margin-left:40%;">
                     <!-- style=" color:red; margin-left:40%;" -->
            </td>
          </div>
        </tr>

        
    </table>
    <div style="font-size:12px; text-align: center; color:white;" >Have an account? :<a href="login.php" style="color:blue; background-color:white;">login</a></div>
     
    </form>


</body>

</html>