<?php 
	// Menghubungkan file kode ini dengan file kode Functions
	require 'TestFunctions.php';

	// Menangkap Data "id" dari tabel mahasiswa1teknologiinformasi
	$id = $_GET["id"];

	// Tampilan Data Berhasil dihapus...
	if(deleteData($id) > 0) {
		echo "<script>
				alert('Data has been deleted succesfully!');
				document.location.href = 'TestPHPMySQL2.php';
			  </script>";
	// Dan tampilan Data Gagal dihapus
	} else {
		echo "<script>
				alert('Data has failed to be deleted!');
				document.location.href = 'TestPHPMySQL2.php';
			  </script>";
	}
?>