<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan Modul 8</title>
</head>
<body>
<!-- Latihan 1 Program PHP -->
    <?php
    echo 'PHP Code goes here';
    ?>

    <p>A HTML Document</p>
    
    <?php
    echo 'Another PHP Code goes here';
    ?>

    <p>The Code <?php echo "PHP";?> can also be written like this way</p>

<!-- Latihan 2 Variabel -->
    <?php
    // This is declaring a Variable
    $numlat2a = 9;
    // This prints the said Variable
    echo $numlat2a;
    echo '<br />';
    // This is Dumping information about a Variable
        // This will print out "int(9)"
        var_dump($numlat2a);
        echo '<br />';
        // This will pront out "9"
        print_r($numlat2a);
        echo '<br />';
    ?>
    <br />
    <?php
    $numlat2b = 10;
    var_dump($numlat2b); // This will print out "int(10)"
    echo '<br />';

    $varlat2b = "";
    var_dump($varlat2b); // This will print out "string(0) """
    echo '<br />';

    $varnulllat2b = null;
    var_dump($varnulllat2b); // This will print out "NULL";
    echo '<br />';
    ?>
    <br />

<!-- Latihan 3 Tipe Data dan Casting -->
    <?php
    $numlat3a = 4;
    var_dump(is_int($numlat3a)); // This will print out "bool(true)"
    echo '<br />';

    $varlat3a = "";
    var_dump(is_string($varlat3a)); // This will print out "bool(true)"
    echo '<br />';
    ?>
    <br />

    <?php
    $str = '789flin';
    // Casting the value of the variable $str into an integer
    $intofstr = (int) $str; // $intofstr = 789
    echo gettype($str); // This will print out "string"
    echo '<br />';
    echo gettype($intofstr); // This will print out "integer"
    echo '<br />';
    ?>
    <br />

<!-- Latihan 4 Pernyataan Seleksi -->
    <?php
    // The IF Statement
    $x = 8;
    $y = 4;
    if ($x > $y) {
        echo 'x is MORE THAN y';
    }
    echo '<br />';

    // The IF-ELSE Statement
    if ($x > $y) {
        echo 'x is MORE THAN y';
    } else {
        echo 'x is NOT MORE/LESS THAN y';
    }
    echo '<br />';

    // The IF-ELSEIF Statement
    if ($x > $y) {
        echo 'x is MORE THAN y';
    } elseif ($x == $y) {
        echo 'x is EQUAL TO y';
    } else {
        echo 'x is NOT MORE/LESS THAN y';
    }
    echo '<br />';

    // The SWITCH Statement
    switch ($x) { 
        case 8:
        echo "x is EQUAL TO 8"; 
        break;
        case 9:
        echo "x is EQUAL TO 9"; 
        break;
        case 10:
        echo "x is EQUAL TO 10"; 
        break;
    }
    echo '<br />'
    ?>
    <br />

<!-- Latihan 5 Pengulangan -->
    <?php
    // The WHILE Loop
    $z = 0;
    while ($z < 10) {
        echo $z;
        $z++; // Increment Counter
    }
    echo '<br />';

    // The DO-While Loop
    $j = 0;
    do {
        echo $j;
        $j++;
    } while ($j < 10);
    echo '<br />';

    // The FOR Loop
    for ($k = 0; $k < 10; $k++) {
        echo $k;
    }
    echo '<br />';

    // The FOR-EACH Loop
    $array = array(2, 4, 6, 8);
    foreach ($array as $value) {
        echo $value;
    }
    echo '<br />';
    ?>
    <br />

<!-- Latihan 6 Fungsi dan Prosedur -->
    <?php
    // The definiton of a Function/Procedure
        // Procedure Example
        function do_print() {
            echo time(); // Prints the timestamp information
        }
        // Calls the Procedure
        do_print();
        echo '<br />';
        // An Addition Function Example
        function addition($a, $b) {
            return ($a + $b);
        }
        echo addition(4, 8); // Output = 12
        echo '<br />';
        
    // The Argument of a Function/Procedure
        /*
        Prints a string
        $text is the string value
        $bold is the optional argument
        */
        function print_teks($text, $bold = true) { 
            echo $bold ? '<b>' .$text. '</b>' : $text;
        }
        print_teks('GoofyAhh'); // Prints with bold letter
        echo '<br />';
        print_teks('GoofyAhh', false); // Prints with normal letters
    ?>
</body>
</html>