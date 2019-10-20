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
    function chuVi($r){
        return (2 * 3.14 * $r);
    }

    function dienTich($r){
        return (3.14 * $r * $r);
    }

    $r = 6;
    ?>

    <span>Đường kính hình tròn = <?php echo 2*$r; ?>m</span>
    <span>Chu vi hình tròn = <?php echo chuVi($r); ?>m</span>
    <span>Diện tích hình tròn = <?php echo dienTich($r); ?>m<sup>2</sup></span>
</body>
</html>