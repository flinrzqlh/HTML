<?php
    $value1 = 'Kia';
    $value2 = 'Kia Dane';
    setcookie("username", $value1);
    setcookie("nama-lengkap", $value2, time()+3600); // the Login expires in 1 hour
    echo "<h2>This is a page to set cookies</h2>";
    echo "<h2>Click <a href='Latihan 1 Mengecek Cookies Modul 10.php'>here </a> to check cookies</h2>";
?>