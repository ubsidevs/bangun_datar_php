<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hitung Segitiga</title>
</head>
<body>
    <?php 
    
    // Luas Segitiga
    function luas_segitiga($alas, $tinggi){
        $luas = 0.5 * $alas * $tinggi;
        return $luas;
    }

    echo luas_segitiga(2,4);

    // Keliling Segitiga
    function kel_segitiga($a,$b,$c){
        $keliling = $a + $b + $c;
        return $keliling;
    }

    echo kel_segitiga(3,4,5);

    ?>
</body>
</html>