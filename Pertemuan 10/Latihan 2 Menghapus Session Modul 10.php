<?php  
	session_start();
	if (isset($_SESSION['LoginSession'])) {
		unset ($_SESSION);
		session_destroy();
		echo "<h1>You have successfuly logged out of your account!</h1>";
		echo "<h2>Click <a href='Latihan 2 Menciptakan Session Modul 10.php'>here</a> to go to Login page <br> You cannnot enter the home page <a href='Latihan 2 Memeriksa Session Modul 10.php'>here</a> to go back to login page</h2>";
	}
?>