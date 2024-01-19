<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>No 2</title>
    <style>
        body {
            background-color: #252525;
            color: #fff;
            font-size: 1.4rem;
            margin-bottom: 1rem;
        }


    </style>
</head>
<body>
    <?php
    // Melvin Austin / 10121709 / 3KA18
    $suhu = 15;
    
    if ($suhu < 5) {
        echo "Suhu Sekarang $suhu derajat, Cuacanya Dingin";
    } elseif ($suhu >= 5 && $suhu <= 20) {
        echo "Suhu Sekarang $suhu derajat, Cuacanya Sejuk";
    } elseif ($suhu > 20 && $suhu < 30) {
        echo "Suhu Sekarang $suhu derajat, Cuacanya Hangat";
    } else {
        echo "Suhu Sekarang $suhu derajat, Cuacanya Panas";
    }
    ?>
</body>
</html>