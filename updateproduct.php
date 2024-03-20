<?php
include("connectioncode.php");
?>
<html>
<body>
<form method="POST">
<table border='2'>
<tr><th>pid:</th><td><input type="text" name="n1"></td></tr>
<tr><th>price:</th><td><input type="text" name="n3"></td></tr>
<tr><th>qty:</th><td><input type="text" name="n4"></td></tr>
<tr><th><input type="submit" value="submit" name="submit"></th></tr>
</table>
</form>
</body>
</html>
<?php
if(isset($_POST['submit']))
{
	$pid=$_POST['n1'];
	$price=$_POST['n3'];
	$qty=$_POST['n4'];
	$sql="update manalishop set price=$price,qty=$qty where pid=$pid";
	if(mysqli_query($conn,$sql))
	{
		echo "One record Updated";
	}
	else
	{
		echo "Error".mysqli_error($conn);
	}
}
mysqli_close($conn);
?>