<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>latihan 6a</title>
    <style>
        .merah {
            width: 50px;
            height: 50px;
            text-align: center;
            line-height: 50px;
            margin: 2px;
            display: inline-block;
            background-color: red;
            border: 2px solid black;
        }

        .abu {
            width: 50px;
            height: 50px;
            text-align: center;
            line-height: 50px;
            margin: 2px;
            display: inline-block;
            background-color: grey;
            border: 2px solid black;
        }
    </style>
</head>

<body>
    <?php
    if (isset($_GET["angka"])) {
        $angka = $_GET["angka"];
        for ($i = $angka; $i >= 1; $i--) {
            for ($t = 1; $t <= $i; $t++) {
                if ($i % 2 == 0) {
                    echo "<div class= 'merah'>$i</div>";
                } else {
                    echo "<div class= 'abu'>$i</div>";
                }
            }
            echo "<br>";
        }
    } else {
    }

    ?>
</body>

</html>