

<h1>输入行列生成表格</h1>
<form action="6_new_table.php" method="post">
    <label>输入行：<input type="text" name="row"></label>
    <br >
    <br >
    <label>输入列：<input type="text" name="col"></label>
    <br >
    <br >
    <input type="submit" value="生成表格" name="sub">
    <input type="reset" value="重置行列">
</form>

<?php
    if (isset($_POST['sub'])) {
        $row = $_POST['row'];
        $col = $_POST['col'];
        echo '<table border=1>';
        echo "<caption>用户动态输出表格：行$row,列$col</caption>";
        for ($i = 0; $i < $row; $i++) {
            if ($i % 2 == 0) {
                $color = '#ddd';
            } else {
                $color = '#999';
            }
            echo "<tr bgColor=$color>";
            for ($j = 0; $j < $col; $j++) {
                echo "<td width=50px>$j</td>";
            }
            echo '</tr>';
        }
        echo '</table>';
    }
?>