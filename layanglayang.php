<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Layang - Layang</title>
</head>
<body>
    <?php

    // Luas
    function luas_segitiga($d1,$d2){
        $luas = 0.5 * $d1 * $d2;
        return $luas;
    }

    echo luas_segitiga(30, 15);

    // Keliling
    function kel_segitiga($x, $y){
        $keliling = 2 * ($x + $y);
        return $keliling;
    }

    echo kel_segitiga(12, 22);

    ?>
</body>
</html>