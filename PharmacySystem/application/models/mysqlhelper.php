<?php

Class mysqlhelper extends CI_Model {


	public function insertpatienttoken($data) {
		$query = 'insert into tbltoken (PatientName,TotalFee,TokenDate,TokenID,GeneratedBy) VALUES ("'.$data["PatientName"].'","'.$data["FeesRecieved"].'", "'. date('Y-m-d H:i:s').'","'.$data["tokenid"].'","'.$data["userrole"].'")';
		$this->db->query($query);
	}

}

?>