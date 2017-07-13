<?php
$makh = $_GET["idtv"];
 require("connect.php");
 
$sql = "DELETE FROM user.khachhang WHERE makh = '$makh'";
$stmt = db2_prepare($conn, $sql);
		
								  $result = db2_execute($stmt);
						 			
header("location:admin.php?page=qlkh");

?>