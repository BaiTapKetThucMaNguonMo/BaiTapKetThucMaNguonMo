<?php
$mansx = $_GET["mansx"];
 require("connect.php");
 
$sql = "DELETE FROM user.nhasx WHERE mansx= '$mansx'";
$stmt = db2_prepare($conn, $sql);
		
								  $result = db2_execute($stmt);
						 			
header("location:admin.php?page=qlnsx");

?>