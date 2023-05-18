<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan 3.1 Modul 9 Menangani Nilai Radio</title>
</head>
<body>
<!-- Latihan 3.1 Modul 9 -->
    <h4>Menangani Nilai Radio 1</h4>
    <form action="<?php $_SERVER['PHP_SELF'];?>" method="post"> 
        Gender:
        <input type="radio" name="sex" value="Man" />Man
        <input type="radio" name="sex" value="Woman" />Woman <br />
        <input type="submit" value="ok" />
    </form>

    <?php
        if (isset($_POST['sex'])) { 
        echo 'You are a ' . $_POST['sex'];
    }
    ?>
</body>
</html>

<!-- Bagaimana Memberikan nilai default pada koleksi radio button? -->
<!-- Jawab:
    Kita dapat memberikan nilai default pada koleksi radio button di 
    dalam penanganan form PHP dengan menetapkan atribut "checked" pada 
    salah satu elemen radio button yang ingin Anda jadikan nilai default.

    Sebagai Contoh:
    <input type="radio" name="gender" value="male" checked> Male
    <input type="radio" name="gender" value="female"> Female

    Penjelasan: radio button dengan nilai "male" terpilih secara default 
    karena memiliki atribut "checked". Jika user tidak memilih radio button
    lain, nilai "male" akan dikirimkan ke server ketika form disubmit.
-->