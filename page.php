<!DOCTYPE html>
<html lang="en">

<?php include('view/template/header.php'); ?>

<body>

<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
<div class="container">
<a class="navbar-brand" href="index.php"><span>Study</span>Lab</a>

<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav">
<span class="navbar-toggler-icon"></span>
</button>

<div class="collapse navbar-collapse" id="ftco-nav">
<ul class="navbar-nav ml-auto">
<li class="nav-item"><a href="index.php" class="nav-link">Home</a></li>
<li class="nav-item"><a href="about.php" class="nav-link">About</a></li>
<li class="nav-item"><a href="course.php" class="nav-link">Course</a></li>
<li class="nav-item"><a href="instructor.php" class="nav-link">Instructor</a></li>
<li class="nav-item"><a href="blog.php" class="nav-link">Blog</a></li>
<li class="nav-item"><a href="contact.php" class="nav-link">Contact</a></li>
<li class="nav-item active"><a href="registration.php" class="nav-link">Registration</a></li>
</ul>
</div>
</div>
</nav>

<section class="hero-wrap text-center text-white" style="background-image: url('assets/images/bg_2.jpg'); padding: 60px 0;">
<h2>Student Registration</h2>
</section>

<style>
.form-container {
    max-width: 500px;
    margin: 50px auto;
    background: #fff;
    padding: 25px;
    border-radius: 10px;
    box-shadow: 0 10px 25px rgba(0,0,0,0.2);
}

.form-container h2 {
    text-align: center;
    margin-bottom: 20px;
}

.form-container label {
    font-weight: 600;
}

.form-container input {
    width: 100%;
    padding: 10px;
    margin: 8px 0 15px;
    border: 1px solid #ccc;
    border-radius: 5px;
}

.btn-group {
    text-align: center;
}

.btn-group button {
    margin: 5px;
}

.error {
    color: red;
    font-size: 13px;
}
</style>

<div class="form-container">

<h2>Student Details</h2>

<form name="myForm" action="stdetails.php" method="POST" onsubmit="return validateForm()">

<label>ID</label>
<input type="text" name="id"required placeholder="Enter ID">

<label>Name</label>
<input type="text" name="name" placeholder="Enter your name">

<label>Email</label>
<input type="text" name="email" placeholder="Enter your email">
<div id="emailError" class="error"></div>

<label>Phone</label>
<input type="text" name="phone" placeholder="Enter phone number">
<div id="phoneError" class="error"></div>

<label>Age</label>
<input type="number" name="age" placeholder="Enter your age">

<label>Gender</label>
<input type="text" name="gender" placeholder="Enter your gender">

<label>Address</label>
<input type="text" name="address" placeholder="Enter your address">

<label>Fee</label>
<input type="number" name="fee" placeholder="Enter fee">

<label>Date</label>
<input type="date" name="date">

<div class="btn-group">
<button type="submit" name="insert" id="insert" class="btn btn-success" onclick="return validateForm()">Insert</button>
<button type="submit" name="delete" class="btn btn-danger">Delete</button>
<button type="submit" name="update" id="update" class="btn btn-warning" onclick="return validateForm()">Update</button>
<button type="submit" name="select" class="btn btn-primary">Select</button>
</div>

</form>
</div>

<script>
function validateForm() {

    let email = document.forms["myForm"]["email"].value;
    let phone = document.forms["myForm"]["phone"].value;

    let emailPattern = /^[a-z][a-z0-9._%+-]*@[a-z0-9.-]+\.[a-z]{2,3}$/;
    let phonePattern = /^[0-9]{10}$/;

    let valid = true;

    if (email !== "" && !emailPattern.test(email)) {
        document.getElementById("emailError").innerHTML = "Enter valid email";
        valid = false;
    } else {
        document.getElementById("emailError").innerHTML = "";
 }
    if (phone !== "" && !phonePattern.test(phone)) {
        document.getElementById("phoneError").innerHTML = "Enter 10-digit phone number";
        valid = false;
    } else {
        document.getElementById("phoneError").innerHTML = "";
    }

    return valid;
}
</script>

<?php include('view/template/footer.php'); ?>
<?php include('view/template/script.php'); ?>

</body>
</html>