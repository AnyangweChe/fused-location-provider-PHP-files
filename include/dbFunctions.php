<?php
     
	class DBFunction {
    private $conn;
 
    // constructor
    function __construct() {
        require_once 'dbConnect.php';
        // connecting to database
        $db = new DBConnect();
        $this->conn = $db->connect();
    }
	
	/**
     * Storing user location
     * returns true for sucessfull update
	 * false for unsucessfull update
     */
	public function addLocation($uniqueId, $latitude, $longitude) {
		 
		$stmt = $this->conn->prepare("INSERT INTO realtime(uniqueId, latitude, longitude, dateCreated) VALUES(?, ?, ?, NOW())");
        $stmt->bind_param("sss", $uniqueId, $latitude, $longitude);
        $result = $stmt->execute();
        $stmt->close();
		
		// check for successful store
		if($result === true){
			return true;
        }else{
			return false;
        }
	}
}
	 
?>
