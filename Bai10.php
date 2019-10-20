<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Bài 10</title>
</head>
<body>
    <table border="1" cellspacing="0" cellpadding="0">
        <?php
        for ($i = 1; $i <= 8; $i++){
            echo "<tr>";
            for ($j = 1; $j <= 8; $j++){
                if (($i + $j) % 2 == 0){
                    echo "<td style='width: 50px; height: 50px; background: #000000;'></td>";
                } else {
                    echo "<td style='width: 50px; height: 50px; background: #ffffff;'></td>";
                }
            }
            echo "</tr>";
        }
        ?>
    </table>
</body>
</html>
