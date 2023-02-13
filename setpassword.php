<!-- ohm Naomo shivaya -->
<?php
include "link.php";

$regno = $_GET['registration'];
$random = $_GET['random'];
$check = mysqli_query($con, "select random,sname,email from student where regno = '$regno'");
$check = mysqli_fetch_assoc($check);
if (!empty($check) && $check['random'] == $random) {
  if ($check['random'] != "passwordSettedShiva") {
    if (isset($_POST['submit'])) {
      $password = $_POST['password'];
      $conform = $_POST['conform'];
      if ($conform == $password) {
        $run = mysqli_query($con, "update student set password ='$conform',random = 'passwordSettedShiva' where regno= '$regno'");
          session_start();
            $_SESSION['Name'] = $check['sname']; 
            $_SESSION['Regno'] = $regno;
            $_SESSION['Email'] = $check['email'];
        echo "<script>alert('You have Setted your password')</script>";
        header("location:index.php");
      } else {
        echo "<script>alert('Password and coform are not same')</script>";
      }

    }
  } else {
    echo "<script>alert('You have Alredy Seted Your Password if You forget Password Contach the managment')</script>";
  }
} else {
  echo "<script>alert('Dont Act two Smart Bro')</script>";
  header("location:login.php");
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="assets/css/setpassword.css">
  <title>Set Password</title>
  <style>
   
  </style>
</head>

<body>
  <div class="login-box">
    <h2>Set Your Password</h2>
    <form method="post">
      <div class="user-box">
        <input type="password" name="password" required>
        <label>Password</label>
      </div>
      <div class="user-box">
        <input type="password" name="conform" required>
        <label>Conformation Password</label>
      </div>
      <button type="submit" name="submit">
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        SUBMIT
      </button>
    </form>
  </div>
</body>

</html>