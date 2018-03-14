<?php
    $arr = array (
        "tom" => "123.5",
        "ben" => "151.8",
        "nana" => "101.4",
        "lily" => "93.1",
    );
    if(isset($_POST['sub'])){
        $name = $_POST['name'];
        if(array_key_exists($name, $arr)){
            $str = "$name 成绩为$arr[$name]分！";
        } else {
            $str = '无此人的成绩！';
        }
        echo "<script>alert('$str');</script>";
    }
?>

请输入查询需要的姓名：
<form action="23_serach_score.php" method="post">
    姓名: <input type="text" name="name"><br>
    <input type="submit" name="sub" value="提交">
</form>
