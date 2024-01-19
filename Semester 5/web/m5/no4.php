

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>No 4</title>
    <style>
        body {
            background-color: #252525;
            color: #fff;
            font-size: 1.4rem;
            margin-bottom: 1rem;
        }

        .container {
            padding: 0.8rem;
        }

    </style>
</head>
<body>
<?php
    // Melvin Austin / 10121709 / 3K18
    $hargaBuku = [50000, 75000, 60000, 85000, 70000];
    
    $totalHarga = 0;
    
    foreach ($hargaBuku as $harga) {
        $totalHarga += $harga;
    }
    
    echo "Harga buku-buku yang terlaris:<br>";
    foreach ($hargaBuku as $index => $harga) {
        echo "<div class='container'>";
        echo "Buku ", ($index + 1), ": Rp", number_format($harga), "<br>";
        echo "</div>";
    }

    echo "<br>Total Harga Semua Buku: Rp", number_format($totalHarga), "<br>";
?>
</body>
</html>