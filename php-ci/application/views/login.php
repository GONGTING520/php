<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>regist</title>
    <base href="<?php echo site_url()?>">
</head>
<body>
    <p>登陆：</p>
    <form action="welcome/check_login" method="post">
        用户名：<input type="text" name="username"><br><br>
        密码：<input type="password" name="pwd"><br><br>
        <input type="submit" value="登陆">
    </form>
</body>
</html>