<?php
if(!isset($_REQUEST["btn_send"]))
{
	header("location:?module=admin&func=list_lien_he");
}
$ten = $_REQUEST["txt_name"];
$email = $_REQUEST["txt_email"];
$sdt = $_REQUEST["txt_sdt"];
$mess = $_REQUEST["txt_mess"];
$date = date("Y-m-d H:i:s");
if (isset($_REQUEST["r_trangthai"]))
{
	$trangthai = $_REQUEST["r_trangthai"];
}
$add = new clsLienhe();
	$add-> array_data_binding(NULL,$ten,$email,$sdt,$mess,$date,$trangthai);
	$result = $add->them_lien_he();
	if ($result<0)
	{
		echo "$result <br>";
		die("Failed
		<a href='?module=trang_chu'>Return </a>");
	}
	else
	 {
		 header("location:?module=thongbao_thanhcong");
	 }
?>