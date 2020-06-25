<?php
	$lop="";
	 if(isset($_REQUEST["lop"]))
		{
		$lop = $_REQUEST["lop"];
		}
	switch($lop)
	{
		case "php":
		require("views/khoa_hoc_php.php");
		break;
		
		case "java":
		require("views/khoa_hoc_java.php");
		break;
		
		default:
		require("views/khoa_hoc.php");
	}
?>