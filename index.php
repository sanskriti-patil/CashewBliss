<?php
include("connectioncode.php");
session_start();
echo "WELCOME  ".$_SESSION["username"];
?>
<html>
    <head>
	</head>
     <body bgcolor="lightblue">
	 <center>
	<table border='2'>
	<tr><th>MANALI SHOP</th></tr>
	</table>  
</center>	
 <h4 align="center"><a href="regi.php" target="f3">| CREATE NEW USER |</a><a href="addproduct.php" target="f3">| ADD PRODUCT |</a><a href="updateproduct.php" target="f3">| UPDATE PRODUCT |</a><a href="deleteproduct.php" target="f3">| DELETE PRODUCT |</a><a href="viewall.php" target="f3">| VIEW ALL |</a><a href="viewperticular.php" target="f3">| VIEW PERTICULAR |</a><a href="loginpage.php" target="f3">| LOGOUT |</a><a href="editpage.php" target="f3">| EDIT PAGE |</a></h4>
    </body>
</html>
