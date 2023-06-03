<?php
    if (isset($_COOKIE['username'])) {
        echo "<h1>The Cookie 'username' is PRESENT. </h1> 
        <br> The Contents are : " . $_COOKIE['username'];
    } else {
        echo "<h1>The Cookie 'username' is NOT PRESENT</h1>";
    }

    if (isset($_COOKIE['fullname'])) {
        echo "<h1>The Cookie 'fullname' is PRESENT. </h1>
        <br> The Contents are : " . $_COOKIE['fullname'];
    } else {
        echo "<h1>The Cookie 'fullname' is NOT PRESENT";
    }
    echo "<h2>Click <a href='Latihan 1 Menghapus Cookies Modul 10.php'> here </a> to delete Cookies.</h2>";
?>