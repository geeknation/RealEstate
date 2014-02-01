<?php
/*
 Tennant Class
 */

class Tenant {
	//class variables
	public $tenantCode;
	public $firstName;
	public $secondName;
	public $idNumber;
	public $dob;
	public $occupation;
	public $company;
	public $phoneNumber;
	public $email;
	public $username;
	public $password;

	public function payRent($tCode, $amount) {
		
	}

	public function addTenant() {
		require "dbconn.inc.php";
		
		$query = "INSERT INTO tenants(userCode,firstName,secondName,idNumber,dob,occupation,company,phoneNumber,email) VALUES(?,?,?,?,?,?,?,?,?)";
		$values = array($this->tenantCode, $this -> firstName, $this -> secondName, $this -> idNumber, $this -> dob, $this -> occupation, $this -> company, $this -> phoneNumber, $this -> email);
		
		$query1 = "INSERT INTO users(userCode,username,password) VALUES(?,?,?)";
		$values1 = array($this -> tenantCode, $this -> username, md5($this -> password));

		$stmt1 = $conn -> prepare($query);
		$stmt2=$conn->prepare($query1);

		$stmt1 -> execute($values);
		$stmt2->execute($values1);

		$c1 = $stmt1 -> rowCount();
		$c2=$stmt2->rowCount();

		if ($c1==1 and $c2==1) {
			echo "added";
		} else {
			echo "error";
		}
	}
	
	public function editTenant() {
		require "dbconn.inc.php";
		$query="SELECT * FROM tenants WHERE userCode=?";
		$stmt=$conn->prepare($query);
		$stmt->execute(array($this->tenantCode));
		$data=$stmt->fetchAll(PDO::FETCH_ASSOC);
		echo json_encode($data);
	}
	public function updateTenant(){
		require "dbconn.inc.php";
		$query="UPDATE tenants SET tenantCode=?,firstName=?,secondName=?,idNumber=?,dob=?,occupation=?,company=?,phoneNumber=?,email=?";
		$data=array($this->tenantCode,$this->firstName,$this->secondName,$this->idNumber,$this->dob,$this->occupation,$this->company,$this->phoneNumber,$this->email);
		$stmt=$conn->prepare($query);
		$stmt->execute($data);
		$check=$stmt->rowCount();
		
		if($check==1){
			$resp=array("resp"=>"updated");
			echo json_encode($resp);
		}else{
			$resp=array("resp"=>"error updating");
			echo json_encode($resp);
		}
	}

	public function deleteTenant() {
		require "dbconn.inc.php";
		$query="DELETE * FROM tenant WHERE userCode=?";
		$stmt=$conn->prepare($query);
		$stmt->execute(array($this->tenantCode));
		$check=$stmt->rowCount();
		if($check==1){
			echo json_encode(array("resp"=>"tenant deleted"));
		}else{
			$resp=array("resp"=>"error deleting");
			echo json_encode($resp);
		}
	}

	public function viewTenants() {
		require "dbconn.inc.php";
		$query="SELECT * FROM tenants";
		$stmt=$conn->prepare($query);
		$stmt->execute();
		$data=$stmt->fetchAll(PDO::FETCH_ASSOC);
		echo json_encode($data);
	}
	function generateRandomString($length = 10) {
		$characters = '0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ';
		$randomString = '';
		for ($i = 0; $i < $length; $i++) {
			$randomString .= $characters[rand(0, strlen($characters) - 1)];
		}
		return $randomString;
	}

}
?>

