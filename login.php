<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require('PHPMailer/src/Exception.php');
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php'; 
// require 'vendor/autoload.php';  

include("link.php");
if(isset($_POST['signin'])){
    $quary = "select * from student where regno ='{$_POST['regno']}' ";
    $run = mysqli_query($con, $quary);
    $data = mysqli_fetch_assoc($run);
    if(!empty($data)){
        if($data['random']=="passwordSettedShiva"){
            if($_POST['password'] != null){
                if($data['password'] == $_POST['password'] ){
                    session_start();
                    $_SESSION['Name'] = $data['sname']; 
                    $_SESSION['Regno'] = $_POST['regno'];
                    $_SESSION['Email'] = $data['email'];
                    header("Location:index.php");
                }
                else{
                    echo "You entered wrong password  {$data['sname']} ";
                }
            }
            else{
                echo "<script>alert('Plese enter the password  {$data['sname']} that you have setted in the Mail')</script>";
            }
        }
        else {
            echo "<script>alert('{$data['sname']} you have not setted the  password Check YOur Mail and set password')</script>";
        }
    }
    else{
        echo "<script>alert('You are Not Registred')</script>";
    }
}

if(isset($_POST['signup'])){
    $sname = $_POST['sname'];
    $email= strtolower($_POST['email']);
    $regno = $_POST['regno'];
    $random = randomstring();
    $run = mysqli_query($con, "select sname from student where regno='$regno'");
    $data = mysqli_fetch_assoc($run);
    $run = mysqli_query($con,"select count(sname) as someone from student where email='$email'");
    $data1= mysqli_fetch_assoc($run);
    if(!empty($data)){
        echo "{$data['sname']} You have alreday registred Plese Login";
    }
    elseif($data1['someone']!=0){
        echo "<script>alert('This Email is Alreday Registred')</script>";
    }
    else{       
        $quary = "insert into student (sname,email,regno,random) values('$sname','$email','$regno','$random')";
        $send = new PHPMailer(true);
        $send->isSMTP();
        $send->Host = 'smtp.gmail.com';
        $send->SMTPAuth = true;
        $send->Username = 'shiva4bhavani@gmail.com';
        $send->Password = 'dlbpuawahopqtkox';
        $send->SMTPSecure = 'ssl';
        $send->Port = 465;
        $send->setFrom('shiva4bhavani@gsend.com');
        $send->addAddress($_POST['email']);
        $send->isHTML(true);
        $send->Subject = 'Set Your Password for SRKR Counselling Book ';
        $message = $message = "Hi mr/mis <b>$sname</b> <br>
        welcome to SRKR EC Counselling Forms <br>
        Update Your Recode in your Mobile Using our Site SRKR EC<br>
        Thanks for Your Interest in SRKREC Counselling Automation Form<br>
        You have regintered with your register number :<b> $regno</b><br>
        Setyour Password using our link : srkrec.edu.in/setpassword.php?registration=$regno&random=$random
<br>
        Connect with us Friends <br>
        Thank You <br>
        <b>SRKR CSD<b>
        ";
        $send->Body = $message;
        $send->send();
        $run = mysqli_query($con, $quary);
        if($run) echo "Jai Jai Sri Rama";        
        }    
}

?>

<!DOCTYPE html> 
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shiva Bhavani</title>
    <link rel="stylesheet" href="assets/css/login.css">
</head>

<body>
    <!-- Jai Bhajaranga Bali -->
    <h2>SRKR Student Counselling Booklet</h2>
    <div class="container" id="container">
        <div class="form-container sign-up-container">
            <!-- form for creating account start -->

            <form method="post" >
                <h1>Create Booklet!</h1>
                <input name="sname" id="sname" type="text" placeholder="Name" />
                <input name="email" id="email" type="email" placeholder="Email" />
                <input name="regno" id="regno" type="text" placeholder="Registration Number" />
                <button type="submit" name="signup">CREATE</button>
            </form>

            <!-- form for creating account end -->
        </div>
        <div class="form-container sign-in-container">
            <form method="post" >
                <h1>Sign in</h1>
                <input name="regno" id="regno" type="text" placeholder="Registration Number" />
                <input name="password" id="" type="password" placeholder="Password" />
                <a href="mailto:ravikumar_csd@srkrec.edu.in">Forgot your password?</a>
                <button type="submit" name="signin">Sign In</button>
            </form>
        </div>
        <div class="overlay-container">
            <div class="overlay">
                <div class="overlay-panel overlay-left">
                    <h1>Welcome Back!</h1>
                    <p>To Update Your Booklet<br> Sign in here</p>
                    <button class="ghost" id="signIn">Sign In</button>
                </div>
                <div class="overlay-panel overlay-right">
                    <h1>Hi, there!</h1>
                    <p>Don't Have A Counselling Bookelt..!<br>Register And Get One NOW</p>
                    <button class="ghost" id="signUp">Click Here</button>
                </div>
            </div>
        </div>
    </div>
</body>
    
    <script>
        const signUpButton = document.getElementById('signUp');
const signInButton = document.getElementById('signIn');
const container = document.getElementById('container');

signUpButton.addEventListener('click', () => {
	container.classList.add("right-panel-active");
});

signInButton.addEventListener('click', () => {
	container.classList.remove("right-panel-active");
});
    </script>
</body>

</html>

<?php

  function randomstring(){
  $character = "qwertyuioplkjhgfdsazxcvbnm0987654321ADFGHJKLPOIUYTREWQZXCVBNM";
  $randomstring = 'a';
  for ($i = 0; $i < 30;$i++)
  $randomstring.=$character[rand(0,58)];
  return $randomstring;
  }

?>