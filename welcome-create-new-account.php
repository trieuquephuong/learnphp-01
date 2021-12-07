<?php 

	// $default variable with empty value
	$name = ' ';
	$email = ' ';
	$password = ' ';

	// $_SERVER -> bien global, array
	

	if ($_SERVER["REQUEST_METHOD"] == "GET") {
		// echo "<pre>";
		// var_dump($_GET);
		// echo "</pre>";
		if(isset($_GET['your-email'])) {
			$email = $_GET['your-email'];
		}
		if(isset($_GET['your-password'])) {
			$password = $_GET['your-password'];
		}
	}

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Welcome</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<div class="return">
		<img src="github-icon.png"><br>
	 	<h1>Welcome</h1><br>
	 	<p> Name: <?php echo $name; ?> </p><br>
	 	<p> Email: <?php echo $email; ?> </p><br>
    </div>
</body>
</html>
