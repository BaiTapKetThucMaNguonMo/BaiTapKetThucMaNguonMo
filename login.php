<?php
ob_start();
session_start();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Trang Login</title>

<link rel="stylesheet" type="text/css" href="css/login.css">
</head>

<body>
       

<div class="dangnhap">
<table class="bang">
	
    <tr id="body">
    	<td align="left" valign="top" width="250px">
        	<!-- Left Menu -->
            <table width="250px" class="left-menu" border="0px" cellpadding="0px" cellspacing="0px">
                        	<tr class="bg-leftbar" height="36px">
                	<td colspan="2">Đăng Nhập Hệ Thống </td>
                </tr>
  <?php error_reporting(E_ALL & ~E_NOTICE & ~E_DEPRECATED);

if((!$_SESSION["user"]) && (!$_SESSION["pass"])){?>
<form method="POST">
<tr>
      <td width="97" id="info" >UserName:</td>
      <td width="240"><input type="text" name="user" />        <br /> </td>
</tr>

<tr> <td id="info"> Password:</td>
  <td><input type="password" name="pass" /></td>
</tr>

<tr>
 <td><input type="submit" name="submitname" value="Login" /> </td>
 <td><input type="reset"  name="reset_name" value="Return" /></td>
</tr>
</form>
<?php 
}else{header("location:dangxuat.php"); }

error_reporting(E_ALL & ~E_NOTICE & ~E_DEPRECATED);

if($_POST["submitname"]){
   if($_POST["user"] && $_POST["pass"]){
      $user =$_POST["user"];
      $pass =$_POST["pass"];
require("connect.php");
 if ($conn)
            {
$SQL = "SELECT * FROM user.taikhoan where id='$user' and pass='$pass'" ;
	  $stmt = db2_prepare($conn, $SQL); 
      if ($stmt) {
      $result = db2_execute($stmt);
      if (!$result) {
         echo "exec errormsg: " .db2_stmt_errormsg($stmt);
                    }
					if($result)
					{
		   $_SESSION["user"] = $user;
		   $_SESSION["pass"] = $pass;
    
           header("location:admin.php");
		  
				}
					}
    	           
   else {
         echo "exec errormsg: " . db2_stmt_errormsg($stmt);
   }   }
       else {
	        echo"<script> alert('Tài khoản không hợp lệ !')</script> " ;
	       }
           }
}

 ?><!-- </table>
             <table width="250px" class="left-menu" border="0px" cellpadding="0px" cellspacing="0px">
              <tr class="bg-leftbar" height="36px">
                  <td>Hệ Thống</td>
                </tr>
                <tr height="30px">
                  <td id="user-info">Xin chào đến với hệ thống.</td>
                </tr>
                <tr height="30px">
                  <td id="logout" align="right"><a href="login.php?page=taonich">Tạo tài khoản</a></td>
                </tr>
            </table>
    <td align="right" valign="top" width="650px">
                        <?php
         /*  error_reporting(E_ALL & ~E_NOTICE & ~E_DEPRECATED);
         switch($_GET["page"]){
       case "taonich": include_once("taonich.php");
       break;
       case "chucmung": include_once("chucmung.php");
       break;
       default: include_once("gioithieu.php");
       }*/
       ?>
        
        </td>     -->
        </table>
        </td>
        </tr>
</table>        
</div>          
         </body>
</html>
