<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Studi Kasus Praktikum Modul 9</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <!-- Link StyleSheet -->
        <link rel="stylesheet" href="StyleStudiKasusPraktikum9.css" type="text/css" />
    </head>

    <body>
<!-- Bagian Header -->
    <div class="container margin">
        <div class="mainHeader">
            <div class="submainHead">
                <div class="backImg">
                    <a href="Studi Kasus Modul 9.php"><img src="https://secreto.site/secretonew/images/back-arrow.svg?v=1"></a>
                </div>
                <div class="logoElmoShh">
                    <a href="https://media.tenor.com/VOf_IsXVKfsAAAAM/meme-elmo.gif"><img src="Elmo_Stare.png" style="width: 28px;"></a>
                    <span style="font-weight: 795; font-size: 130%; color: #fff;">ElmoShh</span>
                </div>
            </div>
        </div>
    </div>

<!-- Bagian Registrasi-->
    <div class="container margin">
        <div class="regBox">
            <h4 class="regTitle">Elmo's Secret Keeper</h4>
            <div class="regList">
                <ul class="a">
                    <li>
                        Tell Elmo your secrets. He will keep it safe.
                    </li>
                    <li>
                        Please login using your Username and Password!
                    </li>
                    <li>
                        Elmo will verify if it is you.
                    </li>
                </ul>
            </div>
            <form action="" method="post">
                <input type="text" class="form-control" placeholder="Your Username" name="Name">
                <input type="password" class="form-control" placeholder="Your Password" name="Password">
                <button type="submit" class="btn btn-danger btn-md" name="LoginButton">Login</button>
                <?php 
                    // Check if the login button has been clicked or not
                    if (isset($_POST["LoginButton"])) {
                        // Check if the username and password are right or not
                        if ($_POST["Name"] === "Muhammad Efflin Rizqallah Limbong" && $_POST["Password"] === "AkunElmoFlin") {
                            // If the username and password is correct...
                            header("Location: selamat datang studi kasus.php");
                            exit;
                        // But, if the username and password are wrong...
                        } else {
                            header("Location: Try Again studi kasus.php");
                            exit;
                        }
                    }
                ?>
            </form>
        </div>
    </div>

<!-- Bagian Message -->
    <div class="container margin">
        <div class="message">
            <p class="messageTitle">Elmo's Secret Keeper's Service</p>
            <ul class="b">
                <li>
                    You can either tell Elmo your secrets...
                </li>
                <li>
                    Or you can tell others your secrets anonymously.
                </li>
            </ul>
        </div>
    </div>
  </body>
</html>