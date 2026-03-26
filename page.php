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
<li class="nav-item"><a href="registration.php" class="nav-link">Registration</a></li>
</ul>
</div>
</div>
</nav>

<section class="hero-wrap hero-wrap-2" style="background-image: url('assets/images/bg_2.jpg');">
<div class="overlay"></div>
<div class="container">
<div class="row no-gutters slider-text align-items-end justify-content-center">
</section>
<style>
.form-container {
    max-width: 650px;
    margin: 50px auto;
    background: #fff;
    padding: 30px;
    border-radius: 12px;
    box-shadow: 0 8px 20px rgba(0,0,0,0.15);
}

.form-container h2 {
    text-align: center;
    margin-bottom: 25px;
    font-weight: 700;
    color: #333;
}

/* Grid layout */
.form-row {
    display: flex;
    gap: 15px;
}

.form-group {
    flex: 1;
}

.form-group label {
    font-weight: 600;
    display: block;
    margin-bottom: 5px;
    color: #555;
}

.form-group input,
.form-group select {
    width: 100%;
    padding: 10px;
    border: 1px solid #ccc;
    border-radius: 6px;
    transition: 0.3s;
}

/* Focus effect */
.form-group input:focus,
.form-group select:focus {
    border-color: #4e73df;
    box-shadow: 0 0 5px rgba(78,115,223,0.2);
    outline: none;
}

.btn-group {
    text-align: center;
    margin-top: 15px;
}

.btn-group button {
    margin: 6px;
    padding: 10px 18px;
    border-radius: 20px;
    font-weight: 600;
}

.error {
    color: red;
    font-size: 13px;
    margin-top: 3px;
}
</style>

<div class="form-container">

<h2>Add Details</h2>
<form name="myForm" action="stdetails.php" method="POST" onsubmit="return validateForm()">

<div class="form-row">
    <div class="form-group">
        <label>ID</label>
        <input type="text" name="id" required placeholder="Enter ID">
    </div>
    <div class="form-group">
        <label>Name</label>
        <input type="text" name="name" placeholder="Enter your name">
    </div>
</div>

<div class="form-row">
    <div class="form-group">
        <label>Email</label>
        <input type="text" name="email" placeholder="Enter your email">
        <div id="emailError" class="error"></div>
    </div>
    <div class="form-group">
        <label>Phone</label>
        <input type="text" name="phone" placeholder="Enter phone number">
        <div id="phoneError" class="error"></div>
    </div>
</div>

<div class="form-row">
    <div class="form-group">
        <label>Age</label>
        <input type="number" name="Age" placeholder="Enter your age">
    </div>
    <div class="form-group">
        <label>Gender</label>
        <select name="gender">
            <option value="">Select Gender</option>
            <option>Male</option>
            <option>Female</option>
            <option>Other</option>
        </select>
    </div>
</div>

<div class="form-group">
    <label>Address</label>
    <input type="text" name="address" placeholder="Enter your address">
</div>

<div class="form-row">
    <div class="form-group">
        <label>Fee</label>
        <input type="number" name="fee" placeholder="Enter fee">
    </div>
    <div class="form-group">
        <label>Date</label>
        <input type="date" name="date">
    </div>
</div>

<div class="btn-group">
    <button type="submit" name="insert"  id="insert" class="btn btn-primary">Insert</button>
    <button type="submit" name="delete"  id="delete" class="btn btn-danger">Delete</button>
    <button type="submit" name="update"  id="update" class="btn btn-warning">Update</button>
    <button type="submit" name="select"  id="select" class="btn btn-success">Select</button>
    <button type="reset"  id="clear" class="btn btn-primary">Clear</button>
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
<script>
   $("#clear").click(function(){
    alert("clear: successfully" + $("#test").html());

  });
    </script>