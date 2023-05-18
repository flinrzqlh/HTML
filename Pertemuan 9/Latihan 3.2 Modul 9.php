<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan 3.2 Modul 9 Menangani Nilai Radio</title>
</head>
<body>
<!-- Latihan 3.2 Modul 9 -->
    <h4>Menangani Nilai Radio 2</h4>
    <form action="<?php $_SERVER['PHP_SELF'];?>" method="post">
        Jenis Kelamin
        <input type="radio" name="Gender" value="Pria" checked
        <?php
        if ($_POST['Gender'] == 'Pria') {
            echo 'checked="checked"';
        }
        ?>
        />Pria

        <input type="radio" name="Gender" value="Wanita"
        <?php
        if ($_POST['Gender'] == 'Wanita') { 
            echo 'checked="checked"';
        }
        ?>
        />Wanita   
        <br />

        <input type="submit" value="ok" />
    </form>

    <?php
    if (isset($_POST['Gender'])) { 
        echo $_POST['Gender'];
    }
    ?>

</body>
</html>