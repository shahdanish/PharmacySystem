<?php
class Employee_db extends CI_Model {




	function LoadUser()
	{
		$query="select * from tbluserprofile JOIN tblusers ON tbluserprofile.UserID=tblusers.UserID where tblusers.IsActive=1";
		return $this->db->query($query)->result();
	}
	function AddUser($UserId,$FirstName,$LastName,$Address)
	{
		$query="";
		if($UserId==0) {
			$query1 = "Insert into tblusers (UserName,Password,UserRole,IsActive) values ('".$FirstName."','123','3',1)";
			$this->db->query($query1);
			$query1="SELECT LAST_INSERT_ID() As UserID"; 
			$UserIDArray =  $this->db->query($query1)->result();
			$query="Insert into tblUserProfile(UserId,FirstName,LastName,Address) values ('".$UserIDArray[0]->UserID."','".$FirstName."','".$LastName."','".$Address."')";
		}
		else {
			$query="Update tblUserProfile set FirstName = '".$FirstName."' ,LastName = '".$LastName."',Address = '".$Address."' Where UserID = ".$UserId;
		}
		return $this->db->query($query);
	}
	function DeleteUser($UserID)
	{
		$query="Update tblusers set IsActive = 0 Where UserID = ".$UserID;
		return $this->db->query($query);
	}
}
