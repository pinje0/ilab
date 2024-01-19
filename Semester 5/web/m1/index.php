<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Luas Segitiga</title>
    <style>
        body {
            background-color: #252525;
            color: #fff;
        }


        form,input {
            margin: 5px;
        }
    </style>
</head>
<body>
<?php
    if (isset($_POST['hitung'])) {
        // Mengambil nilai alas dan tinggi
        $alas = $_POST['alas'];
        $tinggi = $_POST['tinggi'];

        // Menghitung luas segitiga
        $luas = 0.5 * $alas * $tinggi;

        echo "Luas segitiga dengan alas $alas dan tinggi $tinggi adalah: $luas cm<sup>2</sup>";
    }
    ?>
    
    <form method="post">
        Alas: <input type="text" name="alas"><br>
        Tinggi: <input type="text" name="tinggi"><br>
        <input type="submit" name="hitung" value="Hitung Luas">
    </form>

</body>
</html>