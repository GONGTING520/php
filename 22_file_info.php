获取文件信息
<form enctype="multipart/form-data" action="22_file_info.php" method="post">
    <input type="file" name="file"><br>
    <input type="submit" name="sub" value="提交">
</form>

<?php
    if(isset($_POST['sub'])){
        echo '<table width=400px>';
        echo '<tr><td align=center>上传文件信息：文件名：'.$_FILES['file']['name'].'<br></td></tr>';
        echo '<tr><td align=center>文件类型：'.explode('/', $_FILES['file']['type'])[1].'<br></td></tr>';
        echo '<tr><td align=center>文件大小：'.ceil($_FILES['file']['size']/1024).'KB<br></td></tr>';
        echo '</table>';
    }
?>