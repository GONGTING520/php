<?php
    echo '<table border=1>';
    for ($i = 0; $i < 100; $i++) {
        if ($i % 2 == 0) {
            $color = '#ddd';
        } else {
            $color = '#999';
        }
        echo "<tr bgColor=$color onmouseover=over(this) onmouseout=out(this)>";
        for ($j = 0; $j < 10; $j++) {
            echo "<td width=50px>$j</td>";
        }
        echo '</tr>';
    }
    echo '</table>';
?>

<<script>
    var iColor = '';
    function over (elem) {
        iColor = elem.bgColor;
        elem.bgColor = 'red';
    }
    function out (elem) {
        elem.bgColor = iColor;
    }
</script>