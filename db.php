<?php
	
$connection=  mysqli_connect("localhost", "root", "");
if(!$connection){
    die("error with database").  mysqli_error();
}$select_db=  mysqli_select_db($connection, "project");
if(!$select_db){
    die("error with databese");
}


?> 


