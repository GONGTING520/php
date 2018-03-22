<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>success</title>
    <base href="<?php echo site_url()?>">
</head>
<body>
    <p>
        欢迎,<?php echo $this->session->userdata('name')?>
    </p>
    <p>
        <a href="welcome/user_list">所有用户</a>
    </p>
</body>
</html>