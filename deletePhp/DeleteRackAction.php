<?php

    include '../dbcon.php';

    $id = $_GET['id'];

    $deletequery = " DELETE FROM `rack` WHERE rackid='$id' ";

    $query = mysqli_query($con,$deletequery);

    // header('location:../stud_panel.php#studentControl');
    echo "<script> window.location.href = '../manage_rack.php'; </script>";


 ?>
