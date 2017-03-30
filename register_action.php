<?php 
	session_start();
                require_once './db.php';
        
	
	$email = $_POST['email'];
	$password1 = ($_POST['password1']);
	$password2 = ($_POST['password2']);
	$name = $_POST['name'];
	$date_of_birth = $_POST['date_of_birth'];
	$info = $_POST['info'];
	$nationality = $_POST['nationality'];
        $place_of_birth = $_POST['place_of_birth'];
	
        if ($password1 != $password2) {
                require_once './src/header.php';
		
                require_once './src/mainmenu.php';
                        echo '<p>Error: password does not match. Try again</a>';
                    
                        echo '<p><a href="register.php">Try again</p>';
		require_once './src/footer.php';
		
                
                exit();
	}
       
        $sql = "INSERT INTO users (name, info, date_of_birth, email, password, nationality, place_of_birth) VALUES ('$name', '$info', '$date_of_birth', '$email', '$password1', '$nationality', '$place_of_birth');";
	
        $query=  mysqli_query($connection, $sql);
	
	if ($query == false) {
            require_once './src/header.php';
            require_once './src/mainmenu.php';
		echo '<p>Error: cannot execute query</p>';
		echo '<p><a href="register.php">Try again</a></p>';
		require_once './src/footer.php';
	exit;
	}
	else {
		header('Location: private.php');
	}

	close($connection);
?>