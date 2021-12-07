<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>	
<body>
<section class="create-new-account">
	<div class="container-fluid">
		<div class="row">
			<div class="col-12">
				<img src="github-icon.png">
				<h1>Create New Account</h1>
				<form action="welcome-create-new-account.php" method="get"> <!--method: get -->
					<input type="text" name="your-name" placeholder="Your name"><br>
					<input type="text" name="your-email" placeholder="Your email"><br>
					<input type="text" name="your-password" placeholder="Your password"><br>
					<input type="text" name="your-password" placeholder="Comfirm your password"><br>
					<input type="submit" value="Create new account"><br>
				</form>
				<pre>------------------</pre>
				<button type="Sign In"><a href="sign-in.php">Sign In</a></button>	
			</div>	
		</div>	
	</div>
</section>

</body>
</html>
