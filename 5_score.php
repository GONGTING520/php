<?php
    if (isset($_POST['sub'])) {
        $score = $_POST['score'];
        if (is_numeric($score)) {
            if ($score < 0) {
                $str = '您的成绩不能为负数!';
            }else {
                if ($score >= 80) {
                    $str = '您的成绩为优秀!';
                }else if ($score >= 60) {
                    $str = '您的成绩为及格!';            
                }else {
                    $str = '您的成绩为不及格!';            
                }
            }
        }else {
            $str = '您输入的不是数字!';
        }
        echo "<script>alert('$str');</script>";
    }

?>

<h1>输入分数查询成绩</h1>
<form action="5_score.php" method="post">
    <label>分数：<input type="text" name="score"></label>
    <br >
    <br >
    <input type="submit" value="提交查询" name="sub">
    <input type="reset" value="重置分数">
</form>
