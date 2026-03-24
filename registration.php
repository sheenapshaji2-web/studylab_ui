<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<?php include('view/template/header.php') ?>
<body>

<?php include('view/pages/register/nav.php') ?>

<div class="container mt-5">
<div class="row justify-content-center">
<div class="col-md-6">

<?php include('view/pages/register/body.php') ?>

<?php include('view/template/footer.php') ?>

<div id="ftco-loader" class="show fullscreen">
<svg class="circular" width="48px" height="48px">
<circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/>
<circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/>
</svg>
</div>

<?php include('view/template/script.php') ?>

</body>
</html>