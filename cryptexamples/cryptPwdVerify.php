<?php
$hashed_password = crypt('mypassword'); // let the salt be automatically generated

/* You should pass the entire results of crypt() as the salt for comparing a password, to avoid problems when different hashing algorithms are used. (As you know, some OS and Versions of php use standard DES-based password hashing tht uses a 2-character salt,while others use MD5-based hashing tht uses 12.) */

$user_input = $_POST['pwd'];
   
if(crypt($user_input, $hashed_password) == $hashed_password) {
   echo "Password verified!";
}
else
   echo "Are u trying to hack ??";
?>