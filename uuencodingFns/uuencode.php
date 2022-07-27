<?php
$str = $_GET['data'];
$afterEncoding = convert_uuencode($str);
$f=fopen('code.txt','w');
fwrite($f,$afterEncoding);
fclose($f);
echo "<a href='uudecode.php'>Click here to decode this data</a>"
?>