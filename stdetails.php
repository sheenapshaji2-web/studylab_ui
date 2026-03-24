   <html>

<?php include('view/template/header.php') ?>

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
</section>
   <?php include 'db_connect.php'; ?>
    <?php

    if(isset($_POST['insert'])) {
        $id = $_POST['id'];
        $name = $_POST['name'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $age = $_POST['age'];
        $gender = $_POST['gender'];
        $address = $_POST['address'];
        $fee = $_POST['fee'];
        $create_date = date('Y-m-d H:i:s');

$insert_query = "INSERT INTO student 
(id,name,email,phone,age,gender,address,fee,created_date) 
VALUES 
('$id', '$name', '$email', '$phone', '$age', '$gender', '$address', '$fee', '$create_date')";
        if ($connection->query($insert_query) === TRUE) {
            echo "New record created successfully";
        } else {
            echo "Error: " . $insert_query . "<br>" . $connection->error;
        }
    }
    if(isset($_POST['delete'])) {
        $id = $_POST['id'];
        $delete_query = "DELETE FROM student WHERE id = '$id'";
        if ($connection->query($delete_query) === TRUE) {
            echo "Record deleted successfully";
        } else {
            echo "Error: " . $delete_query . "<br>" . $connection->error;
        }
    }
    if(isset($_POST['update'])) {
        $id = $_POST['id'];
        $name = $_POST['name'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $age = $_POST['age'];
        $gender = $_POST['gender'];
        $address = $_POST['address'];       
        $fee = $_POST['fee'];
        $create_date = date('Y-m-d H:i:s');

        $update_query = "UPDATE student SET name='$name', email='$email', phone='$phone', age='$age', gender='$gender', address='$address', fee='$fee', created_date='$create_date' WHERE id='$id'";
        if ($connection->query($update_query) === TRUE) {
            echo "Record updated successfully";
        } else {
            echo "Error: " . $update_query . "<br>" . $connection->error;
        }
    }
    if(isset($_POST['select'])) {
        $id = $_POST['id'];
        $select_query = "SELECT * FROM student WHERE id = '$id'";
        $result = $connection->query($select_query);
        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
echo '
<style>
.result-box {
    width: 400px;
    margin: 30px auto;
    padding: 20px;
    background: #f4f4f4;
    border-radius: 10px;
    box-shadow: 0 0 10px rgba(0,0,0,0.1);
}
.result-box input, .result-box textarea {
    width: 100%;
    padding: 8px;
    margin: 8px 0;
}
.btn {
    padding: 10px;
    background: black;
    color: white;
    border: none;
    cursor: pointer;
}
</style>

<div class="result-box">
    <label>ID</label>
    <input type="text" value="'.$row["id"].'" readonly>

    <label>Name</label>
    <input type="text" value="'.$row["name"].'">

    <label>Age</label>
    <input type="text" value="'.$row["Age"].'">

    <label>Email</label>
    <input type="text" value="'.$row["email"].'">

    <label>Phone</label>
    <input type="text" value="'.$row["phone"].'">

    <label>Address</label>
    <textarea>'.$row["address"].'</textarea>

    <label>Date</label>
    <input type="text" value="'.$row["created_date"].'">

    <label>Fee</label>
    <input type="text" value="'.$row["fee"].'"> 

    <label>Gender</label>
    <input type="text" value="'.$row["gender"].'" readonly>


    <br>
    <button class="btn" onclick="history.back()">Go Back</button>
</div>
';
                }
        } else {
            echo "0 results";               
        }
    }

    $connection->close();
    
   ?>

</html>