<?php
ob_start();
session_start();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" type="text/css" href="">
<title>Trang Quản Trị</title>
<style>

table#thanhkeo{
margin:0px auto;
}
table#thanhkeo tr td#header table tr td#navbar{
background:url(images/thanhkeo.jpg) top left repeat-x;
padding-left:15px;
}
table#thanhkeo tr td#header table tr td#navbar table tr td{
font-family:arial;
font-size:11px;
font-weight:bold;
padding-right:30px;
}
table#thanhkeo tr td#header table tr td#navbar table tr td a{
color:#0FF;
text-decoration:none;
text-transform:capitalize;
}
table.left-menu{
border-left:1px solid #cdcdcd;
border-right:1px solid #cdcdcd;
border-bottom:1px solid #cdcdcd;

}
table.left-menu tr.bg-leftbar{
font-family:tahoma;
font-size:13px;
font-weight:bold;
color:#0FF;
text-transform:uppercase;
background:url(images/thanhkeo.jpg) top left repeat-x;
}
table.left-menu tr.bg-leftbar td{
padding-left:10px;
}
table.left-menu tr.menu-item{
font-family:arial;
font-size:13px;
background:url(images/thanhkeo.jpg) bottom left no-repeat;
}
table.left-menu tr.menu-item a{
color:#0f0f0f;
text-decoration:none;
text-transform:capitalize;
}
table.left-menu tr.menu-item a:hover{
color:#797875;
}
table.left-menu tr.menu-item td{
padding-left:10px;
}
table.left-menu tr td#user-info{
font-family:arial;
font-size:13px;
color:#0f0f0f;
padding:10px;
}
table.left-menu tr td#user-info b{
color:#FF0000;
}
table.left-menu tr td#logout a{
font-family:arial;
font-size:11px;
font-weight:bold;
color:#FF0000;
text-decoration:none;
text-transform:capitalize;
padding-right:10px;
}
table.left-menu tr td#logout a:hover{
text-decoration:underline;
}
table#thanhkeo tr#body td table{
margin-bottom:20px;
}
table#main-content{
border-left:1px solid #cdcdcd;
border-right:1px solid #cdcdcd;
border-bottom:1px solid #cdcdcd;
}
table#main-content tr#main-navbar{
	background:url(images/thanhkeo.jpg) top left repeat-x;
font-family:arial;
font-size:13px;
font-weight:bold;
color:#FFFFFF;
text-transform:uppercase;
}
table#main-content tr#main-navbar td{
padding:0px 10px;
text-decoration:none;
}
table#main-content tr td#info{
	
font-family:tahoma;
font-size:13px;
color:#0f0f0f;
padding:10px;
line-height:30px;
text-decoration:none;
}
table tr td#footer{
font-family:tahoma;
font-size:13px;
color:#FFFFFF;
text-transform:capitalize;
background:url(images/thanhkeo.jpg) bottom left repeat-x;
}


#danhmuc td {
    background-color: darkkhaki;
    color: deeppink;
    text-align: -webkit-center;
}
</style>
</head>
<body>

<?php
if($_SESSION["user"] && $_SESSION["pass"]){
?>
<div class="container">
    <img src="css/z.jpg" alt="" />
</div>
<div class="menu">
   <table >
	<tr id="body">
    	<td align="left" valign="top" width="250px">
        	<!-- Left Menu -->
            <table width="250px" class="left-menu" border="0px" cellpadding="0px" cellspacing="0px">
                <tr class="bg-leftbar" height="36px">
                    <td class="danhmuc">Danh mục quyền hạn</td>
                </tr>
                <tr class="menu-item" height="30px">
                    <td height="29"><img width="30px" src="images/trangchu.png"/><a href="admin.php?page=thongtinad">trang chủ</a></td>
                </tr>
                <tr class="menu-item" height="30px">
                    <td><img  width="30px" src="images/qlnd.png"/><a href="admin.php?page=qltk">Quản Lý TÀI KHOẢN</a></td>
                </tr>
                  <tr class="menu-item" height="30px">
                    <td><img  width="30px" src="images/qlnd.png"/><a href="admin.php?page=qlnv">Quản Lý NHÂN VIÊN</a></td>
                </tr>
                  <tr class="menu-item" height="30px">
                    <td><img  width="30px" src="images/qlnd.png"/><a href="admin.php?page=qlnsx">Quản Lý NHÀ SẢN XUẤT</a></td>
                </tr>  
               
                  <tr class="menu-item" height="30px">
                    <td><img  width="30px" src="images/qlnd.png"/><a href="admin.php?page=qlhd">Quản Lý HÓA ĐƠN</a></td>
                </tr>
                
                   <tr class="menu-item" height="30px">
                    <td><img  width="30px" src="images/qlnd.png"/> <a href="admin.php?page=qldh">Quản Lý MÁY TÍNH</a></td>
                </tr>
                
                 <tr class="menu-item" height="30px">
                    <td><img  width="30px" src="images/qlnd.png"/> <a href="admin.php?page=qlkh">Quản Lý KHÁCH HÀNG</a></td>
                </tr>
            </table>
             <table width="250px" class="left-menu" border="0px" cellpadding="0px" cellspacing="0px">
            	<tr class="bg-leftbar" height="36px">
                	<td>thông tin đăng nhập</td>
                </tr>
                <tr height="30px">
                	<td id="user-info">Xin chào <b><?php echo $_SESSION["user"]?></b>! Người Quản Trị Hệ Thống.</td>
                </tr>
                <tr height="30px">
                	<td id="logout" align="right"><a href="dangxuat.php">đăng xuất</a></td>
                </tr>
            </table>
           
           
        </td>
            
  
        <td align="right">
                        <?php
           error_reporting(E_ALL & ~E_NOTICE & ~E_DEPRECATED);
		    switch($_GET["page"]){
			case "thongtintk": include_once("thongtin.php");
			break;
			case "qlnv": include_once("qlnv.php");
			break;
			case "themnv": include_once("themnv.php");
			break;
			case "suaNV": include_once("suaNV.php");
			break;
			case "xoaNV": include_once("xoaNV.php");
			break;
			
			case "qldh": include_once("qlmt.php");
			break;
			case "themDH": include_once("themMT.php");
			break;
			case "suaDH": include_once("suaMT.php");
			break;
			case "suaDH": include_once("suaMT.php");
			break;
			
	        
			
			case "qlnsx": include_once("qlnsx.php");
			break;
			case "themNSX": include_once("themNSX.php");
			break;
			case "suaNSX": include_once("suaNSX.php");
			break;
			case "xoaNSX": include_once("xoaNSX.php");
			break;
			 
          
			case "qltk": include_once("qltk.php");
			break;
			case "sua": include_once("sua.php");
			break;
			case "xoa": include_once("xoa.php");
			break;
			case "them": include_once("them.php");
			break;
			
			
			case "qlhd": include_once("qlhd.php");
			break;
			case "suaHD": include_once("suaHD.php");
			break;
			case "themHD": include_once("themHD.php");
			break;
			case "xoaHD": include_once("xoaHD.php");
			break;
			
			
			
			
			case "qlkh": include_once("qlkh.php");
			break;
			case "themKH": include_once("themKH.php");
			break;
			case "suaKH": include_once("suaKH.php");
			break;
			case "xoaKH": include_once("xoaKH.php");
			break;
			
			
			
		/*	case "tknv": include_once("tknv.php");
			break;
			default: include_once("thongtinad.php");*/
			}
			?>
        </td>
    </tr>
  </table>
 
</div>           
<?php
}
else{
	header("location:login.php");
}
?>

</body>
</html>
