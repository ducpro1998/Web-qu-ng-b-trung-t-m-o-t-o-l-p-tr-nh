<?php
require("clsDatabase.php");
class clsLienhe
{
	var $arr_data = array();
	
	public function array_data_binding($id,$ten,$email,$sdt,$mes,$thoigian,$trangthai)// gán thông tin vào mảng rỗng
	{
		$this->arr_data[0]= $id;
		$this->arr_data[1]= $ten;
		$this->arr_data[2]= $email;
		$this->arr_data[3]= $sdt;
		$this->arr_data[4]= $mes;
		$this->arr_data[5]= $thoigian;
		$this->arr_data[6]= $trangthai;		
	}
	
	
	public function them_lien_he()
		{
			$db = new clsDatabase();
			$sql_string = "INSERT INTO lien_he VALUES(?,?,?,?,?,?,?)";
			$data_arr = $this->arr_data;
			$result = $db->SQL_Execution($sql_string,$data_arr);
			return $result;
		}
		
		public function xoa_lien_he($id)
	{
		$db = new clsDatabase();
		$sql = "DELETE FROM lien_he WHERE id=?";
		$data_arr = array($id);
		$res = $db->SQL_Execution($sql,$data_arr);
		return $res;
	}
		
		public function sua_lien_he()
		{
			$db = new clsDatabase();
			$str_sql = "UPDATE lien_he 
			SET ten=?, email=?, sdt=?, tinnhan=?, thoigian=?, trangthai=? WHERE id=?";
			$mang_giatri = array($this->arr_data[1],$this->arr_data[2],
		$this->arr_data[3],$this->arr_data[4],$this->arr_data[5], $this->arr_data[6],$this->arr_data[0]);
		$ketqua = $db->SQL_Execution($str_sql,$mang_giatri);
		return $ketqua;
		}
}
?>