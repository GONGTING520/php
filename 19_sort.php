根据商品上市年份排序

<table border=1>
    <thead>
        <tr>
            <td>商品顺序</td>
            <td width=200px>商品名称</td>
        </tr>
    </thead>
    <tbody>
        <?php
            $arr = array('2012 Macbook Pro','2009 iMac',
            '2011 Macbook Air','2007 iPad1');
            if (isset($_POST['zheng'])) {
                $falg = sort($arr);
                if ($flag) {
                    foreach ($arr as $k => $v) {
                        echo "<tr><td>" . ( $k + 1 ) . "</td><td>$v</td></tr>";
                    }
                }
            }
            if (isset($_POST['fan'])) {
                $falg = rsort($arr);
                if ($flag) {
                    foreach ($arr as $k => $v) {
                        echo "<tr><td>" . ( $k + 1 ) . "</td><td>$v</td></tr>";
                    }
                }
            }
            foreach ($arr as $k => $v) {
                echo "<tr><td>" . ( $k + 1 ) . "</td><td>$v</td></tr>";
            }
        ?>
    </tbody>
</table>

<form action="19_sort.php" method="post">
    <input type="submit" name="zheng" value="正序">
    <input type="submit" name="fan" value="反序">
</form>
