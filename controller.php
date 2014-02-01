<?php
/*
 * the controller class
*/
include "classes/Tenant.php";
if(isset($_POST['flag'])){
		
	$flag=$_POST['flag'];
	
	if($flag=="addTenant"){
		
		$tenant=new Tenant();
		
		$fname=$_POST['firstName'];
		$sname=$_POST['secondName'];
		$idnumber=$_POST['idnumber'];
		$dob=$_POST['dob'];
		$occupation=$_POST['occupation'];
		$company=$_POST['company'];
		$pnumber=$_POST['phonenumber'];
		$email=$_POST['email'];
		$username=$_POST['username'];
		$password=$_POST['password'];
		
		
		$tenant->tenantCode=$tenant->generateRandomString();
		$tenant->firstName=$fname;
		$tenant->secondName=$sname;
		$tenant->idNumber=$idnumber;
		$tenant->dob=$dob;
		$tenant->occupation=$occupation;
		$tenant->company=$company;
		$tenant->phoneNumber=$pnumber;
		$tenant->email=$email;
		$tenant->username=$username;
		$tenant->password=$password;
		
		$tenant->addTenant();
	}
	
	if($flag==""){
		
	}
}

?>