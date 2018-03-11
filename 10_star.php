<?php
    $row = 5;
    for ($i = 0; $i < $row; $i++) {
        for ($j = 1; $j < $row - $i; $j++) {
            echo '&nbsp;';
        }
        for ($k = 0; $k <= $i * 2; $k++) {
            echo '星';
        }
        echo '<br >';
    }
?>