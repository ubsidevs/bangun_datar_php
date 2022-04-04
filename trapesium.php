<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trapesium</title>
</head>
<body>
    <?php

    /*
    
    a = panjang sisi bawah trapesium
    b = panjang sisi atas trapesium
    t = tinggi trapesium
    ab = sisi bawah trapesium
    bc = sisi kanan trapesium
    cd = sisi atas trapesium
    da = sisi kiri trapesium
    
    */

    // Luas Trapesium
    function luas_trapesium($a, $b, $t){
        $luas = 0.5 * ( $a + $b ) * $t;
        return $luas;
    }

    echo luas_trapesium(16, 6, 7)." CM <br>" ;

    // Keliling
    function kel_trapesium($ab, $bc, $cd, $da){
        $keliling = $ab + $bc + $cd + $da;
        return $keliling;
    }

    echo kel_trapesium(16, 8, 6, 8)." CM";

    ?>
</body>
</html>