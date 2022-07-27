<html>
<head>
<title>SQL Injection</title>
<script type="text/javascript">
function login_validate() {
	var x=document.forms["login"]["email"].value;
	if (x=="")
	{
	  document.forms["login"]["email"].focus();
	  alert("Please enter Email");
	  return false;
	}
	var x=document.forms["login"]["password"].value;
	if(x=="")
	{
	  document.forms["login"]["password"].focus();
	  alert("Please enter Password");
	  return false;
	}
}

</script>
</head>
<body>
<div id="loginarea" class="loginarea" style="width:28%; margin:auto; margin-top:10%; height:18%; padding:10px; ">
<form name="login" id="login" method="post" action="submit.php" onsubmit="return login_validate()" >
<table>
<tr>
<td>Email Id :</td><td><input type="email" name="email" placeholder="Email Id" /></td>
</tr>
<tr>
<td>Password : </td><td><input type="password" name="password" placeholder="Password" /></td>
</tr>
<tr>
<td colspan="2"><center><input type="submit" value="Login" /></center></td>
</tr>
<tr>
<td colspan="2"><center><?php 
if(isset($_REQUEST['login']) && $_REQUEST['login']=='false')
{
echo "Invalid Username or Password";
unset($_REQUEST['login']);
}
?>
</center></td>
</tr>
</table>
</form>
</div>
</body>
</html>
<?php 
session_start();
if(isset($_REQUEST['login']) && $_REQUEST['login']=='true'){
echo '<div id="display" class="display" style="border:1px solid grey; width:18%; margin:auto; margin-top:10%; height:20%; border-radius:5px; padding:10px; background-color: #cccccc; box-shadow: 0px 0px 6px rgba(0, 0, 0, 0.1); ">';
echo "<script type='text/javascript'>document.getElementById('loginarea').style.display = 'none';</script>";
echo "Hello, ".$_SESSION['name'];
echo "</div>";}
?>