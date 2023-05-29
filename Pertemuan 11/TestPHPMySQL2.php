<?php 
	// Menghubungkan file kode ini dengan file kode Functions
	require 'TestFunctions.php';

	// Memanggil Function 'query' untuk mengambil data dari tabel mahasiswa1teknologiinformasi, lalu disimpan dalam variable $mahasiswa
	$mahasiswa = query("SELECT * FROM mahasiswa1teknologiinformasi");
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>List Data Mahasiswa</title>
	<style type="text/css">
		body {
			background: url("uwp629799.jpeg")no-repeat;
/*			background-position: center;*/
/*    		background-size: cover;*/
			width : 1400px;
			margin-left: auto;
			margin-right: auto;
			margin-top: 40px;
			margin-bottom: 40px;
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
		nav { /* punya tabel */
			padding-top: 40px;
			padding-bottom: 40px;
			margin-top: 20px;
			margin-left: auto;
			margin-right: auto;
			width: 78%;
			font-size: 15px;
			color: black;
			text-align: center;
		}
		.BtnTmbhMhs {
			margin-top: 20px;
			width: 900px;
			background-color: lightcoral;
			font-size: 20px;
			font-weight: bold;
			border-radius: 5px;
			height: 50px;
		}
		.BtnEditMhs {
			width: 60px;
			background-color: lightblue;
			font-size: 15px;
			border-radius: 4px;
			height: 20px;
			margin-bottom: 2px;
		}
		.BtnDltMhs {
			margin-top: 2px;
			width: 60px;
			background-color: red;
			font-size: 15px;
			border-radius: 4px;
			height: 20px;
		}
	</style>
</head>
<body>
	<header>
		<p>List of Students</p>
	</header>

	<nav>
	<table border="3px" cellpadding="2" cellspacing="0" align="center" bgcolor="lightpink" width="1000px">
		<tr>
			<th>No.</th>
			<th>Interact</th>
			<th>Photo</th>
			<th>Name</th>
			<th>NIM</th>
			<th>Email</th>
			<th>Major</th>
		</tr>

		<?php $incr = 1; ?>
		<?php foreach($mahasiswa as $row) : ?> 
		<!-- untuk setiap elemen yang berada pada array $mahasiswa, simpan ke dalam variabel $row -->
		<tr>
			<td><?php echo $incr; ?></td>
			<td>
				<form action="TestPHPMySQLedit2.php?id=<?php echo $row["id"]; ?>" method="post">
					<button type="submit" class="BtnEditMhs" name="Editmhs">Edit</button>
				</form>
				<form action="TestPHPMySQLdelete2.php?id=<?php echo $row["id"]; ?>" method="post">
                    <button type="submit" class="BtnDltMhs" name="Dltmhs" onclick="return confirm('Are you sure that you want to delete this data?');">Delete</button>
                </form>
			</td>
			<td><img src= "<?php echo $row["foto"]; ?>" width= "100"></td>
			<td><?php echo $row["nama"];?></td>
			<td><?php echo $row["NIM"];?></td>
			<td><?php echo $row["email"];?></td>
			<td><?php echo $row["prodi"];?></td>
		</tr>
		<?php $incr++; ?>
		<?php endforeach; ?>
	</table>

	<form action="TestPHPMySQLinsert2.php">
        <button type="submit" class="BtnTmbhMhs" name="StudentAdd">Add a Student's Data</button>
    </form>

	</nav>
</body>
</html>