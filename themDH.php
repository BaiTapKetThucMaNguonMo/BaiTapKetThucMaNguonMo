<?php
    if(isset($_POST["submit_name"])){
        

        $madh = $_POST["madh"];

        
    
        $tendh= $_POST["tendh"];
        $mansx= $_POST["mansx"];
        $size= $_POST["size"];
        $soluong= $_POST["soluong"];
        $giaban= $_POST["giaban"];
        
        


          require("Connect.php");
            if($conn)
                {   
                    $SQL1= "INSERT INTO user.dongho values('$madh','$tendh','$mansx','$size','$soluong','$giaban')";
        $stmt = db2_prepare($conn, $SQL1);
         if ($stmt) {       
                                  $result = db2_execute($stmt);
                                    if ($result) 
                                        
        header("location:admin.php?page=qldh");
    }
    }
}

?>          
                <form method="post" enctype="multipart/form-data">
            <table width="640px" id="main-content" border="0px" cellpadding="0px" cellspacing="0px">
                <tr id="main-navbar" height="36px">
                    <td colspan="6">THÔNG TIN ĐỒNG HỒ  </td>
                </tr>
              
                <tr height="50">
                    <td class="form"><label>MÃ  DH</label><br>
                    <input type="text" name="madh" /></td>
                </tr>
                
                         <tr height="50">
                    <td class="form"><label>tên DH</label><br><input type="text" name="tendh" /></td>
                </tr>  
   
              <tr height="50">
                    <td class="form"><label>MÃ NSX</label><br><input type="text" name="mansx" /></td>
                </tr>  
                <tr height="50">
                    <td class="form"><label>SIZE</label><br><input type="text" name="size" /></td>
                </tr>  
                 <tr height="50">
                    <td class="form"><label>SỐ LƯỢNG </label><br><input type="text" name="soluong" /></td>
                </tr>  
                 <tr height="50">
                    <td class="form"><label>GIÁ BÁN</label><br><input type="text" name="giaban" /></td>
                </tr>  
                
                <tr height="50">
                    <td class="form"><input type="submit" name="submit_name" value="Thêm DH" /> <input type="reset" name="reset_name" value="Làm mới" /></td>
                </tr>
            </table>
            </form>