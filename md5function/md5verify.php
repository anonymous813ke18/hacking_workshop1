<?php
$f=fopen('md5.txt','r');

$str='';

while(!feof($f))
  {
  $str .= fgets($f); // reads line by line
  }
fclose($f);
$hashForVerification = $str;

// find the hash of the file
$file = $_GET['fname'];
$hash = md5_file($file);

if($hash == $hashForVerification)
echo " file has not been altered";
else
echo " file has been altered, Chk for Hackers around";
?>