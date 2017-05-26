<?php
/* Smarty version 3.1.30, created on 2017-04-25 16:39:28
  from "C:\wamp\www\deal\template\admin\login.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_58ff5fa0a44f78_25863588',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5ac6708fbf72c2f8624bfd23b8863acf1059a06a' => 
    array (
      0 => 'C:\\wamp\\www\\deal\\template\\admin\\login.html',
      1 => 1493112988,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_58ff5fa0a44f78_25863588 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>登录</title>
</head>
<link rel="stylesheet" href="<?php echo CSS_PATH;?>
/default.css">
<link rel="stylesheet" href="<?php echo CSS_PATH;?>
/adminlogin.css">
<body>
<div class="box">
    <h1>登录</h1>
    <form action="index.php?m=admin&a=yanzheng" method="post">
        <input type="text" name="user" placeholder="请输入您的账户">
        <input type="password" name="pass" placeholder="请输入密码">
        <div class="yanzhengbox">
            <input type="text" name="code" id="code" autocomplete placeholder="验证码">
            <img onclick="this.src='index.php?m=admin&a=code'" src="index.php?m=admin&a=code" alt="">
        </div>
        <input type="submit" id="login" value="登录">
    </form>
</div>
</body>
</html><?php }
}
