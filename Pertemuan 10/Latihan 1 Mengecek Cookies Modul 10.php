<?php
    if (isset($_COOKIE['username'])) {
        echo "<h1>The Cookie 'username' is PRESENT. </h1> 
        <br> The Contents are : " .$COOKIE['username'];
    } else {
        echo "<h1>The Cookie 'username' is NOT PRESENT</h1>";
    }

    if (isset($_COOKIE['nama_lengkap'])) {
        echo "<h1>The Cookie 'nama_lengkap' is PRESENT. </h1>
        <br> The Contents are : " .$_COOKIE['nama_lengkap'];
    } else {
        echo "<h1>The Cookie 'nama_lengkap' is NOT PRESENT"
    }
    echo "<h2>Click <a href='Latihan 1 Menghapus Cookies Modul 10.php'> here </a> to delete Cookies.</h2>";
?>