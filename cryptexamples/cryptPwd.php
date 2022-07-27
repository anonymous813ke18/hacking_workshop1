<?php
// Set the password
$password = 'mypassword';

// Get the hash, letting the salt be automatically generated.

// This function behaves different on different operating systems, some operating systems supports more than one type of encryption. PHP checks what algorithms are available and what algorithms to use when it is installed.

$hash = crypt($password);

echo $hash;
?>