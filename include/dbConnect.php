<?php
     define('HOST','localhost');
     define('USER','root');
     define('PASS','');
     define('DB','realtimedb');
     
	class DBConnect {
    private $conn;
 
    // Connecting to database
    public function connect() {
         
        // Connecting to mysql database
        $this->conn = mysqli_connect(HOST,USER,PASS,DB) or die('Unable to Connect');
         
        // return database handler
        return $this->conn;
    }
}
	/*
	CREATE TABLE `realtimedb`.`realtime` (
		`id` INT NOT NULL AUTO_INCREMENT PRIMARY KEY ,
		`uniqueId` VARCHAR( 20 ) NOT NULL ,
		`latitude` VARCHAR( 20 ) NOT NULL ,
		`longitude` VARCHAR( 20 ) NOT NULL ,
		`dateCreated` DATETIME NOT NULL
	) ENGINE = INNODB;
*/
?>
