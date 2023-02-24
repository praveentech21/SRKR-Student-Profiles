<?php
  include "link.php";
  session_start();
  $Regno = $_SESSION['Regno'];
  $some= mysqli_fetch_assoc(mysqli_query($con,"select random from student where regno ='$Regno'"));
?>