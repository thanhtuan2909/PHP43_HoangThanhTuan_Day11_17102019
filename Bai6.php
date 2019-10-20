<?php
function tinhTong($n = 500){
    $sum = 0;
    for ($i = 1; $i <= $n; $i++){
        $sum += $i;
    }
    return $sum;
}

echo "<b>Tổng các số từ 1 - 500 = </b>" . "<strong>" . tinhTong() . "</strong>";
