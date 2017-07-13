
<style>
table tr td a{
	text-decoration:none;
	color:#06F;
}
</style>
   <?php
   require("connect.php");
	  $abcd = "SELECT * from user.taikhoan ";
     	  $stmt = db2_prepare($conn, $abcd); 
      if ($stmt) {
      $result = db2_execute($stmt);
   ?>
    <table width="1150px" id="main-content" border="1px" cellpadding="0px" cellspacing="0px">
            	<tr id="main-navbar" height="36px"class="menu-item" >
                	<td colspan="7">Quản lý tài khoản đăng nhập</td> 
                </tr>
               
				<tr>
                	
                 <td align="justify" id="info" >User</td>
                  <td align="justify" id="info" >Pass</td>
                  
              
                 <td colspan="2" align="justify" id="info"> <img src="images/them.png"/><a href="admin.php?page=them">Thêm</a></td>
                 </tr>
                  <?php 
				
					while($row=db2_fetch_array($stmt)){
				?>
                 <tr>
                 <td align="justify" id="info"><?php echo "$row[0]";?></td>
                 <td align="justify" id="info"><?php echo "$row[1]";?></td>
                  <td align="justify" id="info"><?php 		                                       if($row[0]=="ADMIN") echo"ADMIN";
				  else echo "User";?> </td>
                 
                 <td align="justify" id="info"><img src="images/sua.png"/> <a href="admin.php?page=sua&id=<?php echo"$row[0]";?>">Sửa</a></td>
                  <td align="justify" id="info"><img src="images/xoa.png"/><a href="admin.php?page=xoa&id=<?php echo"$row[0]";?>">Xóa</a></td>
                </tr>
           <?php } 
		   } else { echo"<script>alert(\"chua co du lieu\")</script>";}?>
            </table>
		