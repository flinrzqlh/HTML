<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan 2 Modul 9 Prefilling Text Field</title>
</head>
<body>
    <h4>Prefilling Text Field</h4>
    <form action="<?php $_SERVER['PHP_SELF'];?>" method="post">Name
    <input type="text" name="nama"
        value="<?php
        echo isset($_POST['nama']) ? $_POST['nama'] : '';
        ?>"
    /> 
    <br />

    <input type="submit" value="Submit" />
    </form>

    <?php
    if (isset($_POST['nama'])) {
        echo $_POST['nama'];
    }
    ?>
</body>
</html>