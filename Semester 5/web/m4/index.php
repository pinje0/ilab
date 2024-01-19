<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>m4</title>
    <style>
        body {
            background-color: #252525;
            color: #fff;
            padding: 2rem;
            font-size: 1.2rem;
        }

        div {
            display: inline;
            padding: 8px;
        }
    </style>
</head>
<body>
    <?php
        // Melvin Austin / 10121709 / 3KA18
        $nilai =array (
            array(90,65,83),
            array(90,78,87),
            array(78,90,78)
        );

        echo "<strong>Matriks A :</strong><br><br>";
        echo $nilai[0][0]."<div></div>".$nilai[0][1]."<div></div>".$nilai[0][2]."<br><br>";
        echo $nilai[1][0]."<div></div>".$nilai[1][1]."<div></div>".$nilai[1][2]."<br><br>";
        echo $nilai[2][0]."<div></div>".$nilai[2][1]."<div></div>".$nilai[2][2]."<br><br>";
    ?>
</body>
</html>