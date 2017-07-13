<?php
	if(isset($_POST["submit_name"])){
		

		$manv = $_POST["manv"];

		
	
		$hotennv = $_POST["hotennv"];
		$diachi= $_POST["diachi"];
		$sdt= $_POST["sdt"];
		$chucvu= $_POST["chucvu"];
		$ngaysinh= $_POST["ngaysinh"];
		$gioitinh= $_POST["gioitinh"];
		


	      require("Connect.php");
			if($conn)
				{   
				    $SQL1= "INSERT INTO user.nhanvien values('$manv','$hotennv','$diachi','$sdt','$chucvu','$ngaysinh',$gioitinh)";
		$stmt = db2_prepare($conn, $SQL1);
		 if ($stmt) {		
								  $result = db2_execute($stmt);
						 			if ($result) 
                               			
		header("location:admin.php?page=qlnv");
	}
	}
}

?>			
                <form method="post" enctype="multipart/form-data">
            <table width="640px" id="main-content" border="0px" cellpadding="0px" cellspacing="0px">
            	<tr id="main-navbar" height="36px">
                	<td colspan="6">THÊM NHÂN VIÊN	</td>
                </tr>
              
                <tr height="50">
                	<td class="form"><label>mã nhân viên</label><br>
               	    <input type="text" name="manv" /></td>
                </tr>
                
                         <tr height="50">
                	<td class="form"><label>họ tên nhân viên</label><br><input type="text" name="hotennv" /></td>
                </tr>  
   
              <tr height="50">
                	<td class="form"><label>địa chỉ</label><br><input type="text" name="diachi" /></td>
                </tr>  
                <tr height="50">
                	<td class="form"><label>só điện thoại</label><br><input type="text" name="sdt" /></td>
                </tr>  
                <tr height="50">
                	<td class="form"><label>chức vụ</label><br><input type="text" name="chucvu" /></td>
                </tr>  
                <tr height="50">
                	<td class="form"><label>ngày sinh</label><br><input type="text" name="ngaysinh" /></td>
                </tr>  
                
                    <tr height="50">
                	<td class="form"><label>giới tính</label><br><input type="text" name="gioitinh" /></td>
                </tr>             
                <tr height="50">
                	<td class="form"><input type="submit" name="submit_name" value="Thêm" /> <input type="reset" name="reset_name" value="Làm mới" /></td>
                </tr>
            </table>
            </form>