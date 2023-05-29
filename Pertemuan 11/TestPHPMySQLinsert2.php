<?php 
	require 'TestFunctions.php';
	// Cek apakah tombol StudentAddConfirm sudah tertekan atau belum
	if(isset($_POST["StudentAddConfirm"])) {
		// Cek apakah data berhasil ditambahkan...
		if (insertData($_POST) > 0) {
			$success = true;
		// atau tidak
		} else {
			$error = true;
		}
	}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Insert Student Data</title>
	<style type="text/css">
		body {
			background: url("uwp629799.jpeg")no-repeat;
			width : 1400px;
			margin-left: auto;
			margin-right: auto;
			margin-top: 40px;
		}
		header, nav {
			font-family: Georgia; 
			font-style: italic; 
			border: 3px solid black;
			border-radius: 6px;
			background: darkred;
		}
		header {
			color: white;
			width: 100%;
			font-weight: bold;
			text-align: center;
			font-size: 25px;
		}
		nav {
			padding-top: 40px;
			padding-bottom: 40px;
			margin-top: 20px;
			margin-left: auto;
			margin-right: auto;
			width: 40%;
			font-size: 20px;
			color: white;
			text-align: center;
		}
		.labelform {
			width: 300px;
			height: 30px;
			font-size: 15px;
			margin-bottom: 5px;
		}
		.error {
			background: #FF6666; /* bg merah */
			font-size: 20px;
			color: white;
			border-radius: 5px;
			height: 30px;
			width: 90%;
			padding-top: 5px;
			margin-left: auto;
			margin-right: auto;
			margin-bottom: 10px;
		}
		.success {
			background: green; /* bg hijau */
			font-size: 20px;
			color: white;
			border-radius: 5px;
			height: 30px;
			width: 90%;
			padding-top: 5px;
			margin-left: auto;
			margin-right: auto;
			margin-bottom: 10px;
		}
		.BtnKembali {
			margin-top: 10px;
			color: white;
			width: 250px;
			background-color: lightcoral;
			font-size: 19px;
			border-radius: 5px;
			height: 50px;
		}
		.BtnTmbhMhsCnfrm {
			margin-top: 10px;
			color: white;
			width: 250px;
			background-color: lightcoral;
			font-size: 19px;
			border-radius: 5px;
			height: 50px;
		}
	</style>
</head>
<body>
	<header>
		<p>Add Student Data</p>
	</header>

	<nav>
		<?php if (isset($error)) { ?>		<!-- Jika data gagal ditambahkan, tampilkan error -->
            <div class="error">Sorry, the data has not been saved to the Database</div>
        <?php } else if (isset($success)) { ?>		<!-- Jika data berhasil ditambahkan, tampilkan berhasil -->
            <div class="success">The data has been successfully added to the Database</div>
        <?php } ?>

		<form action="" method="post">
		<!-- Bagian untuk menginput data baru yang kemudian data tersebut dikirim ke file Functions dan diproses secara MySQL dan PHP disana agar tersimpan ke tabel di database -->
            <label for="nama">Name : </label>
            <input type="text" class="labelform" placeholder="Full Name" name="nama" id="nama" required size="100" pattern="[A-Za-z ]+" required>
			<br>
            <label for="NIM">NIM : </label>
            <input type="text" class="labelform" placeholder="Maximum 12 Digits" name="NIM" id="NIM" required size="11" pattern="[0-9 ]+" required>
            <br>
            <label for="email">E-mail : </label>
            <input type="text" class="labelform" placeholder="E-mail" name="email" id="email" required size="50" required>
            <br>
            <label for="prodi">Major : </label>
            <input type="text" class="labelform" placeholder="Current Major" name="prodi" id="prodi" required size="50" required>
            <br>
			<label for="foto">Photo : </label>
            <input type="text" class="labelform" placeholder=".jpg .jpeg .png 106 x 106 scale" name="foto" id="foto" required size="100" required>
     		<br>
     	<!-- Tombol submit StudentAddConfirma, jika diklik akan mengirimkan data ke file Functions -->
            <button type="submit" class="BtnTmbhMhsCnfrm" name="StudentAddConfirm">Add Student Data</button>
      	</form>
		<form action="TestPHPMySQL2.php">
			<button type="submit" class="BtnKembali" name="Kembali">Return to Home Page</button></a>
		</form>
	</nav>
</body>
</html>