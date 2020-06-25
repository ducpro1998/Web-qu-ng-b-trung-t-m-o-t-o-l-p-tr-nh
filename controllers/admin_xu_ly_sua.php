<?php
if(!isset($_REQUEST["b_sua"]))
{
	header("location:?module=admin&func=list_lien_he");	
}
$id = $_REQUEST["txt_id"];
$ten = $_REQUEST["txt_ten"];
$email = $_REQUEST["txt_email"];
$sdt = $_REQUEST["txt_sdt"];
$mess = $_REQUEST["txt_mess"];
$date = $_REQUEST["txt_time"];

if (isset($_REQUEST["r_trangthai"]))
{
	$trangthai = $_REQUEST["r_trangthai"];
}
$sua = new clsLienhe();
$sua->array_data_binding($id,$ten,$email,$sdt,$mess,$date,$trangthai);
$res = $sua->sua_lien_he();
if ($res<0)
{
	die("FAILED");
}
else
{
	header("location:?module=admin&func=list_lien_he");
}
?>