<?php
    if(isset($_POST["submit_name"])){
        

        $makh = $_POST["makh"];

        
    
        $hoten = $_POST["hoten"];
        $diachi= $_POST["diachi"];
        $sdt= $_POST["sdt"];
        
        


          require("Connect.php");
            if($conn)
                {   
                    $SQL1= "INSERT INTO user.khachhang values('$makh','$hoten','$diachi','$sdt')";
        $stmt = db2_prepare($conn, $SQL1);
         if ($stmt) {       
                                  $result = db2_execute($stmt);
                                    if ($result) 
                                        
        header("location:admin.php?page=qlkh");
    }
    }
}

?>          
                <form method="post" enctype="multipart/form-data">
            <table width="640px" id="main-content" border="0px" cellpadding="0px" cellspacing="0px">
                <tr id="main-navbar" height="36px">
                    <td colspan="6">THÔNG TIN KHÁCH HÀNG  </td>
                </tr>
              
                <tr height="50">
                    <td class="form"><label>MÃ  KH</label><br>
                    <input type="text" name="makh" /></td>
                </tr>
                
                         <tr height="50">
                    <td class="form"><label>họ tên KH</label><br><input type="text" name="hoten" /></td>
                </tr>  
   
              <tr height="50">
                    <td class="form"><label>địa chỉ</label><br><input type="text" name="diachi" /></td>
                </tr>  
                <tr height="50">
                    <td class="form"><label>só điện thoại</label><br><input type="text" name="sdt" /></td>
                </tr>  
                
                <tr height="50">
                    <td class="form"><input type="submit" name="submit_name" value="Thêm " /> <input type="reset" name="reset_name" value="Làm mới" /></td>
                </tr>
            </table>
            </form>