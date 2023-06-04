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
	    <!-- <img id="myImage" src="Logo2.png" width="250" height="250"> -->
		<img id="myImage" src="Logo.png" width="250" height="250">

	    <nav>
	    	<!-- Bagian Javascript "onclick" atribute -->
	    	<!-- Jika tombol BtnChange ditekan, gambar myImage akan berubah -->
	    	<button class="Btn" name="BtnChange" id="home" onclick="document.getElementById('myImage').src='Logo2.png'">Change Logo</button>
	    	<!-- Jika tombol BtnReturn ditekan, gambar myImage akan kembali seperti semula -->
	    	<button class="Btn" name="BtnReturn" id="home" onclick="document.getElementById('myImage').src='Logo.png'">Return Logo</button>
	    </nav>
	</header>
</section>
</body>
</html>