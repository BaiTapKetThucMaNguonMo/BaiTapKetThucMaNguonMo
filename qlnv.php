
<style>
table tr td a{
	text-decoration:none;
	color:#06F;
}
</style>
   <?php
   require("connect.php");
	  $abcd = "SELECT * from user.nhanvien ";
     	  $stmt = db2_prepare($conn, $abcd); 
      if ($stmt) {
      $result = db2_execute($stmt);
   ?>
    <table width="1070px" id="main-content" border="1px" cellpadding="0px" cellspacing="0px">
            	<tr id="main-navbar" height="36px"class="menu-item" >
                	<td colspan="8">bảng thông tin nhân viên </td> 
                </tr>
               
				<tr>
                	
                 <td align="justify" id="info" > MÃ NHÂN VIÊN </td>
                  <td align="justify" id="info" >HỌ TÊN NHÂN VIÊN</td>
                  <td align="justify" id="info">ĐỊA CHỈ</td>
                  <td align="justify" id="info">SỐ ĐIỆN THOẠI</td>
                  <td align="justify" id="info">CHỨC VỤ</td>
                  <td align="justify" id="info">NGÀY SINH</td>
                  <td align="justify" id="info">GIỚI TÍNH</td>
                     <td colspan="2" align="justify" id="info"> <img src="images/them.png"/><a href="admin.php?page=themnv">Thêm</a></td>
                 </tr>
                  <?php 
				
					while($row=db2_fetch_array($stmt)){
				?>
                 <tr>
                 <td align="justify" id="info"><?php echo "$row[0]";?></td>
                 <td align="justify" id="info"><?php echo "$row[1]";?></td>
                 <td align="justify" id="info"><?php echo "$row[2]";?></td>
                 <td align="justify" id="info"><?php echo "$row[3]";?></td>
                  <td align="justify" id="info"><?php echo "$row[4]";?></td>
                  <td align="justify" id="info"><?php echo "$row[5]";?></td>
                   <td align="justify" id="info"><?php echo "$row[6]";?></td>
                 <td align="justify" id="info"><img src="images/sua.png"/> <a href="admin.php?page=suaNV&manv=<?php echo"$row[0]";?>">Sửa</a></td>
                  <td align="justify" id="info"><img src="images/xoa.png"/><a href="admin.php?page=xoaNV&manv=<?php echo"$row[0]";?>">Xóa</a></td>
                </tr>
           <?php } 
		   } else { echo"<script>alert(\"chua co du lieu\")</script>";}?>
            </table>
		