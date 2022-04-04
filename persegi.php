<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hitung Persegi</title>
</head>
<body>
    <!-- Luas Persegi -->
    <?php
        $sisi = 5;
        $luas = $sisi * $sisi; 

        echo "<b>A. Luas Persegi</b> <br>";
        echo "x = $sisi cm (sisi)<br>";
        echo "x = $sisi cm x $sisi cm <br>";
        echo "x = $luas cm"

    ?>

    <br><br>

    <!-- Keliling Persegi -->
    <?php
        $sisi = 10;
        $kel_persegi = $sisi * 4;
        
        echo "<b>B. Keliling Persegi</b> <br>";
        echo "x = $sisi cm (sisi)<br>";
        echo "x = $sisi cm x 4 <br>";
        echo "x = $kel_persegi cm"
    ?>
</body>
</html>