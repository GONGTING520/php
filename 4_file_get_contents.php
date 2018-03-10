<?php
    $str = nl2br(file_get_contents('test.txt'));
    echo $str;
?>

<form action="next.php">
    <input type="submit" value="同意注册">
</form>

<form action="index.php">
    <input type="submit" value="我不同意">
</form>