<?php 

	// $default variable with empty value
	$name = ' ';
	$email = ' ';

	// $_SERVER -> bien global, array
	

	if ($_SERVER["REQUEST_METHOD"] == "GET") {
		// echo "<pre>";
		// var_dump($_GET);
		// echo "</pre>";
		if(isset($_GET['name123'])) {
			$name = $_GET['name123'];
		}
		if(isset($_GET['email123'])) {
			$email = $_GET['email123'];
		}
	}

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Welcome</title>
</head>
<body>
 	<h1>Welcome</h1>
 	<p> Name: <?php echo $name; ?> </p>
 	<p> Email: <?php echo $email; ?></p>
</body>
</html>
