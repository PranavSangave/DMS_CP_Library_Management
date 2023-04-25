<?php

    $server = "localhost";
    $user = "root";
    $password = "" ;
    $db = "library-system" ;

    $con = mysqli_connect($server,$user,$password,$db,3306);

    if(!$con){
      ?>
      <script>
          alert("Connection Failed !");
      </script>
      <?php
    }
    mysqli_set_charset($con,"utf8mb4")
?>
