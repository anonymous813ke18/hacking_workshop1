<?php
$file = $_GET['fname'];
$hash = md5_file($file);
echo 'MD5 file hash of '. $file . ': ' . $hash;
$f=fopen('md5.txt','w');
fwrite($f,$hash);
fclose($f);
?>

