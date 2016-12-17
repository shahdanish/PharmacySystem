<?php

Class mysqlhelper extends CI_Model {


	public function insertpatienttoken($data) {
		$query = 'insert into tbltoken (PatientName,TotalFee,TokenDate,TokenID,GeneratedBy) VALUES ("'.$data["PatientName"].'","'.$data["FeesRecieved"].'", "'. date('Y-m-d H:i:s').'","'.$data["tokenid"].'","'.$data["userrole"].'")';
		$this->db->query($query);
	}
	public function LoadNewTokenID()
	{
		$queryText = 'SELECT (COUNT(*) + 1) TokenID  from tbltoken where Date(TokenDate) = CURDATE()';
		return $this->db->query($queryText)->result();
	}
	public function LoadTests()
	{
		$queryText = 'SELECT *  from tblTests';
		return $this->db->query($queryText)->result();
	}
	public function LoadDoctors()
	{
		$queryText = 'SELECT UserID,UserName from tblUsers where userrole = 1';
		return $this->db->query($queryText)->result();
	}
}

?>