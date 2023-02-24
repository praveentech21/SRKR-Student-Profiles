<?php
include("link.php");
$some= mysqli_fetch_assoc(mysqli_query($con,"select random from student where regno ='$Regno'"));
function topofclass(){
        
        return 0;
        }

?>