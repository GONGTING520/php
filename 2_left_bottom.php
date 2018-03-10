<?php
    echo '=========第二种九九乘法表===========';
    echo '<table border=1>';
    for($i = 9; $i > 0; $i--){
        echo '<tr>';
        for($j = 1; $j <= $i; $j++){
            echo "<td>$i * $j = " . $i * $j . '</td>';
        }
        echo '</td>';
    }
    echo '</table>';    
?>