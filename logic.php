<?php
//setting variables
$password = "";
$lowCase = "abcdefghijklmnopqrstuvwxyz"; 
$upCase = "ABCDEFGHIJKLMNOPQRSTUVWXYZ"; 
$Numbers = "0123456789"; 
$SpecialChar = "!@#$%^&*()-_=+[]{}<>?/|~"; 

$pass_len = isset($_GET['length']) ? (int)$_GET['length'] : 10;

$password .= $lowCase[random_int(0, strlen($lowCase) - 1)];  
$password .= $upCase[random_int(0, strlen($upCase) - 1)];    
$password .= $Numbers[random_int(0, strlen($Numbers) - 1)];  
$password .= $SpecialChar[random_int(0, strlen($SpecialChar) - 1)];  

$mixture = $upCase . $lowCase . $Numbers . $SpecialChar;

// generating and storing password
for ($i = 4; $i < $pass_len; $i++) { 
    $password .= $mixture[random_int(0, strlen($mixture) - 1)];
}

//shuffling for making it secure
$password = str_shuffle($password);

//including the ui / html site
include 'ui.html';
?>
