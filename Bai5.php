<?php
function sum($n) {
    $sum = 0;
    $str = '';
    for ($i = 1; $i <= $n; $i++){
        if ($i == $n){
            $str .= "1/$i";
        } else {
            $str .= "1/$i + ";
        }
        $sum += 1/(float)$i;
    }
    echo "<strong>S($n) = $str = $sum</strong>";
}

$n = 10;
echo sum($n);

