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
<li class="nav-item"><a href="registration.php" class="nav-link">Registration </a></li>
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
// ---------- MESSAGE HANDLING ----------
$message = "";
$message_type = "";

// -------- INSERT ----------
if(isset($_POST['insert'])) {
    $id = $_POST['id'];
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $age = $_POST['Age'];
    $gender = $_POST['gender'];
    $address = $_POST['address'];
    $fee = $_POST['fee'];
    $create_date = date('Y-m-d H:i:s');

    $insert_query = "INSERT INTO student 
    (id,name,email,phone,Age,gender,address,fee,created_date) 
    VALUES 
    ('$id', '$name', '$email', '$phone', '$age', '$gender', '$address', '$fee', '$create_date')";

    if ($connection->query($insert_query) === TRUE) {
        $message = "New record created successfully";
        $message_type = "success";
    } else {
        $message = "Error: " . $connection->error;
        $message_type = "danger";
    }
}

// -------- DELETE ----------
if(isset($_POST['delete'])) {
    $id = $_POST['id'];
    if(empty($id)) {
        $message = "Please enter ID to delete";
        $message_type = "danger";
    } else {
        $delete_query = "DELETE FROM student WHERE id = '$id'";
        if ($connection->query($delete_query) === TRUE) {
            if($connection->affected_rows > 0){
                $message = "Record deleted successfully";
                $message_type = "success";
            } else {
                $message = "No record found with this ID";
                $message_type = "warning";
            }
        } else {
            $message = "Error: " . $connection->error;
            $message_type = "danger";
        }
    }
}

// -------- UPDATE ----------
if(isset($_POST['update'])) {

    $id = $_POST['id'];
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $age = $_POST['Age'];
    $gender = $_POST['gender'];
    $address = $_POST['address'];       
    $fee = $_POST['fee'];
    $create_date = date('Y-m-d H:i:s');

    if(empty($id)) {
        $message = "Please enter ID to update";
        $message_type = "danger";
    } else {
        $update_query = "UPDATE student SET 
            name='$name',
            email='$email',
            phone='$phone',
            Age='$age',
            gender='$gender',
            address='$address',
            fee='$fee',
            created_date='$create_date'
            WHERE id='$id'";

        if ($connection->query($update_query) === TRUE) {
            if($connection->affected_rows > 0){
                $message = "Record updated successfully";
                $message_type = "success";
            } else {
                $message = "No record found with this ID";
                $message_type = "warning";
            }
        } else {
            $message = "Error: " . $connection->error;
            $message_type = "danger";
        }
    }
}

// -------- SELECT ----------
if(isset($_POST['select'])) {
    $id = $_POST['id'];
    $select_query = "SELECT * FROM student WHERE id = '$id'";
    $result = $connection->query($select_query);
    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {

echo '
<style>
.result-box {
    max-width: 750px;
    margin: 50px auto;
    border-radius: 15px;
    overflow: hidden;
    background: #fff;
    box-shadow: 0 12px 30px rgba(0,0,0,0.12);
    font-family: "Segoe UI", sans-serif;
}
.top-bar { height: 90px; background: linear-gradient(to right, #4e73df, #36b9cc); }
.profile { text-align: center; margin-top: -45px; padding: 0 20px 20px; }
.avatar { width: 90px; height: 90px; background: #fff; border-radius: 50%; line-height: 90px; font-size: 30px; font-weight: bold; color: #4e73df; margin: auto; box-shadow: 0 5px 15px rgba(0,0,0,0.2); }
.profile h3 { margin: 10px 0 5px; color: #222; }
.profile span { font-size: 13px; color: #888; }
.info { padding: 25px 30px; }
.row { display: flex; border-bottom: 1px solid #eee; padding: 8px 0; align-items: center; }
.row:last-child { border-bottom: none; }
.label { width: 40%; color: #777; font-weight: 600; }
.value { width: 60%; color: #222; }
.btn-back { display: block; width: 160px; margin: 25px auto 30px; padding: 10px; text-align: center; background: #4e73df; color: #fff; border-radius: 25px; text-decoration: none; transition: 0.3s; }
.btn-back:hover { background: #2e59d9; }
</style>
<div class="result-box">
    <div class="top-bar"></div>
    <div class="profile">
        <div class="avatar">'.strtoupper(substr($row["name"],0,1)).'</div>
        <h3>'.$row["name"].'</h3>
        <span>Student Profile</span>
    </div>
    <div class="info">
        <div class="row"><div class="label">ID</div><div class="value">'.$row["id"].'</div></div>
        <div class="row"><div class="label">Email</div><div class="value">'.$row["email"].'</div></div>
        <div class="row"><div class="label">Phone</div><div class="value">'.$row["phone"].'</div></div>
        <div class="row"><div class="label">Age</div><div class="value">'.$row["Age"].'</div></div>
        <div class="row"><div class="label">Gender</div><div class="value">'.$row["gender"].'</div></div>
        <div class="row"><div class="label">Fee</div><div class="value">₹ '.$row["fee"].'</div></div>
        <div class="row"><div class="label">Address</div><div class="value">'.$row["address"].'</div></div>
        <div class="row"><div class="label">Date</div><div class="value">'.$row["created_date"].'</div></div>
    </div>
    <a href="javascript:history.back()" class="btn-back">← Go Back</a>
</div>
';
        }
    } else {
        $message = "No results found";
        $message_type = "warning";
    }
}

// CLOSE DB CONNECTION
$connection->close();
?>

<!-- MESSAGE BOX -->
<?php if(!empty($message)) { ?>
<div class="alert alert-<?php echo $message_type; ?> alert-dismissible fade show text-center" role="alert" style="max-width: 600px; margin:20px auto;">
    <?php echo $message; ?>
    <button type="button" class="close" data-dismiss="alert">&times;</button>
</div>
<script>
    setTimeout(() => { let alert = document.querySelector(".alert"); if(alert) alert.style.display = "none"; }, 3000);
</script>
<?php } ?>

<?php include('view/template/footer.php') ?>

</html>