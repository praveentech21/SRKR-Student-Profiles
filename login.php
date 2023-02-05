<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require('PHPMailer/src/Exception.php');
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';

include("link.php");
include 'message.php';
if(isset($_POST['signin'])){
    $quary = "select sname,password,email from student where regno ='{$_POST['regno']}' ";
    $run = mysqli_query($con, $quary);
    $data = mysqli_fetch_assoc($run);
    if(empty($data)){
        echo "<script>alert('You are Not Registred')</script>";
    }
    else{
        if($data['password']==$_POST['password'] ){
            if($data['password'] == null){
                echo "<script>alert('Check YOur Mail and set password')</script>";
            }
            else{
                session_start();
                $_SESSION['Name'] = $data['sname'];
                $_SESSION['Regno'] = $_POST['regno'];
                $_SESSION['Email'] = $data['email'];
                header("Location:dashboard.php");
            }
        }
        else{
            echo "You entered wrong password {$data['sname']}";
        }
    }
}

if(isset($_POST['signup'])){
    $sname = $_POST['sname'];
    $email = $_POST['email'];
    $regno = $_POST['regno'];
    $quary = "insert into student ('sname','email','regno') values('$sname','$email','$regno')";
    $run = mysqli_query($con, $quary);
    
    
    $mail = new PHPMailer(true);
    $mail->isSMTP();
    $mail->Host = 'smtp.gmail.com';
    $mail->SMTPAuth = true;
    $mail->Username = 'shiva4bhavani@gmail.com';
    $mail->Password = 'nzbqmvdtsvownwtf';
    $mail->SMTPSecure = 'ssl';
    $mail->Port = 465;
    $mail->setFrom('shiva4bhavani@gmail.com');
    $mail->addAddress($_POST['email']);
    $mail->isHTML(true);
    $mail->Subject = 'Set Your Password for SRKR Counselling Book ';
    $mail->Body = $message;
    $mail->send();
    echo "<script>alert('A link has been Sent to <a href='gmail.com'>Your Email</a> set Password using that link Shiva')</script>";
    // echo ""
    
}

?>

<!DOCTYPE html> 
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shiva Bhavani</title>
    <link rel="stylesheet" href="login.css">
</head>

<body>
    <!-- Jai Bhajaranga Bali -->
    <h2>SRKR Student Counselling Booklet</h2>
    <div class="container" id="container">
        <div class="form-container sign-up-container">
            <!-- form for creating account start -->

            <form method="post" action="create.php">
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