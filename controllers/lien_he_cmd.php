<?php
require_once("models/clsLienhe.php");
 	$cmd="";
	if (isset($_REQUEST["cmd"]))
		{
		$cmd = $_REQUEST["cmd"];
		}
	switch ($cmd)
	{
		case "them":
		require("controllers/xu_ly_them_lienhe.php");
		break;
		
		default:
		require ("views/form_lien_he.php");
	}
?>