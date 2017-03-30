<?php
	session_start();
	require_once "./src/header.php";
	require_once "./src/mainmenu.php";
	
	require_once './db.php';
	echo "<fieldset><legend>Users</legend>";
	if(!isset($_POST['name']) || empty($_POST['name'])) {
		echo "<p>Empty search is not allowed</p>";
	}
	else {
		$name = $_POST['name'];
	
		$sql = "SELECT id, name, date_of_birth FROM users WHERE name = '$name';";
		$result = $connection->query($sql);
                
                
                $num_rows = $result->num_rows;
		if ($result == false) {
			echo '<p>Error: cannot execute query</p>';
		}
		else {
			if($num_rows >= 1) {
				while($row = mysqli_fetch_array($result)) {
					echo "<p>";
					echo "<b>Name:</b> " .$row["name"] . "</a><br />";
					echo "<b>Date of birth:</b> " . $row["date_of_birth"];
					echo "</p>";
				}
			}
			else {
				echo '<p>No user found</p>';      
                               ;
			}
		}
	}
	
	
	
	echo "</fieldset>";
	
	



