<?php
$data="";
for($i=1;$i<10;$i++) {
    if($_POST[$i]!=="") {
        $data.=$_POST[$i];
    }
}
$i=10000;
$f=fopen('password.txt','a');

while($i!=0) {
    $shuffled = str_shuffle($data);
    $substring = substr($shuffled,0,10)."\n";
    fwrite($f,$substring);    
    $i--;
}
fclose($f);
echo "<h3>CALCULATED</h3>"
?>