<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>
<?php
require("tienich/ketnoi_csdl.php");
$sql = "SELECT * FROM lien_he";
$pdo_stm = $pdo_conn->prepare($sql);
$ketqua = $pdo_stm->execute();

?>
<body>
<h2 align="center"> Danh sách đăng kí liên hệ </h2>
<table width="100%" border="1">
  <tr style="background-color:#333;color:#FFF">
    <td width="4%" height="45" scope="row">STT</td>
    <td width="10%">Họ Tên</td>
    <td width="15%">Email</td>
    <td width="11%">Số điện thoại</td>
    <td width="16%">Tin nhắn</td>
    <td width="14%">Thời gian gửi</td>
    <td width="12%">Trang thái </td>
    <td width="18%">Thao tác</td>
  </tr>
  <?php
   while($row = $pdo_stm->fetch(PDO::FETCH_ASSOC))
   {
	 $stt = $row["id"] ; 
	 $ten = $row["ten"] ; 
	 $email = $row["email"] ; 
	 $sdt = $row["sdt"] ; 
	 $tin = $row["tinnhan"] ; 
	 $trangthai = $row["trangthai"] ; 
	 $thoigian = $row["thoigian"] ; 
  ?>
  <tr>
    <td scope="row"><?=$stt?></td>
    <td><?=$ten?></td>
    <td><?=$email?></td>
    <td><?=$sdt?></td>
    <td><?=$tin?></td>
    <td><?=$thoigian?></td>
    <td><?=($trangthai==1)?"Đã liên hệ":"Chưa liên hệ"?></td>
    <td><a href="?module=admin&func=sua&stt=<?=$stt?>"> Sửa trạng thái liên hệ</a> - <a href="?module=admin&func=xoa_lien_he&stt=<?=$stt?>" onclick="return confirm('Bạn có muốn xoá liên hệ này ?')">Xoá</a></td>
  </tr>
 <?php
   }
?>
</table>

</body>
</html>