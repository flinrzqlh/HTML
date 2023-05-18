<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan 1.1 Modul 9</title>
</head>
<body>
<!-- Metode GET -->
    <h4>GET Method</h4>
    <form 
        action="<?php $_SERVER['PHP_SELF'];?>" method="get"> Nama
        <input type="text" name="nama" /> <br />
        <input type="submit" value="OK" />
    </form>
    <?php
    if (isset($_GET['nama'])) {
        echo 'Hello (With GET Method), ' . $_GET['nama'];
    }
    ?>
<!-- Metode POST -->
    <h4>POST Method</h4>
    <form 
        action="<?php $_SERVER['PHP_SELF'];?>" method="post"> Nama
        <input type="text" name="nama" /> <br />
        <input type="submit" value="OK" />
    </form>
    <?php
    if (isset($_POST['nama'])) {
        echo 'Hello (With POST Method), ' . $_POST['nama'];
    }
    ?>
</body>
</html>

<!-- Bagaimana jika metode GET ditangani dengan superglobal $_POST; 
    dan sebaliknya, metode POST ditangani dengan $_GET? Jelaskan! 
-->

<!-- Jawab: 
    Perlu diketahui bahwasanya Metode GET dan superglobal $_POST adalah 
    dua hal yang berbeda dalam penanganan form pada PHP.

    Metode GET digunakan untuk mengirimkan data form melalui URL dan 
    data tersebut dapat diakses melalui superglobal $_GET. 
    Sedangkan metode POST digunakan untuk mengirimkan data form 
    secara tersembunyi (tidak terlihat di URL) dan data tersebut dapat 
    diakses melalui superglobal $_POST.

    Jika metode GET ditangani dengan superglobal $_POST 
    dan sebaliknya (Metode POST ditangani dengan superglobal $_GET),
    maka data form yang dikirimkan melalui URL tidak akan bisa diakses 
    dengan benar (error). 
    
    Sebaliknya, data form tersebut akan dicari pada superglobal $_POST, 
    yang seharusnya hanya berisi data yang dikirimkan melalui metode POST.
-->