输入标题内容和日期<br><br>
<form action="15_implode.php" method="post">
    <label>新闻标题：<input type="text" name="title"></label><br><br>
    <label>新闻内容：<input type="text" name="content"></label><br><br>
    <label>新闻日期：<input type="text" name="date"></label><br><br>
    <input type="submit" name="sub" value="提交">
</form>

<?php
    if (isset($_POST['sub'])) {
        unset($_POST['sub']);
        echo implode(',', $_POST);
    }
?>