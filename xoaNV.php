<?php
$manv = $_GET["manv"];
 require("connect.php");
 
$sql = "DELETE FROM user.nhanvien WHERE manv= '$manv'";
$stmt = db2_prepare($conn, $sql);
		
								  $result = db2_execute($stmt);
						 			
header("location:admin.php?page=qlnv");

?>