<?php

session_start(); 

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
  header('Location: login.php');
  exit;
}


$username = trim($_POST['username']  ?? '');
$password = trim($_POST['password']  ?? '');


if ($username === '' || $password === '') {
  header('Location: login.php');
  exit;
}


if (!filter_var($username, FILTER_VALIDATE_EMAIL)) {
  header('Location: login.php');
  exit;
}



$validPass = strstr($username, '@', true);
$user = $validPass;

if ($password === $validPass) {
  $_SESSION['user'] = $user;

  header('Location: index.php');
  exit;
}


header('Location: ozgecmis.php');
exit;
