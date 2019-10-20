<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Bài 1</title>
    <style type="text/css">
        span {
            display: block;
            font-weight: bold;
            margin-top: 15px;
        }
    </style>
</head>
<body>
<?php
function chuvi($a, $b){
    return ($a + $b) * 2;
}

function dientich($a, $b){
    return ($a * $b);
}

$a = 10;
$b = 5;
?>
<span>Chiều dài hình chữ nhật = <?php echo $a; ?>m</span>
<span>Chiều rộng hình chữ nhật = <?php echo $b; ?>m</span>
<span>Chu vi hình chữ nhật = <?php echo chuvi($a, $b); ?>m</span>
<span>Diện tích hình chữ nhật = <?php echo dientich($a, $b); ?>m<sup>2</sup></span>
</body>
</html>