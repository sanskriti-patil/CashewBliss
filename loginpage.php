<?php
include("connectioncode.php");
?>
<html>
<body bgcolor="pink">
<center>
<form method="POST">
<table border='2'>
<tr><th>username:</th><td><input type="text" name="n1"></td></tr>
<tr><th>password:</th><td><input type="text" name="n2"></td></tr>
<tr><th><input type="submit" value="submit" name="submit"></tr></th>
</table>
</form>
</center>
</body>
</html>
<?php
session_start();
if(isset($_POST['submit']))
{
	$username=$_POST['n1'];
	$password=$_POST['n2'];
	if(!$username || !$password)
	{
		echo "please enter username and password";
	}
	else
	{
		$sql="select * from regi where username='$username' and password='$password'";
	   $result=mysqli_query($conn,$sql);
	   $num=mysqli_num_rows($result);
	   if($num>0)
	   {
		   $row=mysqli_fetch_assoc($result);
		   echo "user found";
		   $username=$row['username'];
		   $_SESSION["username"]=$username;
		   echo $_SESSION["username"];
		   ?>
		   <script>window.location.href="index.php";
		   </script>
		   <?php
	   }
	   else
	   {
		   echo "no user found";
	   }
	}
}
?>