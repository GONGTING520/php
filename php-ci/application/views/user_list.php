<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>user_list</title>
    <base href="<?php echo site_url()?>">
    <style>
        table{
            border-collapse: collapse;
            text-align: center;
        }
        table td,
        table th{
            width: 120px;
            height: 30px;
            border: 1px solid;
        }
    </style>
</head>
<body>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>用户名</th>
                <th>真实姓名</th>
                <th>电话号码</th>
                <th>操作</th>
            </tr>
        </thead>
        <tbody>
            <?php 
                foreach($users as $user){
            ?>
            <tr>
                <td><?php echo $user->user_id?></td>
                <td><?php echo $user->username?></td>
                <td><?php echo $user->realname?></td>
                <td><?php echo $user->tel?></td>
                <td><a href="welcome/update/<?php echo $user->user_id?>">修改</a>|<a href="welcome/delete_user/<?php echo $user->user_id?>" onclick=delete_user>删除</a></td>
            </tr>
            <?php 
                }
            ?>
        </tbody>
    </table>

    <script>
        function delete_user(){
            if(!confirm("是否删除？")){
                return false;
            }
        }
    </script>
</body>
</html>