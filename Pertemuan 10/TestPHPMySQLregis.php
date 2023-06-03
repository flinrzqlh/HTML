<?php 
	// Menghubungkan ke file yang mengadnug function MySQL untuk menghubungkan ke database
	require 'Functions.php';

	// Cek apakah tombol BtnUpdBook sudah tertekan atau belum
	if(isset($_POST["Register"])) {
		// Cek apakah data berhasil diupdate atau tidak
		if (registerUser($_POST) > 0) {			// Jika function registerUser mengembalikan nilai > 0...
			$success = true;						// $success = true
		} else if (!registerUser($_POST)) {		// Jika function registerUser mengembalikan nilai false/!...
			$usernameTaken = true;					// $usernameTaken = true
		} else {								// Jika function registerUser mengembalikan nilai < 0...
			$error = true;							// $error = true
		}
	}
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Register Page</title>

	<!-- Fonts Google -->
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Noto+Sans:wght@400;700&display=swap" rel="stylesheet">
	
	<!-- Style -->
	<link rel="stylesheet" href="StyleAccount.css" type="text/css" />
</head>

<body class="regis">
<section class="regis">
    <?php if (isset($success)) { ?>					<!-- Jika $success = true, tampilkan petunjuk akun berhasil dibuat -->
    	<nav class="regis">
        	<p>Account Created!</p>
        </nav>
    <?php } else if (isset($usernameTaken)) { ?>	<!-- Jika $usernameTaken = true, tampilkan nama sudah terpakai -->
    	<nav class="regis">
        	<p>Username has been Taken!</p>
        </nav>
	<?php } elseif (isset($error)) { ?>				<!-- Jika $error = true, tampilkan akun gagal dibuat -->
        <nav class="regis">
        	<p>Failed to Creat Account</p>
        </nav>
    <?php } ?>

	<header class="regis">
			<h1 class="regis">Create an Account</h1>

	        <table class="register">
				<form action="" method="post">
		            <tr>	<!-- Field Username -->
		            	<td><label for="Username">Username : </label></td>
		            	<td><input type="text" class="labelform" id="lblfrmRegis" name="Username" id="Username" required size="100" pattern="[A-Za-z0-9 ]+" required></td>
		            </tr>
					
		            <tr>	<!-- Field Email -->
		            	<td><label for="Email">Email &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: </label></td>
		            	<td><input type="email" class="labelform" id="lblfrmRegis" name="Email" id="Email" required size="100" required></td>
		        	</tr>

		        	<tr>	<!-- Field Password -->
		            	<td><label for="Password">Password &nbsp; : </label></td>
		            	<td><input type="password" class="labelform" id="lblfrmRegis" name="Password" id="Password" required size="100" pattern="[A-Za-z0-9 ]+" required></td>
		        	</tr>
	      	</table>
	      			<!-- Tombol Regis -->
		            <button type="submit" class="Btn" id="regis" name="Register">Register</button>
		      	</form>

		    <!-- Tombol BtnLogin untuk menuju ke halaman Login -->
			<form action="TestPHPMySQLlogin.php">
				<button type="submit" class="Btn" id="regis" name="Login">Login to an Account</button></a>
			</form>
	</header>
</section>
</body>
</html>