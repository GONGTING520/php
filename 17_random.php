随机输出5个随机数<br><br>

<?php
    $arr = array();
    $min = 0;
    $max = 9;
    $count = 5;
    $num = 0;
    while ($num < $count) {
        $arr[] = mt_rand($min, $max);
        $ary = array_unique($arr);
        $num = count($ary);
    }
    echo "随机数: ".implode(' ', $ary);
?>