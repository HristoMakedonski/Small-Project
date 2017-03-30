<?php

	session_start();
		
	require_once './db.php';

	$username = $_POST['username'];
	$password = $_POST['password'];
	$sql = "SELECT * FROM `users` WHERE name='$username' AND password='$password'";
	
        $result =  mysqli_query($connection,$sql );
        
        
	
	if ($result == false) {
            echo '<a href="login.php">Error: cannot execute query</a>';
		exit;
	}
	
	$sql = ("SELECT * FROM `users` WHERE name='$username' AND password='$password'");
        $query=  mysqli_query($connection, $sql);
        $num_rows=$query->num_rows;
        
      
        
     
        
        if ($num_rows == 0) 
                {
        echo '..sfsddsfdsfsdf' ; die;		

	}
        else
            {
                        
            $_SESSION['login'] = "OK";
		$_SESSION['username'] = $username;
		header('Location: private.php');
		close($link);
                die();
               
	}       
        
	
        close($connection);
	
	header('Location: login.php');
?>

