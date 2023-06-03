<?php
    // Set Expiration date to 1 hour ago
    setcookie("username", "", time() -3600); // 3600 minutes = 1 hour
    setcookie("fullname", "", time() -3600);
    echo "<h1>Cookies has been deleted succesfully</h1>";
    echo "<h2>Click <a href='Latihan 1 Mengecek Cookies Modul 10.php'>here</a> to check Cookies"
?>