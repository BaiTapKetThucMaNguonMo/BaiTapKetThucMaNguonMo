<?php
    if(isset($_POST["submit_name"])){
        

      <?php
    if(isset($_POST["submit_name"])){
        

        $madh$_POST["makh"];
        $hotennv = $_POST["hoten"];
        $diachi= $_POST["diachi"];
        $sdt = $_POST["sdt"];
        
    
        
    
    
    
        


          require("Connect.php");
            if($conn)
                {   
                    $SQL1= "update useruserhhang set (hoten='$hoten',diachi='$diachi',sdt='$sdt') where manv='$manv'";
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
                    <td colspan="6" style="text-align:center" >SỬA KHÁCH HÀNG   </td>
                </tr>
              
                <tr height="50" style="text-align:center"  >
                    <td class="form"><label>MA KH</label><br><input type="text" name="makh" /></td>
                </tr>
                
                         <tr height="50" style="text-align:center" >
                    <td class="form"><label>HỌ TÊN </label><br><input type="text" name="hoten" /></td>
                </tr>  
              
                         <tr height="50" style="text-align:center" >
                    <td class="form"><label>ĐỊA CHỈ</label><br><input type="text" name="diachi" /></td>
                </tr>  
                         <tr height="50" style="text-align:center" >
                    <td class="form"><label>SDT</label><br><input type="text" name="sdt" /></td>
                </tr>   
               
              
                
                              
                <tr height="50" style="text-align:center" >
                    <td class="form"><input type="submit" name="submit_name" value="SỬA" /> <input type="reset" name="reset_name" value="Làm mới" /></td>
                </tr>
            </table>
            </form>
    
        
    
    
    
        


          require("Connect.php");
            if($conn)
                {   
                    $SQL1= "update user.khachhang set (hoten='$hoten',diachi='$diachi',sdt='$sdt') where manv='$manv'";
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
                    <td colspan="6" style="text-align:center" >SỬA KHÁCH HÀNG   </td>
                </tr>
              
                <tr height="50" style="text-align:center"  >
                    <td class="form"><label>MA KH</label><br><input type="text" name="makh" /></td>
                </tr>
                
                         <tr height="50" style="text-align:center" >
                    <td class="form"><label>HỌ TÊN </label><br><input type="text" name="hoten" /></td>
                </tr>  
              
                         <tr height="50" style="text-align:center" >
                    <td class="form"><label>ĐỊA CHỈ</label><br><input type="text" name="diachi" /></td>
                </tr>  
                         <tr height="50" style="text-align:center" >
                    <td class="form"><label>SDT</label><br><input type="text" name="sdt" /></td>
                </tr>   
               
              
                
                              
                <tr height="50" style="text-align:center" >
                    <td class="form"><input type="submit" name="submit_name" value="SỬA" /> <input type="reset" name="reset_name" value="Làm mới" /></td>
                </tr>
            </table>
            </form>