<?php
	if(isset($_POST["submit_name"])){
		

		$manv = $_POST["manv"];
		$hotennv = $_POST["hotennv"];
		$diachi= $_POST["diachi"];
		$sdt = $_POST["sdt"];
		$chucvu = $_POST["chucvu"];
		$ngaysinh= $_POST["ngaysinh"];
		$gioitinh= $_POST["gioitinh"];

	
		
	
	
	
		


	      require("Connect.php");
			if($conn)
				{   
				    $SQL1= "update user.nhanvien set hotennv='$hotennv',diachi='$diachi',sdt='$sdt',chucvu='$chucvu'ngaysinh='$ngaysinh',gioitinh='$gioitinh' where manv='$manv'";
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
                	<td colspan="6" style="text-align:center" >SỬA NHÂN VIÊN	</td>
                </tr>
              
                <tr height="50" style="text-align:center"  >
                	<td class="form"><label>MA NV</label><br><input type="text" name="manv" /></td>
                </tr>
                
                         <tr height="50" style="text-align:center" >
                	<td class="form"><label>HỌ TÊN NV</label><br><input type="text" name="hotennv" /></td>
                </tr>  
              
                         <tr height="50" style="text-align:center" >
                	<td class="form"><label>ĐỊA CHỈ</label><br><input type="text" name="diachi" /></td>
                </tr>  
                         <tr height="50" style="text-align:center" >
                	<td class="form"><label>SDT</label><br><input type="text" name="sdt" /></td>
                </tr>   
                <tr height="50" style="text-align:center" >
                	<td class="form"><label>chức vụ</label><br><input type="text" name="chucvu" /></td>
                </tr>  
                 <tr height="50" style="text-align:center" >
                	<td class="form"><label>NGÀY SINH</label><br><input type="text" name="ngáyinh" /></td>
                </tr>   
                <tr height="50" style="text-align:center" >
                	<td class="form"><label>GIỚI TÍNH</label><br><input type="text" name="gioitinh" /></td>
                </tr>  
   
              
                
                              
                <tr height="50" style="text-align:center" >
                	<td class="form"><input type="submit" name="submit_name" value="SỬA" /> <input type="reset" name="reset_name" value="Làm mới" /></td>
                </tr>
            </table>
            </form>