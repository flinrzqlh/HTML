<?php 
	// Connect to Database listofstudents
	$database = mysqli_connect("localhost", "root", "", "listofstudents");

	// function query, guna mengambil data dari table mahasiswa1teknolgoiinformasi dan menampilkanya pada Home Page
	function query($ambil) {
		global $database; // atribut global untuk mengubah $database sebagai variabel global pada function ini
		$table = mysqli_query($database, $ambil); // tabel listofbooks
		$rows = []; // 
		while($row = mysqli_fetch_assoc($table)) { // 
			$rows[] = $row; // wadah array ($rows) diisi dengan ($row) 
		}
		return $rows;
	}
	
	// Function registerUser, guna untuk menambahkan data user baru ke database "user"
	function registerUser($userData) {
		global $database;

		$Username = $userData["Username"];
		$Email = $userData["Email"];
		$Password = $userData["Password"];

		// Mengecek jika Username yang telah diinputkan sudah digunakan atau belum
		$usernameCheck = mysqli_query($database, "SELECT Username FROM users WHERE Username = '$Username'");

		// Jika sudah maka kode dihentikan dan mengembalikan nilai
		if (mysqli_fetch_assoc($usernameCheck)) {
			return false;
		}
		// Jika belum, maka kode lanjut.

		// Encrypt the Password
		$Password = password_hash($Password, PASSWORD_DEFAULT);

		// Add New User Data (Account) to Database 
		mysqli_query($database, "INSERT INTO users VALUES('', '$Username', '$Email', '$Password')");

		// Returns the value of how many rows have been changed in the database table (for displaying the alert in the register page)
		return mysqli_affected_rows($database);
	}
?>