<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hitung Persegi Panjang</title>
</head>
<body>
    <!-- Luas Persegi Panjang -->
    <?php 
    
    function persegi_panjang($panjang, $lebar){
        echo "Luas Persegi Panjang dengan P = $panjang dan L = $lebar adalah ".$luas = $panjang * $lebar;
        echo "<br>";
        echo "Keliling Persegi Panjang dengan P = $panjang dan L = $lebar adalah ".$keliling = 2 * ( $panjang + $lebar );
    }

    persegi_panjang(4,8);

    ?>
</body>
</html>