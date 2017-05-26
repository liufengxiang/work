<?php
/* Smarty version 3.1.30, created on 2017-04-28 17:17:03
  from "C:\wamp\www\deal\template\index\login.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_59035cef02bf78_72408858',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4563dc5dd39e201d6cc2cdbf4c37a0d93ac5e661' => 
    array (
      0 => 'C:\\wamp\\www\\deal\\template\\index\\login.html',
      1 => 1493392562,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_59035cef02bf78_72408858 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title>登录</title>
    <link rel="stylesheet" href="<?php echo CSS_PATH;?>
/default.css">
    <link rel="stylesheet" href="<?php echo CSS_PATH;?>
/login.css">
    <?php echo '<script'; ?>
 src="<?php echo JS_PATH;?>
/jquery-min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo JS_PATH;?>
/jquery.validate.js"><?php echo '</script'; ?>
>
</head>
<body>
<div class="top">
    <a href="<?php echo FILE_URL;?>
">IDLE</a>
    <i>让您的物品使用起来</i>
</div>
<div class="bigbox">
    <form action="index.php?m=index&f=login&a=onLogin" method="post" id="form">
        <div class="lable">
            <input type="text" placeholder="请输入您的账号" name="user" autocomplete="off">
        </div>
        <div class="lable">
            <input type="password" placeholder="请输入密码" name="pass" autocomplete="off">
        </div>
        <div class="yanzheng lable">
            <input type="text" id="code" placeholder="验 证 码" name="code">
            <img src="index.php?m=index&f=login&a=code" alt="验证码" title="点击更换" class="code"
                 onclick="this.src='index.php?m=index&f=login&a=code&'+Math.random()">
        </div>
        <input type="submit" id="dlbtn" value="登录">
        <p>还没有学院账号？请点击<a href="index.php?m=index&f=login&a=reg" class="reg">立即注册</a></p>
    </form>
</div>
</body>
</html><?php }
}
