<?php
include("connectioncode.php");
$sql="select * from manalishop";
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
mysqli_close($conn);
?>