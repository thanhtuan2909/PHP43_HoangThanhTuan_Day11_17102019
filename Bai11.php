<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Bài 11</title>
    <style type="text/css">
        td {
            width: 30px;
            height: 30px;
            text-align: center;
        }
    </style>
</head>
<body>
<table>
    <?php
    function isSNT($num)
    {
        if ($num == 1) {
            return false;
        } else {
            for ($i = 2; $i <= sqrt($num); $i++) {
                if ($num % $i == 0) {
                    return false;
                }
            }
        }
        return true;
    }

    echo "<table border='1' cellpadding='5' cellspacing='0'>";
    echo "<tr>";
    for ($s = 1; $s <= 10; $s++) {
        if (isSNT($s)) {
            echo "<td style='background: #1DE12C'>$s</td>";
        } else {
            echo "<td>$s</td>";
        }
    }
    echo "</tr>";
    echo "<tr>";
    for ($s = 11; $s <= 20; $s++) {
        if (isSNT($s)) {
            echo "<td style='background: #1DE12C'>$s</td>";
        } else {
            echo "<td>$s</td>";
        }
    }
    echo "</tr>";
    echo "<tr>";
    for ($s = 21; $s <= 30; $s++) {
        if (isSNT($s)) {
            echo "<td style='background: #1DE12C'>$s</td>";
        } else {
            echo "<td>$s</td>";
        }
    }
    echo "</tr>";
    echo "<tr>";
    for ($s = 31; $s <= 40; $s++) {
        if (isSNT($s)) {
            echo "<td style='background: #1DE12C'>$s</td>";
        } else {
            echo "<td>$s</td>";
        }
    }
    echo "</tr>";
    echo "<tr>";
    for ($s = 41; $s <= 50; $s++) {
        if (isSNT($s)) {
            echo "<td style='background: #1DE12C'>$s</td>";
        } else {
            echo "<td>$s</td>";
        }
    }
    echo "</tr>";
    echo "<tr>";
    for ($s = 51; $s <= 60; $s++) {
        if (isSNT($s)) {
            echo "<td style='background: #1DE12C'>$s</td>";
        } else {
            echo "<td>$s</td>";
        }
    }
    echo "</tr>";
    echo "<tr>";
    for ($s = 61; $s <= 70; $s++) {
        if (isSNT($s)) {
            echo "<td style='background: #1DE12C'>$s</td>";
        } else {
            echo "<td>$s</td>";
        }
    }
    echo "</tr>";
    echo "<tr>";
    for ($s = 71; $s <= 80; $s++) {
        if (isSNT($s)) {
            echo "<td style='background: #1DE12C'>$s</td>";
        } else {
            echo "<td>$s</td>";
        }
    }
    echo "</tr>";
    echo "<tr>";
    for ($s = 81; $s <= 90; $s++) {
        if (isSNT($s)) {
            echo "<td style='background: #1DE12C'>$s</td>";
        } else {
            echo "<td>$s</td>";
        }
    }
    echo "</tr>";
    echo "<tr>";
    for ($s = 91; $s <= 100; $s++) {
        if (isSNT($s)) {
            echo "<td style='background: #1DE12C'>$s</td>";
        } else {
            echo "<td>$s</td>";
        }
    }
    echo "</tr>";
    echo "</table>";
    ?>
</table>
</body>
</html>