<?php
function art($n = 5) {
    $str = "";
    for ($i = 1; $i <= $n; $i++){
        for ($j = 1; $j <= $i; $j++){
            $str .= " * ";
        }
        $str .= "<br>";
    }
    echo $str;
}

art();
