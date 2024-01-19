<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>No 1</title>
    <style>
        body {
            background-color: #252525;
            color: #fff;
            font-size: 1.4rem;
            margin-bottom: 1rem;
        }

        .container {
            padding-top: 0.8rem;
            padding-bottom: 0.8rem;
        }
    </style>
</head>
<body>
    <?php
    // Melvin Austin / 10121709 / 3KA18
    for ($i = 1; $i <= 6; $i++) {
        echo "<div class='container'>";
        if ($i % 2 == 1) {
            $materi = 'PBW';
        } else {
            $materi = 'IMK';
        }
    

        $noKelas = ceil($i / 2); 
        $kelas = '3KA0' . $noKelas;
    
        $output = "Praktikum LABSI materi $materi untuk kelas $kelas, pada minggu ke $i";
        echo $output;
        echo "</div>";
    }
    ?>
</body>
</html>