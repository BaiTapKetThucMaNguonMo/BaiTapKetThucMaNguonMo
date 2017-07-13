<?php
	if(isset($_POST["submit_name"])){
		

		$id = $_POST["id"];

	
		
	
		$pass = $_POST["pass"];

	
		


	      require("Connect.php");
			if($conn)
				{   
				    $SQL1= "update user.taikhoan set pass='$pass' where id='$id'";
		$stmt = db2_prepare($conn, $SQL1);
		 if ($stmt) {		
								  $result = db2_execute($stmt);
						 			if ($result) 
                               			
		header("location:admin.php?page=qltk");
	}
	}
}

?>			
                <form method="post" enctype="multipart/form-data">
            <table width="640px" id="main-content" border="0px" cellpadding="0px" cellspacing="0px">
            	<tr id="main-navbar" height="36px">
                	<td colspan="6" style="text-align:center" >SỬA TÀI KHOẢN	</td>
                </tr>
              
                <tr height="50" style="text-align:center"  >
                	<td class="form"><label>Tên tài khoản</label><br><input type="text" name="id" /></td>
                </tr>
                
                         <tr height="50" style="text-align:center" >
                	<td class="form"><label>Mật khẩu</label><br><input type="text" name="pass" /></td>
                </tr>  
   
              
                
                              
                <tr height="50" style="text-align:center" >
                	<td class="form"><input type="submit" name="submit_name" value="SỬA" /> <input type="reset" name="reset_name" value="Làm mới" /></td>
                </tr>
            </table>
            </form>