
  <?php
   include '../dbcon.php';

   if (isset($_POST['submit'])) {
     $book_id = $_POST['book_id'];
     $stud_prn = $_POST['stud_prn'];
     $status = $_POST['status'];

     // Fetching Today's Date
     $timezone = date_default_timezone_set('Asia/Kolkata');
     $date = date('Y-m-d');
     $time = date('H:i:s');
     $time_stamp = $date . "," . $time;
     // Here Iam calculating date after 8 days
     $expected_return_date = date('Y-m-d', strtotime($date . ' +8 day'));
     
     //inserting query
    $insertquery = "INSERT INTO `issued_book`(`book_id`, `student_prn`, `issue_date_time`, `expected_return_date`, `return_date_time`, `status`) VALUES ('$book_id','$stud_prn','$time_stamp','$expected_return_date','NA','$status')";

     //firing the $query
     $res = mysqli_query($con,$insertquery);

     if(!$res){
       ?>
       <script type="text/javascript">
         alert('Data inserted not Successful !');
         echo "<script> window.location.href = '../issue_books.php'; </script>";
       </script>
       <?php

     }
     else {
       echo "<script> window.location.href = '../issue_books.php'; </script>";
     }
   }

  ?>
