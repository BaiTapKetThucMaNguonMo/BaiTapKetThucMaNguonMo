<?php
$idtv = $_GET["id"];
 require("connect.php");
 
$sql = "DELETE FROM user.taikhoan WHERE id = '$idtv'";
$stmt = db2_prepare($conn, $sql);
		
								  $result = db2_execute($stmt);
						 			
header("location:admin.php?page=qltk");

?>