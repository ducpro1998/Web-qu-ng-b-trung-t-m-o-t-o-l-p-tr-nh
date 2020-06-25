<?php
if(isset($_SESSION["logined"])==FALSE ||$_SESSION["logined"]=="")
{
	echo "<H3> Bạn chưa đăng nhập</H3>";
	echo "<a href='?module=login'> Mời đăng nhập </a>";
	die();
}

?>