<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rumus Lingkaran</title>
</head>
<body>
    <?php

    /*  
     Apabila diketahui suatu lingkaran memiliki diameter 14 cm. 
     Berapakah luas lingkaran tersebut? 
     ----------------------------------------------------------
     Hitunglah keliling lingkaran yang memiliki jari-jari 20 cm
    */

    function luas_lingkaran($d){

        // Mengetahui Jari
        $r = $d / 2;

        // Hitung Luas
        define("π", 3.14);
        $r = pow($r,2);
        $luas = round(π * $r);
        return $luas;
    }

    function kel_lingkaran($r){
        $keliling =  2 * π * $r;
        return $keliling;
    }

    echo luas_lingkaran(14)."cm2";
    echo "<br>";
    echo kel_lingkaran(20)."cm"

    ?>
</body>
</html>