<nav>
<ul id="main_menu">
	<li><a href="register.php" title="Register new user">Register</a></li>
	<li><a href="search.php" title="Users list">Search</a></li>
	<li><a href="login.php" title="Login private area">Login</a></li>
	<?php if(isset($_SESSION['login']) && $_SESSION['login'] == TRUE): 
            ?>
		<li><a href="private.php" title="Private area">Private</a></li>
		<li style="padding-left: 40px">
                <li><p><a href="exit.php">Exit</a></p></li>
        <?php echo $_SESSION['username']; 
        ?>      
	
        <?php endif
        ?>
</ul>
</nav>
