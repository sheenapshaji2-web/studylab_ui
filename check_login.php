<?php
session_start();

$registered_email = $_SESSION['email'] ?? "";

$entered_email = $_POST['email'];
$entered_password = $_POST['password'];

$correct_password = "12345";

if($entered_email === $registered_email && $entered_password === $correct_password){
    
    $_SESSION['login'] = true; 
    
    header("Location: details.php");
    exit();

} else {
    
    $_SESSION['error'] = "Invalid Email or Password!";
    
    header("Location: login.php");
    exit();
}
?>