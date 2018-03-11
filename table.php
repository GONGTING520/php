<?php
    $info = array(
        'user' => array(
            array(1, 'zhangsan', 19, 'male'),
            array(2, 'lisi', 20, 'male'),
            array(3, 'wangwu', 25, 'female'),
        ),
        'score' => array(
            array(1, 100, 99, 10),
            array(2, 45, 78, 90),
            array(3, 45, 90, 87),
        ),
        'connect' => array(
            array(1, 110, 'aa@bb.com'),
            array(2, 220, 'ff@ee.com'),
            array(3, 330, 'uu@rr.com'),
        ),
    );
    foreach ($info as $k => $v) {
        echo '<table border=1>';
        echo "<caption>$k</caption>";
        for ($i = 0; $i < count($v); $i++) {
            echo '<tr>';
            for ($j = 0; $j < count($v[$i]); $j++) {
                echo '<td width=100px>';
                echo $v[$i][$j];
                echo '</td>';
            }
            echo '</tr>';
        }
        echo '</table>';
    }
?>