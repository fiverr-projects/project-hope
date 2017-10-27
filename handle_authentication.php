<?php
	//handle signup
	$password = $_POST['password'];
	$hashed_password = password_hash($password, PASSWORD_DEFAULT);
	//insert (username, password) into database
	//redirect to login.php with message signup successfull


	//handle login
	if(password_verify($password, $hashed_password)) {
    	// If the password inputs matched the hashed password in the database
    	// Do something, you know... log them in (redirect to dashboard.php).
	} 

?>