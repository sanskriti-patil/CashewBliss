<html>
<body>
<form method="POST" enctype="multipart/form-data">
<center>
<table border='2'>

<tr><td>fname:</td><th><input type="text" name="n1"></th></tr>
<tr><td>lname:</td><th><input type="text" name="n2"></th></tr>
<tr><td>mobno:</td><th><input type="text" name="n3"></th></tr>
<tr><td>address:</td><th><input type="text" name="n4"></th></tr>
<tr><td>emailid:</td><th><input type="text" name="n5"></th></tr>
<tr><td>username:</td><th><input type="text" name="n6"></th></tr>
<tr><td>password:</td><th><input type="text" name="n7"></th></tr>
<tr><td>photo:</td><th><input type="file" name="n8"></th></tr>
<tr><td><input type="submit" value="submit" name="submit"></td></tr>
</table>
</center>
</form>
</body>
</html>
<?php
include("connectioncode.php");
if(isset($_POST['submit']))
{
	$fname=$_POST['n1'];
	$lname=$_POST['n2'];
	$mobno=$_POST['n3'];
	$address=$_POST['n4'];
	$emailid=$_POST['n5'];
	$username=$_POST['n6'];
	$password=$_POST['n7'];
	$photo=$_FILES['n8']['name'];
	$tphoto=$_FILES['n8']['tmp_name'];
	move_uploaded_file($tphoto,"regi/photo/$photo");
	$sql="insert into regi values('$fname','$lname',$mobno,'$address','$emailid','$username','$password','$photo')";
	if(mysqli_query($conn,$sql))
	{
		echo "One record inserted";
	}
	else
	{
		echo "error".mysqli_error($conn);
	}
	}
mysqli_close($conn);
?>