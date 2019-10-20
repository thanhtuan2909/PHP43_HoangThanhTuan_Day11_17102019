<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Bài 9</title>
    <style type="text/css">
        td, th {
            padding: 0 25px;
        }
        th {
            color: red;
            background: #6dfaff;
        }
        table {
            margin: 0 auto;
        }
    </style>
</head>
<body>
    <table border="1" cellpadding="5" cellspacing="0">
        <tr>
            <th>1</th>
            <th>2</th>
            <th>3</th>
            <th>4</th>
            <th>5</th>
        </tr>
        <tr>
            <?php
            for ($i = 1;$i<=5;$i++){
                echo "<td>";
                for ($j = 1;$j<=10; $j++){
                    echo "$i x $j = " . ($i * $j);
                    echo "<br>";
                }
                echo "</td>";
            }
            ?>
        </tr>
        <tr>
            <th>6</th>
            <th>7</th>
            <th>8</th>
            <th>9</th>
            <th>10</th>
        </tr>
        <tr>
            <?php
            for ($i = 6;$i<=10;$i++){
                echo "<td>";
                for ($j = 1;$j<=10; $j++){
                    echo "$i x $j = " . ($i * $j);
                    echo "<br>";
                }
                echo "</td>";
            }
            ?>
        </tr>
    </table>
</body>
</html>
