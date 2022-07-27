<html>
<head>
<script type="text/javascript">
function go(id) {
    window.location = "display.php?company="+id;
}
</script>
</head>
<body>
<?php
$con=mysqli_connect('localhost','root','');
mysqli_select_db($con, 'securityattack');

$company=$_GET['company'];

$company=base64_decode($company);

$sql="SELECT * from `browser_injection` where `company`='$company'";
$result=mysqli_query($con, $sql);
echo '<div id="display" class="display" style="width:40%; margin:auto; margin-top:2%; height:70%; padding:10px;">';
while($row=mysqli_fetch_array($result))
{
    echo "<table><tr><td><img src='images/".$row['image']."' width='250px' height='300px'/></td></tr>";
    echo "<tr><td>Name : ".$row['name']."</td></tr>";
    echo "<tr><td>Stock : ".$row['stock']."</td></tr>";
    echo "<tr><td><center><button onclick='go($company)'>Place Order</button></td></tr></table>";
}
echo '</div>';
?>
</body>
</html>