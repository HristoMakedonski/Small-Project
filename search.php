<?php
	session_start();
	
	require_once './src/header.php';
	require_once './src/mainmenu.php';
?>
	<form method="post" action="search_result.php">
	<fieldset>
	<legend>Search</legend>
	<p><label for="name">Name:</label> <input type="text" name="name" id="name" /></p>
	<p class="center"><input type="submit" value="Search" /></p>
	</fieldset>
	</form>
<?php	
	require_once './src/footer.php';
?>