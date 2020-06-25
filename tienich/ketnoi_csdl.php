<?php
try
		{
			$pdo_conn = new PDO("mysql:host=localhost;dbname=ttdt;charset=utf8","root","");	
		}
		catch(Exception $e)
		{
			echo "Lỗi kết nối tới cơ sử dữ liệu.".$e->getMessage();
			die();
		}
?>