<?php 
	// Check Session SessionLogin true atau tidak
	session_start();
	// Jika SessionLogin true...
	if (isset($_SESSION["SessionLogin"])) {
		header("Location: TestPHPMySQLhome.php");
		exit;
	}
	// Menghubungkan ke file yang mengandug function MySQL untuk menghubungkan ke database
	require 'Functions.php';

	// Cek apakah tombol BtnUpdBook sudah tertekan atau belum
	if (isset($_POST["Login"])) {			// Jika tombol login dipencet...
		$Username = $_POST["Username"];		// Data Username disimpan dalam variable $Username
		$Password = $_POST["Password"];		// Data Password disimpan dalam variable $Password

		// Mengecek jika ada Username tersebut didalam database
		$checkLogin = mysqli_query($database, "SELECT * FROM users WHERE Username = '$Username'"); // Username bertindak sebagai key/tanda baris mana yang mengandung Username user tersebut.
		// Jika terdapat satu baris yang memilik Username tersebut, lanjutkan kode untuk cek password. Apakah sama dengan Password yang berada pada baris tersebut???
		if (mysqli_num_rows($checkLogin) === 1) {		
			// Mengecek Password
			$dataUser = mysqli_fetch_assoc($checkLogin); // Mengambil data Password

			// Jika Password yang user ketikkan sama dengan Password yang berada pada baris Username tersebut, maka...
			if (password_verify($Password, $dataUser["Password"])) {
				// Set Session
				$_SESSION["SessionLogin"] = true;
				// Perbolehkan akses dan arahkan ke halaman Home Page dan 
				header("Location: TestPHPMySQLhome.php");
				exit;
			} else {
				$passwordWrong = true;
			}
		} else {
			$usernameWrong = true;
		}
	}
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Login Page</title>

	<!-- Fonts Google -->
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Noto+Sans:wght@400;700&display=swap" rel="stylesheet">
	
	<!-- Style -->
	<link rel="stylesheet" href="StyleAccount.css" type="text/css" />
</head>

<body class="login">
<section class="login">
	<?php if (isset($error)) { ?>
        <nav class="login">
        	<p>Login Failed</p>
        </nav>
    <?php } else if (isset($success)) { ?>
        <nav class="login">
        	<p>Login Successfull!</p>
        </nav>
    <?php } else if (isset($usernameWrong)) { ?>
        <nav class="login">
        	<p>Username Incorrect or Not Found!</p>
        </nav>
     <?php } else if (isset($passwordWrong)) { ?>
        <nav class="login">
        	<p>Password Incorrect or Not Found!</p>
        </nav>
    <?php } ?>

	<header class="login">
			<h1 class="login">Login to Account</h1>

	        <table class="login">
				<form action="" method="post">
		            <tr>	<!-- Field Username -->
		            	<td><label for="Username">Username : </label></td>
		            	<td><input type="text" class="labelform" id="lblfrmLogin" name="Username" id="Username" required size="100" pattern="[A-Za-z0-9 ]+" required></td>
		            </tr>
					
		        	<tr>	<!-- Field Password -->
		            	<td><label for="Password">Password &nbsp; : </label></td>
		            	<td><input type="password" class="labelform" id="lblfrmLogin" name="Password" id="Password" required size="100" pattern="[A-Za-z0-9 ]+" required></td>
		        	</tr>
	      	</table>
	      			<!-- Tombol Login -->
		            <button type="submit" class="Btn" id="login" name="Login">Login</button>
		      	</form>

		    <!-- Tombol BtnLogin untuk menuju ke halaman Login -->
			<form action="TestPHPMySQLregis.php">
				<button type="submit" class="Btn" id="login" name="GoRegister">Create a New Account</button></a>
			</form>
	</header>
</section>
</body>
</html>