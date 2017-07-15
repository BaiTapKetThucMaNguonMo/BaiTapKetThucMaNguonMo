
<style>
table tr td a{
	text-decoration:none;
	color:#06F;
}
</style>
   <?php
   require("connect.php");
	  $abcd = "SELECT * from user.hoadon ";
     	  $stmt = db2_prepare($conn, $abcd); 
      if ($stmt) {
      $result = db2_execute($stmt);
   ?>
    <table width="1070px" id="main-content" border="1px" cellpadding="0px" cellspacing="0px">
            	<tr id="main-navbar" height="36px"class="menu-item" >
                	<td colspan="8">THÔNG TIN CÁC BẢNG HÓA ĐƠN </td> 
                </tr>
               
				<tr>
                	
                 <td width="86" align="justify" id="info" > MÃ HÓA ĐƠN</td>
                  <td width="104" align="justify" id="info" >MÃ KH</td>
                  
                  <td width="79" align="justify" id="info"> MÃ NV</td>
                  <td width="278" align="justify" id="info">NGÀY BÁN</td>
                  <td width="278" align="justify" id="info">MAMT</td>
                  <td width="278" align="justify" id="info">GIÁ BÁN</td>
                     <td colspan="2" align="justify" id="info"> <img src="images/them.png"/><a href="admin.php?page=themHD">Thêm</a></td>
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
                
                 
                 <td width="53" align="justify" id="info"><img src="images/sua.png"/> <a href="admin.php?page=suaid&idtv=<?php echo"$row[0]";?>">Sửa</a></td>
                  <td width="44" align="justify" id="info"><img src="images/xoa.png"/><a href="admin.php?page=xoaHD&mahd=<?php echo"$row[0]";?>">Xóa</a></td>
                </tr>
           <?php } 
		   } else { echo"<script>alert(\"chua co du lieu\")</script>";}?>
            </table>
		