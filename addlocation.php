<?php
    require_once 'include/dbFunctions.php';
	$db = new DBFunction();
	 
	// json response array
	$response = array();
	if (isset($_POST['uniqueId']) && isset($_POST['latitude']) && isset($_POST['longitude'])) {
		
		// receiving the post params
		$uniqueId = $_POST['uniqueId'];
		$latitude = $_POST['latitude'];
		$longitude = $_POST['longitude'];
		
		// add new position to db
		$location = $db->addLocation($uniqueId, $latitude, $longitude);
		
		if ($location) {
			$response["error"] = true;
			echo json_encode($response);
		}else{
			$response["error"] = false;
			echo json_encode($response);
		}
	}
	 
?>
