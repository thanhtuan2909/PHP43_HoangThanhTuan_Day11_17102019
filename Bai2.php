<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Bài 2</title>
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
    function chuVi($a){
        return (4 * $a);
    }

    function dienTich($a){
        return ($a * $a);
    }

    $a = 12;
    ?>

    <span>Cạnh hình vuông = <?php echo $a; ?>m</span>
    <span>Chu vi hình vuông = <?php echo chuVi($a); ?>m</span>
    <span>Diện tích hình vuông = <?php echo dienTich($a); ?>m<sup>2</sup></span>
</body>
</html>