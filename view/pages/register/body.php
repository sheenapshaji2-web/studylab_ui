<form method="POST" action="session.php" enctype="multipart/form-data" onsubmit="return submitForm()">

<h3 class="text-center mb-4">Registration Form</h3>

<div class="accordion shadow" id="jobAccordion">


<div class="accordion-item">
<h2 class="accordion-header">
<button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#personal">
Personal Details
</button>
</h2>

<div id="personal" class="accordion-collapse collapse show" data-bs-parent="#jobAccordion">
<div class="accordion-body">

<label>Email</label>
<input type="text" id="email" name="email" class="form-control mb-1" onkeyup="validateEmail()" required>
<small id="emailError" style="color:red"></small>
<br>

<label class="mt-3">Phone</label>
<input type="text" id="phone" name="phone" class="form-control mb-1" onkeyup="validatePhone()" required>
<small id="phoneError" style="color:red"></small>
<br>

<label class="mt-3">First Name</label>
<input type="text" class="form-control mb-3" name="fname">

<label>Last Name</label>
<input type="text" class="form-control mb-3" name="lname">

<label>DOB</label>
<input type="date" class="form-control mb-3" name="dob" id="dob"  onchange="calculateAge()">

<label>Age</label>
<input type="text" class="form-control mb-3" name="age" id="age" readonly>

<label>Gender</label><br>
<input type="radio" name="gender" value="female"> Female
<input type="radio" name="gender" value="male" class="ms-3"> Male

</div>
</div>
</div>


<div class="accordion-item">
<h2 class="accordion-header">
<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#education">
Education & Experience
</button>
</h2>

<div id="education" class="accordion-collapse collapse" data-bs-parent="#jobAccordion">
<div class="accordion-body">

<label>Education</label>
<select class="form-select mb-3" name="education">
<option>BCA</option>
<option>MCA</option>
<option>BSC</option>
<option>Other</option>
</select>

<label>Upload ID</label>
<input type="file" class="form-control mb-3" name="id">

<label>Experience</label><br>
<input type="radio" name="job" value="experienced"> Experienced
<input type="radio" name="job" value="fresher" class="ms-3"> Fresher
<input type="radio" name="job" value="student" class="ms-3"> Student

<br><br>

<label>Course</label><br>
<input type="checkbox" name="course[]" value="programming"> Programming<br>
<input type="checkbox" name="course[]" value="web development"> Web Development<br>
<input type="checkbox" name="course[]" value="photography"> Photography
<br>

<label>Relatives or Friends Attending Any course?</label><br>
<input type="radio" name="work" value="yes"> Yes
<input type="radio" name="work" value="no" class="ms-3"> No

</div>
</div>
</div>

<div class="text-center mt-4">
<button type="submit" class="btn btn-primary">Submit</button>
<input type="reset" class="btn btn-secondary">
</div>

</form>

</div>
</div>
</div>

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

function validatePhone(){

let phone = document.getElementById("phone").value;
let error = document.getElementById("phoneError");

let pattern = /^[0-9]{10}$/;

if(phone==""){
error.innerHTML="Phone number required";
}
else if(!pattern.test(phone)){
error.innerHTML="Enter valid 10 digit number";
}
else{
error.innerHTML="";
}

}

function calculateAge(){

let dob = document.getElementById("dob").value;

let dobDate = new Date(dob);
let today = new Date();

let age = today.getFullYear() - dobDate.getFullYear();

let m = today.getMonth() - dobDate.getMonth();

if(m < 0 || (m === 0 && today.getDate() < dobDate.getDate())){
age--;
}

document.getElementById("age").value = age;

}

function submitForm(){

let emailError=document.getElementById("emailError").innerHTML;
let phoneError=document.getElementById("phoneError").innerHTML;

if(emailError=="" && phoneError==""){
alert("Submitted Successfully");
return true;
}
else{
alert("Please fix the errors before submitting");
return false;
}

}

</script>