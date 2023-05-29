<?php 
	// Menghubungkan kode ini dengan kode Functions
	require 'TestFunctions.php'; // koneksi ke File function

	// ambil data id (primary key) dari halaman home page (Tombol "Edit") guna untuk menandakan data mana yang ingin di update
	$id = $_GET["id"];

	// Query data mahasiswa berdasarkan id
	$updMhs = query("SELECT * FROM mahasiswa1teknologiinformasi WHERE id = $id");

	// Cek apakah tombol StudentUpdConfirm sudah tertekan atau belum
	if(isset($_POST["StudentUpdConfirm"])) {
		// Cek apakah data berhasil diupdate atau tidak
		if (updateData($_POST) > 0) {
			$success = true;
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
	<title>Update Student Data</title>
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
			padding-top: 20px;
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
		.BtnUpdMhsCnfrm {
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
		<p>Update/Edit Student Data</p>
	</header>

	<nav>
		<?php if (isset($error)) { ?>		<!-- Jika data gagal di update, tampilkan error -->
            <div class="error">Sorry, the data failed to be updated.</div>
        <?php } else if (isset($success)) { ?>		<!-- Jika data berhasil di update, tampilkan berhasil -->
            <div class="success">The data has been successfully updated!</div>
        <?php } ?>
        
        <h3>Type in the new data below:</h3>
		<form action="" method="post">

			<input type="hidden" class="labelform" value="<?php echo $updMhs[0]["id"]; ?>" name="id" id="id" required>

            <label for="nama">Name : </label>
            <input type="text" class="labelform" value="<?php echo $updMhs[0]["nama"]; ?>" name="nama" id="nama" required size="100" pattern="[A-Za-z ]+" required>
			<br>
            <label for="NIM">NIM : </label>
            <input type="text" class="labelform" value="<?php echo $updMhs[0]["NIM"]; ?>" name="NIM" id="NIM" required size="11" pattern="[0-9 ]+" required>
            <br>
            <label for="email">E-mail : </label>
            <input type="text" class="labelform" value="<?php echo $updMhs[0]["email"]; ?>" name="email" id="email" required size="50" required>
            <br>
            <label for="prodi">Major : </label>
            <input type="text" class="labelform" value="<?php echo $updMhs[0]["prodi"]; ?>" name="prodi" id="prodi" required size="50" required>
            <br>
			<label for="foto">Photo : </label>
            <input type="text" class="labelform" value="<?php echo $updMhs[0]["foto"]; ?>" name="foto" id="foto" required size="100" required>
     		<br>
            <button type="submit" class="BtnUpdMhsCnfrm" name="StudentUpdConfirm">Update Student Data</button>
      	</form>
		<form action="TestPHPMySQL2.php">
			<button type="submit" class="BtnKembali" name="Kembali">Return to Home Page</button></a>
		</form>
	</nav>
</body>
</html>