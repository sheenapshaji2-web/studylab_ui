<!DOCTYPE html>
<html>
  <?php include('view/template/header.php') ?>
<head>
<title>Sign In</title>

<style>

body{
font-family: Arial;
background:#f2f2f2;
}

.login-box{
width:350px;
margin:120px auto;
background:white;
padding:30px;
border-radius:8px;
box-shadow:0 0 10px rgba(0,0,0,0.2);
}

input{
width:100%;
padding:10px;
margin:10px 0 5px 0;
border:1px solid #ccc;
border-radius:4px;
}

button{
width:100%;
padding:12px;
background:#04AA6D;
color:white;
border:none;
border-radius:4px;
font-size:16px;
cursor:pointer;
}

button:hover{
background:#03965f;
}

.error{
color:red;
font-size:14px;
margin-bottom:10px;
}

</style>
<?php include('view/pages/register/nav.php') ?>
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

</head>

<body>

<div class="login-box">

<h2>Sign In</h2>

<form action="details.php" method="POST">
<label>Email</label>
<input type="text" id="email" name="email" placeholder="Enter Email" onkeyup="validateEmail()" required>
<small id="emailError" style="color:red"></small>
<br>
<label>Password</label>
<input type="password" name="password" placeholder="Enter Password" required>
<button type="submit">Login</button>
</form>
</div>
<?php include('view/template/footer.php') ?>
<?php include('view/template/script.php') ?>
</body>
</html>