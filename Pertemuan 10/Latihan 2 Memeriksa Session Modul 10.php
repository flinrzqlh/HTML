<?php
    session_start();
    if (isset($_SESSION['LoginSession'])) {
        echo "<h1>Welcome, " . $_SESSION['LoginSession'] . "</h1>";
        echo "<h2>This is the Home Page. This page will appear if you have successfully logged in</h2>";
        echo "<h2> Click <a href='Latihan 2 Menghapus Session Modul 10.php'>here</a> to Log out of your account</h2>";

    } else {
        // Session is not present or false because of not loggin in...
        die ("<h2>You have not logged in yet. Please Login first by clicking <a href='Latihan 2 Menciptakan Session Modul 10.php'> here</a></h2>");
    }
?>