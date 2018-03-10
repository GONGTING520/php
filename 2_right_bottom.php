<?php
    echo '=========第三种九九乘法表===========';
    echo '<table border=1>';
    for($i = 9; $i > 0; $i--){
        echo '<tr>';
        for($k = 9 - $i; $k > 0; $k--){
            echo '<td></td>';
        }
        for($j = 1; $j <= $i; $j++){
            echo "<td>$i * $j = " . $i * $j . '</td>';
        }
        echo '</td>';
    }
    echo '</table>';    
?>