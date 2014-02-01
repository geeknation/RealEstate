<?php
/*
 * database connector
*/

global $conn;
try{
$conn=new PDO("mysql:host=localhost;dbname=realestate","root","");

	$conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
	
}catch(PDOException $E){
	$E->getMessage();
}

?>