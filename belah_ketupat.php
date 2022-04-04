<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rumus Belah Ketupat</title>
</head>
<body>
    <?php

    /*  Panjang AC adalah 12 cm
        Panjang BD adalah 16 cm 
    */

    function luas_bk($d1, $d2){
        $luas = 0.5 * $d1 * $d2;
        return $luas;
    }
    function kel_bk($sisi){
        $keliling = 4 * $sisi;
        return $keliling;
    }

    echo luas_bk(12,16)."cm2";
    echo "<br>";
    echo kel_bk(10)."cm";

    ?>
</body>
</html>