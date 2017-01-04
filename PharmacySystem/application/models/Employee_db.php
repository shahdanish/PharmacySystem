<?php
class Employee_db extends CI_Model {




	function LoadUser()
	{
		$query="select * from tbluserprofile JOIN tblusers ON tbluserprofile.UserID=tblusers.UserID where tblusers.IsActive=1";
		return $this->db->query($query)->result();
	}
	function AddUser($UserId,$FirstName,$CNIC,$MobileNo,$Address,$Salary)
	{
		$query="";
		if($UserId==0) {
			$query1 = "Insert into tblusers (UserName,Password,UserRole,IsActive) values ('".$FirstName."','123','3',1)";
			$this->db->query($query1);
			$query1="SELECT LAST_INSERT_ID() As UserID"; 
			$UserIDArray =  $this->db->query($query1)->result();
			$query="Insert into tblUserProfile(UserId,FirstName,CNIC,MobileNo,Address,Salary) values ('".$UserIDArray[0]->UserID."','".$FirstName."','".$CNIC."','".$MobileNo."','".$Address."','".$Salary."')";
		}
		else {
			$query="Update tblUserProfile set FirstName = '".$FirstName."' ,CNIC = '".$CNIC."',MobileNo = '".$MobileNo."',Address = '".$Address."',Salary = '".$Salary."' Where UserID = ".$UserId;
		}
		return $this->db->query($query);
	}
	function DeleteUser($UserID)
	{
		$query="Update tblusers set IsActive = 0 Where UserID = ".$UserID;
		return $this->db->query($query);
	}
}
