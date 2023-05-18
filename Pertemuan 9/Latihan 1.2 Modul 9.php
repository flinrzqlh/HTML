<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan 1.2 Modul 9</title>
</head>
<body>
<!-- REQUEST Method -->
<!-- Kode ini adalah jawaban dari latihan kecil soal 
    "Coba manfaatkan $_REQUEST untuk menggantikan fungsi $_GET atau $_POST." -->
    <h4>REQUEST Method</h4>
    <form 
        action="<?php $_SERVER['PHP_SELF'];?>" method="get"> Name
        <input type="text" name="nama" /> <br />
        <input type="submit" value="OK" />
    </form>
    <?php
    if (isset($_REQUEST['nama'])) {
        echo 'Hello (With REQUEST Method), ' . $_REQUEST['nama'];
    }
    ?>
    
<!-- Method type Identification with $_SERVER['REQUEST_METHOD'] -->
    <h4>Method Identification</h4>
    <form 
        action="<?php $_SERVER['PHP_SELF'];?>" method="post"> Name
        <input type="text" name="nama" /> <br />
        <input type="submit" value="OK" />
    </form>
    <?php
    if (isset($_REQUEST['nama'])) {
        echo 'Method used in this form (With REQUEST_METHOD and $_SERVER superglobal), ' . $_SERVER['REQUEST_METHOD'];
    }
    ?>
</body>
</html>