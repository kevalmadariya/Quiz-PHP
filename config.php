<?php

$username="root";
$server='localhost';
$database='pro-k';
$password="";

$con=mysqli_connect($server,$username,$password,$database);

if($con){
    ?>
      <script>
        alert("Connection successfully");
      </script>
    <?php
}
else{
    ?>
      <script>
        alert("Connection lost");
      </script>
    <?php
}



?>