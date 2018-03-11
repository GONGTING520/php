<h1>输入行列</h1>
<form action="9_99chengfa.php" method="get">
    <label>输入列：
        <select multiple name="col">
            <option value="1">第一列</option>
            <option value="2">第二列</option>
            <option value="3">第三列</option>
            <option value="4">第四列</option>
            <option value="5">第五列</option>
            <option value="6">第六列</option>
            <option value="7">第七列</option>
            <option value="8">第八列</option>
            <option value="9">第九列</option>
        </select>
    </label>
    <br >
    <br >
    <label>输入行：<input type="text" name="row"></label>
    <br >
    <br >
    <input type="submit" value="生成99乘法表" name="sub">
    <input type="reset" value="重置行列">
</form>

<?php
    if (isset($_GET['sub'])) {
        $i = $j = 1;
        $row = $_GET['row'];
        // $row = $_GET['row'];
        $col = [ 3, 6, 9];
        while (true) {
            for ($k = 0; $k < count($col); $k++) {
                if ($j == $col[$k]) {
                    $j++;
                    continue;
                }
            }
            if ($j <= $i && $j <= 9) {
                echo "$i * $j = " . $i * $j . " ";
            } else {
                if ($i == $row) {
                    break;
                }
                echo '<br >';
                $i++;
                $j = 1;
                continue;
            }
            $j++;
        }
    }
?>