<?php 
	session_start();
	if (isset($_POST['LoginSession'])) {
		$Username = $_POST['Username'];
		$Password = $_POST['Password'];
		// Check Login
		if ($Username == "FlinRzqlh" && $Password == "flinpass") {
			// create Session
			$_SESSION['LoginSession'] = $Username ;
			// take user to session checker page
			echo "<h1>Hello, you have successfully logged in!</h1>";
			echo "<h2>Click <a href='Latihan 2 Memeriksa Session Modul 10.php'>here</a> to go to session checker page</h2>";
		}
	} else { ?>
		<!DOCTYPE html>
		<html>
		<head>
			<meta charset="utf-8">
			<meta name="viewport" content="width=device-width, initial-scale=1">
			<title>Login Page</title>
		</head>
		<body>
			<form action="" method="post">
				<h2>Login Here!</h2>
				Username : <input type="text" name="Username">
				<br>
				Password : <input type="text" name="Password">
				<br>
				<input type="submit" name="LoginSession" value="Login">
			</form>
		</body>
		</html>
<?php } ?>