<!-- <section class="ftco-section ftco-no-pb ftco-no-pt">
<div class="container">
<div class="row">
<div class="col-md-7"></div>

<div class="col-md-5 order-md-last">
<div class="login-wrap p-4 p-md-5">
<h3 class="mb-4">Register Now</h3>

<form action="about.php" class="signup-form" onsubmit="return validateEmail()">

<div class="form-group">
<label class="label">Full Name</label>
<input type="text" id="name" class="form-control" placeholder="Name" required>
</div>

<div class="form-group">
<label class="label">Email Address</label>
<input type="text" id="email" class="form-control" placeholder="name@gmail.com" required>
</div>

<div class="form-group d-flex justify-content-center mt-4">
<button type="submit" class="btn btn-primary submit">Submit</button>
</div>

</form>
<p class="text-center">
Already have an account? <a href="view/pages/index/sign.php">Sign In</a>
</p>
</div>
</div>
</div>
</div>
</section>

<script>
function validateEmail(){

let email = document.getElementById("email").value;

let emailPattern = /^[a-z][a-z0-9._%+-]*@[a-z0-9.-]+\.[a-z]{2,3}$/;

if(!emailPattern.test(email)){
alert("Please enter a valid email address");
return false;
}

alert("Login successfully");
return true;
}
</script> -->