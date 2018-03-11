<form action="11_game.php" method="post">
你出:
<select name="select" onchange=change(this)>
    <option value="3">拳头</option>
    <option value="2">剪刀</option>
    <option value="1">布</option>
</select>
<span id="selected">拳头</span>
<input type="submit" name="sub" value="提交">
</form>

<script>
    var selected = document.getElementById('selected');
    function change (elem) {
        switch (elem.value) {
            case '1':
                selected.innerHTML = '布';
                break;
            case '2':
                selected.innerHTML = '剪刀';
                break;
            case '3':
                selected.innerHTML = '拳头';
                break;
        }
    }
</script>

<?php
    if (isset($_POST['sub'])) {
        $select = $_POST['select'];
        $random = mt_rand(1, 3);
        switch ($select) {
            case 1:
                echo '你出的是布！<br>';
                break;
            case 2:
                echo '你出的是剪刀！<br>';
                break;
            case 3:
                echo '你出的是拳头！<br>';
                break;
        }
        if ($select - $random == 1 || $select - $random == -2) {
            echo '你获胜！';
        } else {
            echo '你输了！';
        }
    }
?>