<?php

$Name = $_POST['name'];
$Email = $_POST['email'];
$Message = $_POST['message'];


$body = "Name : " . $Name . "\nEmail : " . $Email . "\nMessage : " . $Message;

$to = "kushwahmukesh786@gmail.com, hellolispedia@gmail.com";
$Email = "info@lispedia.com";
$Subject = "New Message $Name";
mail($to, $Subject, $body, "From: $Name $Mobile");
echo "Thank You For Massage";
echo "<script> window.location.href='index.php'; </script>";
?>