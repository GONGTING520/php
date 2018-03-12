<div class="title">福利彩票号码生成器</div>
<form action="16_caipiao.php" method="post">
<input class="new" name="sub" type="submit" value="单击生成新号码">
</form>

<?php
    $arr = array();
    if (isset($_POST['sub'])) {
        for ($i = 1; $i <= 5; $i++) {
            $arr[$i] = array();
            for ($j = 0; $j < 7; $j++) {
                $length = count($arr[$i]);
                $ran = mt_rand(1, 30);
                $arr[$i][$ran] = $ran;
                if (count($arr[$i]) == $length) {
                    $j--;
                }
            }
            echo '<br>';
            $str = implode(',', $arr[$i]);
            echo "第 $i 注:$str<br>";
        }
    }
?>

<style>
.title {
    width: 300px;
    text-align: center;
    padding: 5px 0;
}
.new{
    width: 300px;
    background: #fff;
    border: 1px solid;
    font-size: 20px;
    cursor: pointer;
}
</style>