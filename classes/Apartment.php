<?php
/*
 * Apartment class
 */
class Apartment {

	public $aptCode;
	public $buildingCode;
	public $tenantCode;
	public $apartmentNumber;
	public $rentAmount;

	public function addApartment() {
		require_once "dbconn.inc.php";
		$query = "INSERT INTO apartments(aptCode,aptBuildingCode,tenantCode,aptNumber,rentAmount) VALUES(?,?,?,?,?)";
		$stmt = $conn -> prepare($query);
		$stmt -> execute(array($this -> aptCode, $this -> buildingCode, $this -> tenantCode, $this -> apartmentNumber, $this -> rentAmount));
		$chk = $stmt -> rowCount();

		if ($chk == 1) {
			echo json_encode(array("resp" => "Apartment has been added"));
		} else {
			echo json_encode(array("resp" => "An error occured,Please try again."));
		}
	}

	public function editApartment() {
		require_once "dbconn.inc.php";
		$query = "SELECT * FROM apartments WHERE aptCode=?";
		$stmt = $conn -> prepare($query);
		$stmt -> execute(array($this -> aptCode));
		$data = $stmt -> fetchAll();
		echo json_encode($data);

	}

	public function deleteApartment() {
		require_once "dbconn.inc.php";
		$query = "DELETE * FROM apartments WHERE aptCode=?";
		$stmt = $conn -> prepare($query);
		$stmt -> execute(array($this -> aptCode));

		$chk = $stmt -> rowCount();
		if ($chk == 1) {
			echo json_encode(array("resp" => "Apartment has been deleted"));
		} else {
			echo json_encode(array("resp" => "An error occured deleting, Please try again."));
		}
	}

}
?>