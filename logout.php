<?php

session_start();
unset($_SESSION['Regno']);
session_destroy();
header("location:login.php");

?>