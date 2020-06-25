<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>
<?php
if (!isset($_REQUEST["stt"]))
	die("no ID");
$stt = $_REQUEST["stt"];
require("tienich/ketnoi_csdl.php");
$sql = "SELECT * FROM lien_he WHERE id = $stt";
$pdo_stm = $pdo_conn->prepare($sql);
$ks = $pdo_stm->execute();
$row = $pdo_stm->fetch();
$ten = $row["ten"];
$email = $row["email"];
$sdt = $row["sdt"];
$mess = $row["tinnhan"];
$date = $row["thoigian"];
$trangthai = $row["trangthai"];
?>

<body>
<h2 align="center"> Sửa trạng thái liên hệ </h2>
<form method="post" action="?module=admin&func=xu_ly_sua">
<table width="321" height="481" border="0" style="margin:0 auto">
  <tr>
    <td width="94" height="35" scope="row">Họ tên</td>
    <td width="217"><input type="text" name="txt_ten" id="txt_ten" value="<?=$ten?>" readonly></td>
  </tr>
  <tr>
    <td height="35" scope="row">Email</td>
    <td><input name="txt_email" type="text" id="txt_email" value="<?=$email?>" readonly></td>
  </tr>
  <tr>
    <td height="35" scope="row">Số điện thoại</td>
    <td><input name="txt_sdt" type="text" id="txt_sdt" value="<?=$sdt?>" readonly></td>
  </tr>
  <tr>
    <td height="165" scope="row">Tin nhắn</td>
    <td><textarea name="txt_mess" readonly id="txt_mess" style="height:150px"><?=$mess?></textarea></td>
  </tr>
  <tr>
    <td height="41" scope="row">Thời gian gửi</td>
    <td><input name="txt_time" type="text" id="txt_time" value="<?=$date?>" readonly></td>
  </tr>
  <tr>
    <td height="72" scope="row">Trạng thái</td>
    <td><p>
      <label>
        <input type="radio" name="r_trangthai" value="0" id="r_trangthai_0"  <?=($trangthai==0?"checked":"")?>>
        Chưa liên hệ</label>
      <br>
      <label>
        <input type="radio" name="r_trangthai" value="1" id="r_trangthai_1"  <?=($trangthai==1?"checked":"")?>>
        Đã liên hệ</label>
      <br>
    </p></td>
  </tr>
  <tr>
    <td height="21" scope="row">&nbsp;</td>
    <td><input type="hidden" name="txt_id" id="txt_id" value="<?=$stt?>"></td>
  </tr>
  <tr>
    <td height="59" colspan="2" scope="row"><input type="submit" name="b_sua" id="b_sua" value="Sửa trạng thái" style="margin-left:110px"></td>
    </tr>
</table>

</form>
</body>
</html>