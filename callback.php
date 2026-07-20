<?php

session_start();

require_once 'app/config/google.php';

if(isset($_GET['code'])){

$token=$client->fetchAccessTokenWithAuthCode($_GET['code']);

$client->setAccessToken($token);

$service=new Google_Service_Oauth2($client);

$user=$service->userinfo->get();

$_SESSION['google_id']=$user->id;

$_SESSION['nama']=$user->name;

$_SESSION['email']=$user->email;

$_SESSION['foto']=$user->picture;

header("Location: dashboard.php");

exit;

}

echo "Login gagal.";