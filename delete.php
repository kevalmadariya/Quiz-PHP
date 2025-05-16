<?php

include 'config.php';

$ids=$_GET['idcheck'];

$deletequery="delete from prepareq where q_id=$ids";

$query=mysqli_query($con,$deletequery);

if($query){
    ?>
    <script>
    alert("delete selected data");

    </script>
    <?php
}
else{
    ?>
    <script>
        alert("not delete data properly");
    </script>
    <?php

}
header('location:viewq.php');


?>