<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>M3</title>
    <style>
        body {
            background-color: #252525;
            color: #fff;
            font-size: 1.3rem;
        
        }
    </style>
</head>
<body>

<?php
    // Melvin Austin / 10121709 / 3KA18
    $star = 19;
    // Bagian atas Diamond
    for ($i = 1; $i <= $star; $i += 2) {
        for ($j = $star; $j >= $i; $j--) {
            echo "&nbsp;"; 
        }

        for ($k = 1; $k <= $i; $k++) {
            echo "x";
        }
        echo "<br>";
    }

    // Bagian bawah Diamond
    for ($i = 3; $i <= $star; $i += 2) {
        for ($j = 1; $j <= $i; $j++) {
            echo "&nbsp;";
        }
        for ($k = $star; $k >= $i; $k--) {
            echo "x";
        }
        echo "<br>";
    }
?>

</body>
</html>