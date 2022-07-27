<html>
<head>
<title>Browser Injection</title>
<script type="text/javascript">
function validate() {
    var x=document.getElementById('brand').value;
    if(x=="select") {
        document.getElementById('brand').focus;
        alert('Make a selection');
        return false;
    }
    else
    {
        window.location = "display.php?company="+x;
    }
}
</script>
</head>
<body>
<?php
/*
$con=mysqli_connect('localhost','root','');
mysqli_select_db($con, 'securityattack');

$sql="Select * from `browser_injection` where `stock`>0";
$result=mysqli_query($con,$sql);
if(mysqli_num_rows($result)>0)
{
    echo '<div id="display" style="width:40%; margin:auto; margin-top:20%; height:10%; padding:10px;">';
    echo '<table><tr><td>Select Brand : </td><td>';
    echo '<select name="brand" id="brand"><option value = "select" >---Select---</option>';
    while($row=mysqli_fetch_array($result))
    {
        echo "<option value = '".$row['company']."'>".$row['company']."</option>";
    }
    echo '</select></td>';
    echo '<td><button onclick="validate()">Search</button></td></tr></table></div>';
}
else
{
    echo '<div id="display" width:18%; margin:auto; margin-top:10%; height:20%; padding:10px;">';
    echo 'Out of Stock</div>';
}
*/

$con=mysqli_connect('localhost','root','');
mysqli_select_db($con, 'securityattack');

$sql="Select * from `browser_injection` where `stock`>0";
$result=mysqli_query($con, $sql);
if(mysqli_num_rows($result)>0)
{
    echo '<div id="display" style="width:40%; margin:auto; margin-top:10%; height:10%; padding:10px;">';
    echo '<table><tr><td>Select Brand : </td><td>';
    echo '<select name="brand" id="brand"><option value = "select" >---Select---</option>';
    while($row=mysqli_fetch_array($result))
    {
        echo "<option value ='".base64_encode($row['company'])."'>".$row['company']."</option>";
    }
    echo '</select></td>';
    echo '<td><button onclick="validate()">Search</button></td></tr></table></div>';
}
else
{
    echo '<div id="display" style="width:18%; margin:auto; margin-top:10%; height:20%;padding:10px;">';
    echo 'Out of Stock</div>';
}

?>

</body>
</html>