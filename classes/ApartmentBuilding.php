<?php
/*
 * Apartment Buildings class
 */
class ApartmentBuildings {

	public $buildingCode;
	public $numberOfRooms;
	public $buildingName;
	public $location;

	public function addAptBuilding() {
		require_once "dbconn.inc.php";
		$query="INSERT INTO aptbuilding(aptBuildingCode,numberOfRooms,buildingName,location) VALUES(?,?,?,?)";
		$VALUES=array($this->buildingCode,$this->numberOfRooms,$this->buildingName,$this->location);
		$stmt=$conn->prepare($query);
		$stmt->execute($VALUES);
		$check=$stmt->rowCount();
		
		if($check==1){
			echo json_encode(array("resp"=>"Apartment added"));
		}else{
			$resp=array("resp"=>"error adding apartment");
			echo json_encode($resp);
		}
		
		
	}
	
	public function editAptBuilding(){
		require_once 'dbconn.inc.php';
		$query="SELECT * FROM aptbuilding WHERE buildingCode=?";
		$stmt=$conn->prepare($query);
		$stmt->execute(array($this->buildingCode));
		
		echo json_encode($stmt->fetchAll(PDO::FETCH_ASSOC));
	}
	
	public function updateAptBuilding(){
		require_once "dbconn.inc.php";
		$query="UPDATE aptbuilding SET aptBuildingCode=?, numberOfRooms=?,buildingName=?, location=?";
		$stmt=$conn->prepare($query);
		$stmt->execute(array($this->buildingCode,$this->numberOfRooms,$this->buildingName,$this->location));
		$check=$stmt->rowCount();
		$feedback='';
		if($check==1){
			$feedback=array("resp"=>"Apartment Building has been updated successfully");
		}else{
			$feedback=array("resp"=>"There was an error updating, kindly try again");
		}
	}
	
	public function deleteaptBuillding(){
		require_once 'dbconn.inc.php';
		$query="DELETE * FROM aptBuilding WHERE buildingCode=?";
		$stmt->prepare($query);
		$stmt->execute(array($this->buildingCode));
		$check=$stmt->rowCount();
		$feedback='';
		if($check==1){
			$feedback=array("resp"=>"Building has been deleted");
		}else{
			$feedback=array("resp"=>"An error occured deleting building, Please try again");
		}
		echo json_encode($feedback);
	}
	
	public function allAptBuildings(){
		$query="SELECT * FROM aptBuildings";
		$stmt->prepare($query);
		$stmt->execute();
		
		echo json_encode($stmt->fetchAll(PDO::FETCH_ASSOC));
	}

}
?>