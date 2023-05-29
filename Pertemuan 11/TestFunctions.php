<?php 
	// Connect to Database listofstudents
	// LATIHAN 1 KONEKSI KE DATABASE
	$database = mysqli_connect("localhost", "root", "", "listofstudents");

	// function query, guna mengambil data dari table mahasiswa1teknolgoiinformasi dan menampilkanya pada Home Page
	// LATIHAN 4 MENAMPILKAN DATA
	function query($ambil) {
		global $database; // atribut global untuk mengubah $database sebagai variabel global pada function ini
		$table = mysqli_query($database, $ambil); // tabel mahasiswa1teknologiinformasi
		$rows = []; // variabel baru yang akan diisi oleh beberapa data
		while($row = mysqli_fetch_assoc($table)) { // selama $row (data yang telah diisi di file kode homepage) diisi dengan data sesuai tabel...
			$rows[] = $row; // variabel $rows diisi dengan data $row 
		}
		return $rows; // Kembalikan nilai-nilai data variabel array $rows
	}

	// LATIHAN 4 MEMASUKKAN DATA BARU
	// function insertData, menyimpan data baru yang telah diketik pada form dan menyimpanya pada tabel mahasiswa1teknologiinformasi
	function insertData($newData) {
		global $database; // atribut global untuk mengubah $database sebagai variabel global pada function ini
		// ambil data dari tiap elemen dalam form
		$nama = htmlspecialchars($newData["nama"]);
		$NIM = htmlspecialchars($newData["NIM"]);
		$email = htmlspecialchars($newData["email"]);
		$prodi = htmlspecialchars($newData["prodi"]);
		$foto = htmlspecialchars($newData["foto"]);
		// htmlspeicalchars() digunakan agar data yang dimasukkan tidak dijalankan kode jika mengandung atribut html

		// Query Insert Data dan memasukkan data baru ke database
		$insertQuery = "INSERT INTO mahasiswa1teknologiinformasi VALUES ('', '$nama', '$NIM', '$email', '$prodi', '$foto')";
		mysqli_query($database, $insertQuery);
		
		// Mengecheck apakah data berhasil ditambah atau tidak (Mengembalikan angka yang didapatkan dari mysqli_affected rows)
		return mysqli_affected_rows($database);
	}

	// LATIHAN 4 MENGHAPUS DATA
	// Function deteleData, menangkap data "id" dari halaman delete lalu menghapus data yang sesuai dengan id tersebut pada tabel di database
	function deleteData($id) {
		global $database; // Koneksi ke database
		// perintah menghapus row data pada tabel di dalam database
		mysqli_query($database, "DELETE FROM mahasiswa1teknologiinformasi WHERE id = $id");
		
		// Mengambalikan nilai berapa jumlah rows yang telah berubah pada tabel di dalam database guna untuk mengecek apakah data terhapus atau tidak pada halaman Home Page
		return mysqli_affected_rows($database);
	}

	// LATIHAN 4 NENGEDIT DATA/MENGUPDATE DATA
	// Function updateData, guna untuk melakukan pembaruan atau edit data yang ingin di update oleh user
	function updateData($updData) {
		global $database; // atribut global untuk mengubah $database sebagai variabel global pada function ini
		
		// ambil data dari tiap elemen dalam form
		$id = ($updData["id"]); // Field ini hidden, hanya berguna untuk menangkap data
		$nama = htmlspecialchars($updData["nama"]);
		$NIM = htmlspecialchars($updData["NIM"]);
		$email = htmlspecialchars($updData["email"]);
		$prodi = htmlspecialchars($updData["prodi"]);
		$foto = htmlspecialchars($updData["foto"]);
		// htmlspeicalchars() digunakan agar data yang dimasukkan tidak dijalankan kode jika mengandung atribut html

		// Query Insert Data dan memasukkan data baru ke database
		$updQuery = "UPDATE mahasiswa1teknologiinformasi SET 
						nama = '$nama',
						NIM = '$NIM',
						email = '$email',
						prodi = '$prodi',
						foto = '$foto'
					 WHERE id = $id
					";
		mysqli_query($database, $updQuery);
		
		// Mengecheck apakah data berhasil ditambah atau tidak (Mengembalikan angka yang didapatkan dari mysqli_affected rows)
		return mysqli_affected_rows($database);
	}
?>