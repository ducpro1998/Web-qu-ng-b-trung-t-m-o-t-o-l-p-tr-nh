<?php
class clsDatabase
{
	var $pdo_conn;
	var $pdo_stm;
	
	public function clsDatabase()
	{
		try
		{
			$this->pdo_conn = new PDO("mysql:host=localhost;dbname=ttdt;charset=utf8","root","");	
		}
		catch(Exception $e)
		{
			echo "Lỗi kết nối tới cơ sử dữ liệu.".$e->getMessage();
			die();
		}
	}
	
	public function SQL_Execution($sql,$data = array())
	{
		$this->pdo_stm = $this->pdo_conn->prepare($sql);
		$result = $this->pdo_stm->execute($data); // Execute sai: 1, Cấu trúc CSDL lỗi. 2. Câu lệnh PHP sai. 3. Gán biến sai từ view sai
		if ($result==false)
			return -1;
		else
			return $this->pdo_stm->rowCount();
	}
}
?>