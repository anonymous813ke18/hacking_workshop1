<?php
$f=fopen('code.txt','r');

$str='';

while(!feof($f))
  {
  $str .= fgets($f); // reads line by line
  }
  
fclose($f);

$beforeDecoding = $str;

$afterDecoding = convert_uudecode($beforeDecoding);

echo "data Rx and Decoded : ".'<br>'.$afterDecoding;
?>