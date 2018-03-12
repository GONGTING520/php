<div style="width:500px;text-align:center;padding:5px 0">查看服务器信息</div>
<table width=500px border=1>
    <caption>显示当前脚本运行信息</caption>
    <?php
        echo "<tr><td>软件版本：</td><td align=center>".$_SERVER[SERVER_SOFTWARE]."</td></tr>";
        echo "<tr><td>端口：</td><td align=center>".$_SERVER[SERVER_PORT]."</td></tr>";
        echo "<tr><td>服务名：</td><td align=center>".$_SERVER[SERVER_NAME]."</td></tr>";
        echo "<tr><td>文档路径：</td><td align=center>".$_SERVER[DOCUMENT_ROOT]."</td></tr>";
        echo "<tr><td>文件路径：</td><td align=center>".$_SERVER[SCRIPT_FILENAME]."</td></tr>";
        echo "<tr><td>运行时间：</td><td align=center>".date("Y-m-d H:i:s", time())."</td></tr>";
    ?>
</table>
