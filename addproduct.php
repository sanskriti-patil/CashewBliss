<?php
include("connectioncode.php");
?>
<html>
<body>
<form method="POST">
<table border='2'>

<tr><th>pid:</th><td><input type="text" name="n1"></td></tr>
<tr><th>pname:</th><td><input type="text" name="n2"></td></tr>
<tr><th>price:</th><td><input type="text" name="n3"></td></tr>
<tr><th>qty:</th><td><input type="text" name="n4"></td></tr>
<tr><th>suppliername:</th><td><input type="text" name="n5"></td></tr>
<tr><th>compnyname:</th><td><input type="text" name="n6"></td></tr>
<tr><th>suppliermobno:</th><td><input type="text" name="n7"></td></tr>
<tr><th>address:</th><td><input type="text" name="n8"></td></tr>
<tr><th><input type="submit" value="submit" name="submit"></tr></th>
</table>
</form>
</body>
</html>
<?php
if(isset($_POST['submit']))
{
	$pid=$_POST['n1'];
	$pname=$_POST['n2'];
	$price=$_POST['n3'];
	$qty=$_POST['n4'];
	$suppliername=$_POST['n5'];
	$compnyname=$_POST['n6'];
	$suppliermobno=$_POST['n7'];
	$address=$_POST['n8'];
	$sql="insert into manalishop values($pid,'$pname',$price,$qty,'$suppliername','$compnyname',$suppliermobno,'$address')";
	if(mysqli_query($conn,$sql))
	{
		echo "one Record Inserted";
	}
	else
	{
		echo "Error".mysqli_error($conn);
	}
}
mysqli_close($conn);
?>