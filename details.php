<?php
session_start();

if(!isset($_SESSION['login'])){
    header("Location: login.php");
    exit();
}
?>

<!DOCTYPE html>
<html>
    
<?php include('view/template/header.php') ?>

<body class="bg-light">
  
<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
<div class="container">
<a class="navbar-brand" href="index.php"><span>Study</span>Lab</a>
<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
<span class="oi oi-menu"></span> Menu
</button>

<div class="collapse navbar-collapse" id="ftco-nav">
<ul class="navbar-nav ml-auto">
<li class="nav-item"><a href="index.php" class="nav-link">Home</a></li>
<li class="nav-item"><a href="about.php" class="nav-link">About</a></li>
<li class="nav-item"><a href="course.php" class="nav-link">Course</a></li>
<li class="nav-item"><a href="instructor.php" class="nav-link">Instructor</a></li>
<li class="nav-item"><a href="blog.php" class="nav-link">Blog</a></li>
<li class="nav-item"><a href="contact.php" class="nav-link">Contact</a></li>
<li class="nav-item active"><a href="registration.php" class="nav-link">Registration </a></li>
</ul>
</div>
</div>
</nav>
<section class="hero-wrap hero-wrap-2" style="background-image: url('assets/images/bg_2.jpg');">
<div class="overlay"></div>
<div class="container">
<div class="row no-gutters slider-text align-items-end justify-content-center">
<div class="col-md-9 ftco-animate pb-5 text-center">
<p class="breadcrumbs"><span class="mr-2"><a href="index.php">Home <i class="fa fa-chevron-right"></i></a></span> <span>Course Lists <i class="fa fa-chevron-right"></i></span></p>
<h1 class="mb-0 bread">Registration</h1>
</div>
</div>
</div>
</section>


<div class="container mt-5">
<div class="row justify-content-center">
<div class="col-md-6 mb-4">
<div class="card shadow">
<div class="card-header bg-primary text-white text-center">
<h4>Registration Details</h4>
</div>

<div class="card-body">
<?php 
$email = $_SESSION['email'];
$fname = $_SESSION['fname'];
$lname = $_SESSION['lname'];
$phone = $_SESSION['phone'];
$dob = $_SESSION['dob'];
$age = $_SESSION['age'];
$gender = $_SESSION['gender'];
$file = $_SESSION['id'];
$course = $_SESSION['course'];
$education = $_SESSION['education'];
$job = $_SESSION['job'];
$work = $_SESSION['work'];

echo "<p><strong>Email:</strong> $email</p>";
echo "<p><strong>First Name:</strong> $fname</p>";
echo "<p><strong>Last Name:</strong> $lname</p>";
echo "<p><strong>Phone:</strong> $phone</p>";
echo "<p><strong>Date of Birth:</strong> $dob</p>";
echo "<p><strong>Age:</strong> $age</p>";
echo "<p><strong>Gender:</strong> $gender</p>";
echo "<p><strong>File Name:</strong> $file</p>";

?>
<a href="logout.php" class="btn btn-primary">LogOut</a>
</div>
</div>
</div>

<div class="col-md-6">
<div class="card shadow">
<div class="card-header bg-success text-white text-center">
<h4>Contact Details</h4>
</div>

<div class="card-body">

<?php 

$name = $_POST['name'];
$emaill = $_POST['emaill'];
$subject = $_POST['subject'];
$msg = $_POST['message'];

echo "<p><strong>Full Name:</strong> $name</p>";
echo "<p><strong>Email:</strong> $emaill</p>";
echo "<p><strong>Subject:</strong> $subject</p>";
echo "<p><strong>Message:</strong> $msg</p>";

?>

</div>
<div class="card-footer text-center">
<a href="contact.php" class="btn btn-success">Back</a>
</div>
</div>
</div>
</div>
</div>

<?php include('view/template/footer.php') ?>

</body>
</html>