<!-- <!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Test For HTML PHP SHID</title>
	<style type="text/css">
		.colourofline {
			background-color: cyan;
		}
		.colourofcolumn {
			background-color: lightyellow;
		}
	</style>
</head>
<body>
	<table border="1" cellpadding="10" cellspacing="0">
		<?php for ($i = 1; $i <= 10; $i++) { ?>
			<?php if ($i % 2 == 1) { ?>
				<tr class="colourofline">
			<?php } else { ?>
				<tr>
			<?php } ?>
			<?php for($j = 1; $j <= 9; $j++) { ?>
				<?php if ($j % 2 == 0) { ?>
					<td class="colourofcolumn"><?php echo "$i, $j"; ?></td>
				<?php } else { ?>
					<td><?php echo "$i, $j"; ?></td>
				<?php } ?>
			<?php } ?>
				</tr>
		<?php } ?>
	</table>
</body>
</html> -->

<!-- -------------------------------------------------------------------------------------------------------------- -->

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Test Array With Daftar Mahasiswa</title>
	<style type="text/css">
		.titleHead {
			background-color: brown;
			text-align: center;
			color: white;
			height: 50px;
			text-align: center;
		}
		.list {
			list-style-type: none;
			background-color: lightcoral;
			width: 250px;
			height: 200px;
			padding: 10px;
			float: left;
			margin-right: 20px;
			margin-bottom: 20px;
		}
	</style>
</head>
<body>
	<div class="titleHead">
		<h1>List of Students</h1>
	</div>

	<?php 
		$mahasiswa = [
			["nama" => "Sangaruddin Sinilukh",
			 "nim" => "33456133001",
			 "email" => "beranikagak@gmail.com",
			 "prodi" => "Teknologi Informasi",
			 "foto" => "apabilaedit.jpg"],

			["nama" => "Sayangil Ayaman",
			 "nim" => "33456133002", 
			 "email" => "ayamenakmmm@gmail.com",
			 "prodi" => "Teknologi Informasi",
			 "foto" => "gilangedit.jpg"],

			["nama" => "Awokul Lucumat",
			 "nim" => "33456133003", 
			 "email" => "hahaha@gmail.com", 
			 "prodi" =>"Teknologi Informasi",
			 "foto" => "ketawaedit.jpg"]
		];
	?>

	<div class="table">
		<?php foreach($mahasiswa as $mhs) : ?>	
		<ul class="list">
			<li><img src="<?php echo $mhs["foto"]; ?>"></li>
			<li>Nama  : <?php echo $mhs["nama"]; ?></li>
			<li>NIM   : <?php echo $mhs["nim"]; ?></li>
			<li>Email : <?php echo $mhs["email"]; ?></li>
			<li>Prodi : <?php echo $mhs["prodi"]; ?></li>
		</ul>
		<?php endforeach; ?>
	</div>
</body>
</html>