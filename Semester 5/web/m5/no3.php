

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>No 3</title>
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
    $temanAndi = array(
        'Melvin' => array('umur' => 15, 'hobi' => 'Tidur'),
        'Austin' => array('umur' => 18, 'hobi' => 'Slot'),
        'Korwa' => array('umur' => 14, 'hobi' => 'Dugem')
    );
    
    $targetUmur = 15;
    
    echo "<div class='container'>";
    echo "Teman - teman Andi yang berumur $targetUmur tahun:<br>";
    
    foreach ($temanAndi as $nama => $info) {
        if ($info['umur'] == $targetUmur) {
            echo "- $nama\n";
        }
    }
    echo "</div>";
?>
</body>
</html>