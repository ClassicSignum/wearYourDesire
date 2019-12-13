<?php

	


	function getConnection(){
		global $server, $user, $password, $database;
		$conn = mysqli_connect('localhost', 'root','', 'wear_your_desire');		 

		return $conn;
	}

?>