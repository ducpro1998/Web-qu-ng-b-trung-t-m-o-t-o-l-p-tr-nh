<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>
<?php
session_start();
require("tienich/kiem_tra_login.php");
require("models/clsLienhe.php");
?>
<body>
<div id="content_admin">
<table id="table_content_admin" width="100%" border="1">
  <tr>
    <td id="table_content_admin_name" width="22%" height="101" scope="row">Username: <?=$_SESSION["username"]?><br>
    <a href="?module=logout"> Đăng xuất </a>
    </td>
        <td width="78%" rowspan="2">
        	<?php
				$func = "";
				if(isset($_REQUEST["func"]))
				{
					$func = $_REQUEST["func"];
				}
				switch ($func)
				{
					case "list_lien_he":
					require("views/admin_list_lien_he.php");
					break;
					
					case "sua":
					require("views/admin_sua.php");
					break;
					
					case "xu_ly_sua":
					require("controllers/admin_xu_ly_sua.php");
					break;
					
					case "xoa_lien_he":
					require("controllers/admin_xoa_lien_he.php");
					break;
					
					default:
					echo("<h2 align='center'>Chào mừng đến với trang quản lý.</h2>");
				}
			?>
        </td>
  </tr>
  <tr>
    <td height="324" scope="row" id="table_content_admin_button">
    <input type="button" name="b_admin_func1" id="b_admin_func1" value="Danh sách đăng kí liên hệ" onClick="window.location.href='?module=admin&func=list_lien_he'">
    </td>
    </tr>
  </table>
</div>
</body>
</html>