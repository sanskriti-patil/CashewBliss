<html>
<body>
<form method="POST">
<table border='2'>
<tr><th>pid:</th><td><input type="text" name="n1"></td>
<tr><th><input type="submit" value="submit" name="submit"></tr></th>
</table>
</form>
</body>
</html>
<?php
include("connectioncode.php");

if(isset($_POST['submit']))
{
	$pid=$_POST['n1'];
$sql="select * from manalishop where pid=$pid";
$result=mysqli_query($conn,$sql);
$num=mysqli_num_rows($result);
if($num>0)
{
	while($row=mysqli_fetch_assoc($result))
	{
echo "pid:".$row["pid"]." pname:".$row["pname"]." price:".$row["price"]." qty:".$row["qty"]." suppliername:".$row["suppliername"]." compnyname:".$row["compnyname"]." suppliermobno:".$row["suppliermobno"]." address:".$row["address"]."<br>";
}
}
else
{
	echo "No record found";
}
}
mysqli_close($conn);
?>