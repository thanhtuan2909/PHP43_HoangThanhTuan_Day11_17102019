<?php
function art($n = 5){
    for ($i = 1; $i <= $n; $i++){
        for ($j = 1; $j <= $i; $j++){
            {
                echo " * ";
            }
        }
        echo "<br>";
    }
    for ($m = $n-1; $m >= 0; $m--){
        for ($k = 1; $k <= $m; $k++){
            {
                echo " * ";
            }
        }
        echo "<br>";
    }
}

art(10);
