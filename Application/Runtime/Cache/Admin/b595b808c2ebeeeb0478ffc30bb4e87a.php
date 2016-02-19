<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>

<html>
<head>
    <title>Page Title</title>
</head>

<body>

<a href="<?php echo U('login/logout');?>">退出</a>
<div>登陆用户ID：<?php echo ($_SESSION["blog"]["user"]["uid"]); ?></div>
<div>登陆用户名：<?php echo ($_SESSION["blog"]["user"]["username"]); ?></div>
<div>最后登录时间：<?php echo (date("Y-m-d H:i:s",$_SESSION["blog"]["user"]["last_login_time"])); ?></div>

</body>
</html>