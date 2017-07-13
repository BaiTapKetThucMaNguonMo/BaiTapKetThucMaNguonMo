<?php
    if(isset($_POST["submit_name"])){
        

        $mansx = $_POST["mansx"];

        
    
        $tennsx = $_POST["tennsx"];
        
        $sdt= $_POST["sdt"];
        $diachi= $_POST["diachi"];
        


          require("Connect.php");
            if($conn)
                {   
                    $SQL1= "INSERT INTO user.nhasx values('$mansx','$tennsx','$sdt','$diachi')";
        $stmt = db2_prepare($conn, $SQL1);
         if ($stmt) {       
                                  $result = db2_execute($stmt);
                                    if ($result) 
                                        
        header("location:admin.php?page=qlnsx");
    }
    }
}

?>          
                <form method="post" enctype="multipart/form-data">
            <table width="640px" id="main-content" border="0px" cellpadding="0px" cellspacing="0px">
                <tr id="main-navbar" height="36px">
                    <td colspan="6">THÔNG TIN NHÀ SẢN  XUẤT </td>
                </tr>
              
                <tr height="50">
                    <td class="form"><label>MÃ NSX</label><br>
                    <input type="text" name="mansx" /></td>
                </tr>
                
                         <tr height="50">
                    <td class="form"><label> tên</label><br><input type="text" name="tennsx" /></td>
                </tr>  
    
                <tr height="50">
                    <td class="form"><label>só điện thoại</label><br><input type="text" name="sdt" /></td>
                </tr>  

              <tr height="50">
                    <td class="form"><label>địa chỉ</label><br><input type="text" name="diachi" /></td>
                </tr> 
                
                <tr height="50">
                    <td class="form"><input type="submit" name="submit_name" value="Thêm " /> <input type="reset" name="reset_name" value="Làm mới" /></td>
                </tr>
            </table>
            </form>