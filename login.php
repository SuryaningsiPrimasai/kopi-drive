<?php

require_once 'app/config/google.php';

$loginURL = $client->createAuthUrl();

?>

<!DOCTYPE html>
<html lang="id">

<head>

<meta charset="UTF-8">

<title>KOPI Drive</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

<style>

body{

background:#f5f7fa;

}

.card{

margin-top:80px;

border:none;

border-radius:15px;

box-shadow:0 10px 30px rgba(0,0,0,.1);

}

.logo{

width:90px;

}

</style>

</head>

<body>

<div class="container">

<div class="row justify-content-center">

<div class="col-md-5">

<div class="card">

<div class="card-body text-center p-5">

<img src="assets/img/logo.png" class="logo">

<h2 class="mt-3">

KOPI Drive

</h2>

<p>

Sistem Kolaborasi Kerja Tim Pemeriksa

</p>

<hr>

<a href="<?= $loginURL ?>" class="btn btn-danger btn-lg">

Login dengan Google

</a>

</div>

</div>

</div>

</div>

</div>

</body>

</html>