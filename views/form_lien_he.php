<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<p id="link"> <a href="?module=trang_chu"> Trang Chủ </a> > <a href="?module=lien_he"> Liên Hệ </a> </p>
<div id="lien_he">
<h1 id="line_1">Đăng ký nhận tư vấn miễn phí </h1>
<h4 id="line_2"> Để nhận thêm thông tin tư vấn, bạn vui lòng điền thông tin vào form bên dưới, chúng tôi sẽ liên hệ với bạn sớm nhất </h4>
<br />
<form method="post" action="?module=lien_he&cmd=them">
<table width="400" height="345" border="0" style="margin:0px auto">
  <tr>
    <td width="106" scope="row">Họ &amp; tên</td>
    <td width="287"><input type="text" name="txt_name" id="txt_name" /></td>
  </tr>
  <tr>
    <td scope="row">Email</td>
    <td><input type="email" name="txt_email" id="txt_email" /></td>
  </tr>
  <tr>
    <td scope="row">Số điện thoại</td>
    <td><input type="number" name="txt_sdt" id="txt_sdt" /></td>
  </tr>
  <tr>
    <td height="169" scope="row">Tin nhắn</td>
    <td><textarea name="txt_mess" id="txt_mess" cols="45" rows="5"></textarea></td>
  </tr>
  <tr>
    <td height="48" colspan="2" scope="row" style="text-align:right">
    <input type="radio" value="0" checked="checked" name="r_trangthai" style="display:none" />
    <input type="submit" name="btn_send" id="btn_send" value="Gửi"/>
    </td>
    </tr>
</table>

</form>
</div>
</body>
</html>