<?php
    session_start();
    // unset($_SESSION['Uname'])
    // only single SESSION ko unset karne ke liye .
    session_destroy();
    // sare session ek sath ktm krne ke liye ye method use kr skte hai
    header('location:index.php');
    // header('location:login.php');
?>