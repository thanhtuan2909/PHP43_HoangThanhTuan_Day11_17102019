<?php
    for ($i = 1; $i <= 50; $i++){
        $str = "";
        if ($i == 50) {
            $str .= "$i";
        } else {
            $str .= "$i - ";
        }

        echo "<span style='font-weight: bold;'>$str</span>";
    }
