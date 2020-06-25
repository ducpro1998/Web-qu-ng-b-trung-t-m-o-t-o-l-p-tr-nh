<?php
require("ketnoi_csdl.php");
if(!isset($_REQUEST["b_login"]))
	header("location:?module=trang_chu");
$username = $_REQUEST["t_user"];
$password = $_REQUEST["t_pass"];
$sql= "SELECT * FROM account WHERE username=? AND password=?";
$pdo_stm = $pdo_conn->prepare($sql);
$pdo_stm->bindParam(1,$username);
$pdo_stm->bindParam(2,$password);
$ketqua=$pdo_stm->execute();
if($ketqua==false)
	die("Đăng nhập lỗi");
$n = $pdo_stm->rowCount();
session_start();
if ($n>0)//dăng nhập thành công
{
	$_SESSION["logined"]="ok";
	$row = $pdo_stm->fetch();
	$_SESSION["username"] = $row["username"];
	$_SESSION["password"] = $row["password"];
	echo " Đăng nhập thành công <br>";
	echo"<a href='?module=admin' > Trang quản lý </a>";
}
else
{
	$_SESSION["logined"]="";
	echo "Đăng nhập thất bại <br>";
	echo"<a href='?module=login' > Đăng nhập lại </a>";
}

?>