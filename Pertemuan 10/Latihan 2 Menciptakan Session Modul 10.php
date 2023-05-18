<?php
    session_start();
    if (isset($_POST['login'])) {
        $user = $_POST['user'];
        $pass = $_POST['pass'];

        // Check Login
        if ($user == "Kia" && $pass == "Dane") {
            $_SESSION['login'] = $user; // Creates Sessiom
            // Goes to Session Checking Page
            echo "<h1>Hello, you have successfully logged in!</h1>";
            echo "<h2>Click <a href='Latihan 2 Memeriksa Session Modul 10.php'>here</a> to go to the Session Checker page</h2>";
        } // We could add a condition here if login attempt failed
    } else {
        ?>
        <html>
            <head>
                <title>Login Page</title>
            </head>
            <body>
                <form action="" method="post">
                    <h2>Login Here</h2>
                    Username : <input type="text" name="user"><br>
                    Password : <input type="password" name="pass"><br>
                    <input type="submit" name="login" value="login">
                </form>
            </body>
        </html>
    <?php
    } ?>