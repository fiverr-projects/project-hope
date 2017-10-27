<?php
// Start the session
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="/hope/css/bootstrap.css">
    <script src="/hope/js/jquery.js"></script>
    <script src="/hope/js/bootstrap.min.js"></script>
    <script src="https://use.fontawesome.com/795dd48394.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans|Roboto" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Lato:300" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Raleway:300" rel="stylesheet"> 
    <link rel="stylesheet" type="text/css" href="/hope/css/index.css">
</head>
<body>
	<?php
		// Set session variables
		$_SESSION["user_name"] = "swapnil";
		// $_SESSION["user_password"] = "encrypted";
		// echo "Session variables are set.";
	?>
</body>
</html>
