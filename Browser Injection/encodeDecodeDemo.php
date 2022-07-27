<?php
$var = 'hello all';
$afterEncode = base64_encode($var);
echo "  after Encode :  ". $afterEncode;
echo '<br>';
$afterDecode = base64_decode($afterEncode);
echo '<br>';
echo "  after Decode :  ".$afterDecode;
?>
