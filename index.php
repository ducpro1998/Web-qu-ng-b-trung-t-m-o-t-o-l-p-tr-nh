<!doctype html>
<html>
<head>
<meta http-equiv="Content-Type" content="width=device-width, initial-scale=1.0" />
<title>Trung tâm đào tạo lập trình</title>
<link rel="stylesheet" type="text/css" href="CSS/index.css" />
<link rel="stylesheet" type="text/css" href="CSS/trang_chu.css" />
<link rel="stylesheet" type="text/css" href="CSS/khoa_hoc.css" />
<link rel="stylesheet" type="text/css" href="CSS/khoa_hoc_php.css" />
<link rel="stylesheet" type="text/css" href="CSS/khoa_hoc_java.css" />
<link rel="stylesheet" type="text/css" href="CSS/lien_he.css"/>
<link rel="stylesheet" type="text/css" href="CSS/admin.css" />
<link rel="stylesheet" type="text/css" href="CSS/admin_login.css"/>
<link rel="stylesheet" type="text/css" href="CSS/thongbao_thanhcong.css" />

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>

<body>
<div id="menu">
<table width="100%" height="120px" border="0">
  <tr>
    <th width="356" scope="row"><img src="picture/unnamed.jpg" width="349" height="115" /> </th>
    <td width="404"></td>
    <td width="131"><a href="?module=trang_chu">Trang chủ </a></td>
    <td width="177"><a href="?module=khoa_hoc">Các khoá học</a></td>
    <td width="166">
    <a href="?module=lien_he">Liên hệ</a>
    </td>
  </tr>
</table>
</div>
<div id="wrapper">
<div id="header"> 
  <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner">
      <div class="item active">
       <a href="#"> <img src="picture/banner.png" style="width:100%;"> </a>
      </div>

      <div class="item">
      <a href="?module=khoa_hoc&lop=java" target="_blank">
        <img src="picture/slide2.jpg" style="width:100%;"></a>
      </div>
    
      <div class="item">
      <a href="?module=khoa_hoc&lop=php" target="_blank">
        <img src="picture/slide3.png" style="width:100%;">
      </div>
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>
<div id="content">
	<?php
		$module="";
		if (isset($_REQUEST["module"]))
			{	
				$module = $_REQUEST["module"];
			}
		switch ($module)
			{
				case "trang_chu":
				require("controllers/trang_chu_cmd.php");
				break;
				
				case "khoa_hoc":
				require ("controllers/khoa_hoc_cmd.php");
				break;
				
				case "lien_he":
				require("controllers/lien_he_cmd.php");
				break;
				
				case "admin":
				require("views/admin.php");
				break;
				
				case "login":
				require("views/admin_login.php");
				break;
				
				case "xu_ly_login":
				require("tienich/xu_ly_login.php");
				break;
				
				case "logout":
				require("tienich/logout.php");
				break;
				
				case "thongbao_thanhcong":
				require("views/thongbao_thanhcong.php");
				break;
				
				default:
				require("controllers/trang_chu_cmd.php");
				break;
			}
	?> 
</div>
<div id="footer">
  <table width="100%" border="0">
    <tr>
      <td width="31%" height="40" scope="row"><h3>Địa chỉ</h3></td>
      <td width="34%"><h3>Danh Mục</h3></td>
      <td width="35%"><h3>Fanpage</h3></td>
    </tr>
    <tr>
      <td height="104" scope="row">
      	<p>Tầng 8 - Time City - Hai Bà Trưng - Hà Nội</p> <br />
        <p> SĐT: 0123456789 </p>
      </td>
      
      <td>
      	  <p><a href="?module=trang_chu">Trang chủ </a> </p> <br />
          <p> <a href="?module=khoa_hoc">Giới thiệu </a> </p> <br />
          <p> <a href="?module=lien_he">Liên hệ </a> </p> <br />
      </td>
      <td>Link Fanpage</td>
    </tr>
  </table>
</div> 
</div>

</body>
</html>