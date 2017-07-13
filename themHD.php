<?php
    if(isset($_POST["submit_name"])){
        

        $mahd = $_POST["mahd"];

        
    
        $makh= $_POST["makh"];
        $manv= $_POST["manv"];
        $ngayban= $_POST["ngayban"];
        $madh= $_POST["madh"];
        $giaban= $_POST["giaban"];
        
        


          require("Connect.php");
            if($conn)
                {   
                    $SQL1= "INSERT INTO user.hoadon values('$mahd','$makh','$manv','$ngayban','$madh','$giaban')";
        $stmt = db2_prepare($conn, $SQL1);
         if ($stmt) {       
                                  $result = db2_execute($stmt);
                                    if ($result) 
                                        
        header("location:admin.php?page=qlhd");
    }
    }
}

?>          
                <form method="post" enctype="multipart/form-data">
            <table width="640px" id="main-content" border="0px" cellpadding="0px" cellspacing="0px">
                <tr id="main-navbar" height="36px" align="center">
                    <td colspan="6">THÔNG TIN HÓA ĐƠN  </td>
                </tr>
              
                <tr height="50">
                    <td class="form"><label>MÃ  HD</label><br>
                    <input type="text" name="mahd" /></td>
                </tr>
                
                 <tr height="50">
                    <td class="form"><label>MÃ KH</label><br><input type="text" name="makh" /></td>
                </tr>  
   
                <tr height="50">
                    <td class="form"><label>MÃ NV</label><br><input type="text" name="manv" /></td>
                </tr>  
                <tr height="50">
                    <td class="form"><label>NGÀY BÁN</label><br><input type="text" name="ngayban" /></td>
                </tr>  
                 <tr height="50">
                    <td class="form"><label>MÃ ĐH </label><br><input type="text" name="madh" /></td>
                </tr>  
                 <tr height="50">
                    <td class="form"><label>GIÁ BÁN</label><br><input type="text" name="giaban" /></td>
                </tr>  
                
                <tr height="50">
                    <td class="form"><input type="submit" name="submit_name" value="Thêm" /> <input type="reset" name="reset_name" value="Làm mới" /></td>
                </tr>
            </table>
            </form>