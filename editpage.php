<?php
include("connectioncode.php");
session_start();
$username=$_SESSION["username"];
$sql="select * from regi where username='$username'";
$result=mysqli_query($conn,$sql);
$num=mysqli_num_rows($result);
if($num>0)
{
	while($row=mysqli_fetch_assoc($result))
	{
		$fname=$row['fname'];
		$lname=$row['lname'];
		$mobno=$row['mobno'];
		$address=$row['address'];
		$emailid=$row['emailid'];
		$username=$row['username'];
		$password=$row['password'];
		$photo=$row['photo'];
	}
}
?>
<html>
<body bgcolor="pink">
<form method="POST" enctype="multipart/form-data">
<center>
<table border='2'>
<tr><td>fname:</td><th><input type="text" name="n1" value="<?php echo $fname;?>"></th></tr>
<tr><td>lname:</td><th><input type="text" name="n2" value="<?php echo $lname;?>"></th></tr>
<tr><td>mobno:</td><th><input type="text" name="n3" value="<?php echo $mobno;?>"></th></tr>
<tr><td>address:</td><th><input type="text" name="n4" value="<?php echo $address;?>"></th></tr>
<tr><td>emailid:</td><th><input type="text" name="n5" value="<?php echo $emailid;?>"></th></tr>
<tr><td>username:</td><th><input type="text" name="n6" value="<?php echo $username;?>"></th></tr>
<tr><td>password:</td><th><input type="text" name="n7" value="<?php echo $password;?>"></th></tr>
<tr><td>photo:</td><th><input type="file" name="n8"><img src="regi/photo/<?php echo $photo; ?>" height=100 width=100></th></tr>

<tr><td><input type="submit" value="submit" name="submit"></tr></td>	
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
	$sql="update regi set fname='$fname',lname='$lname',mobno=$mobno,address='$address',emailid='$emailid',username='$username',password='$password',photo='$photo' where username='$username'";
	if(mysqli_query($conn,$sql))
	{
		echo "One record edited";
	}
	else
	{
		echo "error".mysqli_error($conn);
	}
	}
mysqli_close($conn);
?>