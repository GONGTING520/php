<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>update</title>
    <base href="<?php echo site_url()?>">
</head>
<body>
    <form action="welcome/update_user/<?php echo $user->user_id?>" method="post">
        <p>
            <label>用户名 <input type="text" name="username" value="<?php echo $user->username?>"></label>
        </p>
        <p>
            <label>用户密码 <input type="text" name="pwd" value="<?php echo $user->user_password?>"></label>
        </p>
        <p>
            <label>真实姓名 <input type="text" name="realname" value="<?php echo $user->realname?>"></label>
        </p>
        <p>
            <label>电话号码 <input type="text" name="tel" value="<?php echo $user->tel?>"></label>
        </p>
        <input type="submit" value="确定">
    </form>
</body>
</html>