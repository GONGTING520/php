<h3>检测文件后缀</h3>
<form enctype="multipart/form-data" action="13_test_file.php" method="post">
    <input type="file" name="file">
    <br>
    <input type="submit" name="sub" value="检测">
</form>

<?php
    if (isset($_POST['sub'])) {
        $file = $_FILES['file'];
        $strArr = explode('.', $file['name']);
        $str = $strArr[count($strArr) - 1];
        echo "文件扩展名为：$str<br>";
        $b = move_uploaded_file($file['tmp_name'], "./img/name".time().".$str");
        if ($b) {
            echo '移动成功';
        } else {
            echo '移动失败';
        }
    }
?>