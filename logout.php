
<div style="display:inline-block; font-size:2.5rem; border:2px solid gray; border-radius:30%; ">
                  <span style="color:red;">Q</span><span style="color:white;"> & </span><span style="color:blue;">A</span>
</div><?php 
  
   session_start();

   session_destroy();

   header('location:login.php');

?>