<?php
	$cmd="";
	if (isset($_REQUEST["cmd"]))
		{
		$cmd = $_REQUEST["cmd"];
		}
	switch ($cmd)
	{
		default:
		require("views/trang_chu.php");
		
	}
?>