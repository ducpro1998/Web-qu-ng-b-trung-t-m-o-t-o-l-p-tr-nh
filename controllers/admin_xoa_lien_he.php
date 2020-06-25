<?php
if(isset($_REQUEST["stt"]))
	{
		$stt = $_REQUEST["stt"];
		$del = new clsLienhe();
		$result = $del->xoa_lien_he($stt);
		if ($result < 0 )
			{
				die("Failed
				<a href='?module=admin&func=list_lien_he'>Return </a>");
			}
		else
			{
				echo "Contact has been deleted <br>";
				echo " <a href='?module=admin&func=list_lien_he'>Return </a>";
			}
		
	}
else 
	header("location:?module=admin");
?>