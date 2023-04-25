<?php

    include '../dbcon.php';

    $id = $_GET['id'];

    $deletequery = " DELETE FROM `author` WHERE authorid='$id' ";

    $query = mysqli_query($con,$deletequery);

    // header('location:../stud_panel.php#studentControl');
    echo "<script> window.location.href = '../manage_author.php'; </script>";


 ?>
