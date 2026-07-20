<?php

session_start();

if(!isset($_SESSION['email'])){

header("Location: login.php");

exit;

}

?>

<!DOCTYPE html>

<html>

<head>

<title>Dashboard</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

</head>

<body class="bg-light">

<nav class="navbar navbar-dark bg-primary">

<div class="container">

<span class="navbar-brand">

KOPI Drive

</span>

<a href="logout.php" class="btn btn-light">

Logout

</a>

</div>

</nav>

<div class="container mt-5">

<div class="card shadow">

<div class="card-body">

<div class="row">

<div class="col-md-2">

<img src="<?= $_SESSION['foto'] ?>"

class="img-fluid rounded-circle">

</div>

<div class="col-md-10">

<h3><?= $_SESSION['nama'] ?></h3>

<p><?= $_SESSION['email'] ?></p>

</div>

</div>

</div>

</div>

</div>

</body>

</html>