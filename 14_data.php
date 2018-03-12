<?php
    $arr = Array(
        '2018-02-11' => '外地出差-1',
        '2018-03-11' => '外地出差-2',
        '2018-04-11' => '外地出差-3',
    );
    if (isset($_POST['sub'])) {
        $date = $_POST['date'];
        if (!$date) {
            $str = "没有选择日期";
        } else {
            foreach ($arr as $k => $v) {
                if ($k == $date) {
                    $str = "<script>alert('$k 日备忘：$v ');</script>";
                    break;
                } else {
                    $str = "<script>alert('无备忘');</script>";
                }
            }
        }
        echo $str;
    }
?>

<h3>单击查询当前日期</h3>
输入查询日期:
<form action="14_data.php" method="post">
    <input type="date" name="date">
    <br>
    <br>
    <input type="submit" name="sub" value="查询">
    <input type="reset" vaule="重置">
</form>
