<?php
	echo '===========使用do-while循环打印的99乘法表===============<br>';
	$i = 1;
	do {
		$j = 1;
		do {
			echo "$i * $j = " . $i * $j . " ";
			$j++;
		} while($i != 1 && $j <= $i);
		echo '<br >';
		$i++;
	} while ($i <= 9);
?>