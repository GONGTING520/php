<?php
    if(isset($_POST['sub'])){
        $first = $_POST['first'];
        $second = $_POST['second'];
        $operation = $_POST['operation'];
        switch ($operation) {
            case '+':
                $res = $first + $second;
                break;
            case '-':
                $res = $first - $second;
                break;
            case '*':
                $res = $first * $second;
                break;
            case '/':
                $res = $first / $second;
                break;
            case '%':
                $res = $first % $second;
                break;
        }
    }
?>

<meta charset="UTF-8">

<form action="3_calculator.php" method="post" style="width:600px;text-align:center;">
    <h1>计算器</h1>
    <table border=1 width=600>
        <tr>
            <td>
                <input type="text" name="first" value=<?php echo $first;?> >
            </td>
            <td>
                <select name="operation">
                    <option value="+" <?php echo $operation=='+'?'selected':'';?> >+</option>
                    <option value="-" <?php echo $operation=='-'?'selected':'';?> >-</option>
                    <option value="*" <?php echo $operation=='*'?'selected':'';?> >x</option>
                    <option value="/" <?php echo $operation=='/'?'selected':'';?> >/</option>
                    <option value="%" <?php echo $operation=='%'?'selected':'';?> >%</option>
                </select>
            </td>
            <td>
                <input type="text" name="second" value=<?php echo $second;?> >                
            </td>
            <td>
                <input type="submit" value="计算" name="sub">
            </td>
        </tr>
        <?php
            if(isset($_POST['sub'])){
                echo "<tr><td>结果为：$first $operation $second = $res</td></tr>";
            }
        ?>
    </table>
</form>