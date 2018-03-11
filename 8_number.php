<?php
    $str = '';
    $num = 0;
    for ($i = 1; $i < 1000; $i++) {
        if ($i % 2 != 0) {
            $str = $str.$i." ";
            $num++;
        }
        if ($num == 10) {
            $num = 0;
            echo "$str<br >";
            $str = '';
        }
    }
?>