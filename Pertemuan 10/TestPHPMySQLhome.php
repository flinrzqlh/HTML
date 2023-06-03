<?php 
	// Check Session SessionLogin true atau tidak
	session_start();
	// Jika SessionLogin False..
	if (!isset($_SESSION["SessionLogin"])) {
		header("Location: TestPHPMySQLlogin.php"); // kembalikan user ke Login Page
		exit;
	} elseif (isset($_POST["LogoutBtn"])) {
		$_SESSION = [];
		session_unset();
		session_destroy();
		header("Location: TestPHPMySQLlogin.php");
		exit;
	}
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Home Page</title>

	<!-- Fonts Google -->
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Noto+Sans:wght@400;700&display=swap" rel="stylesheet">
	
	<!-- Style -->
	<link rel="stylesheet" href="StyleAccount.css" type="text/css" />
</head>

<body class="home">
<section class="home">
	<header class="home">
		<h1 class="home">Welcome</h1>

		<img src="Logo.png" alt="Paris" width="250" height="250">
	    <form action="" method="post">
	    	<button type="submit" class="Btn" name="LogoutBtn" id="home" onclick="return confirm('Are you sure you want to Logout?');">Logout</button>
	    </form>
	</header>
</section>
</body>
</html>