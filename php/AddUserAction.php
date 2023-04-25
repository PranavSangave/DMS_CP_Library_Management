
  <?php
   include '../dbcon.php';

   if (isset($_POST['submit'])) {
     $stud_prn = $_POST['prn'];
     $first_name = $_POST['first_name'];
     $last_name = $_POST['last_name'];
     $email = $_POST['email'];

     // Fetching Today's Date
     $timezone = date_default_timezone_set('Asia/Kolkata');
     $date = date('Y-m-d');
     $time = date('H:i:s');
     $time_stamp = $date . "," . $time;
     
     //inserting query
    $insertquery = "INSERT INTO `user`(`prn`, `first_name`, `last_name`, `email`) VALUES ('$stud_prn','$first_name','$last_name','$email')";

     //firing the $query
     $res = mysqli_query($con,$insertquery);

     if(!$res){
       ?>
       <script type="text/javascript">
         alert('Data inserted not Successful !');
         echo "<script> window.location.href = '../manage_users.php'; </script>";
       </script>
       <?php

     }
     else {
       echo "<script> window.location.href = '../manage_users.php'; </script>";
     }
   }

  ?>
