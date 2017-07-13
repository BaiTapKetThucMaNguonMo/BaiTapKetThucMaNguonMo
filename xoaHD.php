<?php
$mahd = $_GET["mahd"];
 require("connect.php");
 
$sql = "DELETE FROM user.hoadon WHERE mahd = '$mahd'";
$stmt = db2_prepare($conn, $sql);
		
								  $result = db2_execute($stmt);
						 			
header("location:admin.php?page=qlhd");

?>