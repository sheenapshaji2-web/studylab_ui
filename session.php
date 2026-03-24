<?php
session_start();

$email = $_POST["email"];
$phone = $_POST["phone"];
$fname = $_POST["fname"];
$lname = $_POST["lname"];
$dob = $_POST["dob"];
$age = $_POST["age"];
$gender = $_POST["gender"];
$education = $_POST["education"];
$job = $_POST["job"];
$work = $_POST["work"];
$id = $_FILES["id"]["name"];
$course = "";
if(isset($_POST['course'])){
    $course = implode(", ", $_POST['course']);
}

$_SESSION["email"] = $email;
$_SESSION["phone"] = $phone;
$_SESSION["fname"] = $fname;
$_SESSION["lname"] = $lname;
$_SESSION["dob"] = $dob;
$_SESSION["age"] = $age;
$_SESSION["gender"] = $gender;
$_SESSION["education"] = $education;
$_SESSION["id"] = $id;
$_SESSION["job"] = $job;
$_SESSION["course"] = $course;
$_SESSION["work"] = $work;

header("Location: login.php");
exit();
?>
