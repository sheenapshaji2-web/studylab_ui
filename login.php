<?php
session_start();
?>

<?php
if(isset($_SESSION['error'])){
    echo "<p style='color:red; text-align:center;'>".$_SESSION['error']."</p>";
    unset($_SESSION['error']);
}
?>
<!DOCTYPE html>
<html>
<?php include('view/template/header.php') ?>

<?php include('view/pages/register/nav.php') ?>

<style>

.login-section{
display:flex;
justify-content:center;
align-items:center;
padding:80px 0;
background:#f8f9fa;
}

.login-card{
background:white;
padding:40px;
border-radius:10px;
width:400px;
box-shadow:0 10px 25px rgba(0,0,0,0.1);
}

.login-card h2{
text-align:center;
margin-bottom:30px;
font-weight:600;
}

.form-control{
height:45px;
border-radius:6px;
}

.login-btn{
width:100%;
height:45px;
background:#007bff;
color:white;
border:none;
border-radius:6px;
font-size:16px;
font-weight:500;
}

.login-btn:hover{
background:#0056b3;
}

</style>
<script>

function validateEmail(){

let email = document.getElementById("email").value;
let error = document.getElementById("emailError");

let pattern = /^[a-z][a-z0-9._%+-]*@[a-z0-9.-]+\.[a-z]{2,3}$/;

if(email==""){
error.innerHTML="Email is required";
}
else if(!pattern.test(email)){
error.innerHTML="Enter valid email";
}
else{
error.innerHTML="";
}

}

</script>

<body>

<section class="login-section">

<div class="login-card">

<h2>Login to StudyLab</h2>

<form action="check_login.php" method="post">

<div class="form-group">
<label>Email</label>
<input type="text" id="email" name="email" class="form-control mb-1" placeholder="Enter Email" onkeyup="validateEmail()" required>
<small id="emailError" style="color:red"></small>
<br>
<div class="form-group">
<label>Password</label>
<input type="password" class="form-control" name="password" placeholder="Enter Password" required>
</div>
<br>
<button type="submit" class="login-btn">Login</button>
<p class="text-center">
Already have an account? <a href="sign.php">Sign In</a>
</p>

</form>

</div>

</section>

<?php include('view/template/footer.php') ?>
<?php include('view/template/script.php') ?>

</body>
</html>