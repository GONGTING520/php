<table border=1>
    <caption>110栏决赛成绩</caption>
    <thead>
        <tr align=center>
            <td>排名</td>
            <td>号码</td>
            <td>姓名</td>
            <td>国际</td>
            <td>生日</td>
            <td>跑道</td>
            <td>成绩</td>
        </tr>
    </thead>
    <tbody>
        <?php
            $color = array('#77f', '#ff0', '#f77');
            $arr = array(
                array('3236', '阿里斯-梅里斯', '美国', '1985年07年24日', 6, 12.92),
                array('3246', '阿里斯-梅里斯', '美国', '1986年04年24日', 4, 13.04),
                array('2182', '阿里斯-梅里斯', '美国', '1990年06年24日', 7, 13.12),
                array('1804', '阿里斯-梅里斯', '美国', '1990年03年24日', 2, 13.39),
                array('1125', '阿里斯-梅里斯', '美国', '1988年06年24日', 8, 13.4),
                array('1477', '阿里斯-梅里斯', '美国', '1991年07年24日', 9, 13.43),
            );
            for ($i = 0; $i< count($arr); $i++) {
                $bg = $color[$i]==null?'#ccc':$color[$i];
                echo '<tr bgColor='.$bg.'>';
                echo "<td>" . ($i + 1) . "</td>";                
                for ($j = 0; $j < count($arr[$i]); $j++) {
                    echo "<td>".$arr[$i][$j]."</td>";
                }
                echo '</tr>';                
            }
        ?>
    </tbody>
</table>
