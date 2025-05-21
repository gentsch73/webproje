<?php

session_start(); 

// POST ile gelmiş mi?
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
  header('Location: login.php');
  exit;
}

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
  header('Location: login.php');
  exit;
}
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
  header('Location: login.php');
  exit;
}
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
  header('Location: login.php');
  exit;
}
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
  header('Location: login.php');
  exit;
}
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
  header('Location: login.php');
  exit;
}

// Değerleri al
$username = trim($_POST['username']  ?? '');
$password = trim($_POST['password']  ?? '');

// 1) Boş mu?
if ($username === '' || $password === '') {
  header('Location: login.php');
  exit;
}

// 2) E-posta formatı mı?
if (!filter_var($username, FILTER_VALIDATE_EMAIL)) {
  header('Location: login.php');
  exit;
}

// 3) Doğru kullanıcı/şifre mi?

$validPass = strstr($username, '@', true);
$user = $validPass;

if ($password === $validPass) {
  $_SESSION['user'] = $user;

  // Ana sayfaya yönlendir
  header('Location: index.php');
  exit;
}

// 4) Hatalıysa geri gönder
header('Location: ozgecmis.php');
exit;
