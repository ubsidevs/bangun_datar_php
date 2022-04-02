<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hitung Jajar Genjang</title>
</head>
<body>
    <?php

    // Luas 
    function luas_jj($alas, $tinggi){
        return $alas * $tinggi; 
    }

    echo luas_jj(2,5);

    // Keliling
    function kel_jj($sisi){
        return $sisi * 4; 
    }

    echo kel_jj(8);

    ?>
</body>
</html>