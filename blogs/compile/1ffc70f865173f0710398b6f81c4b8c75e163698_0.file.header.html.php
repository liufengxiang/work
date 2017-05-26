<?php
/* Smarty version 3.1.30, created on 2017-05-08 11:02:02
  from "C:\wamp\www\blogs\template\index\header.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5910340a335e78_54575927',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1ffc70f865173f0710398b6f81c4b8c75e163698' => 
    array (
      0 => 'C:\\wamp\\www\\blogs\\template\\index\\header.html',
      1 => 1494234120,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5910340a335e78_54575927 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <title>我的博客</title>
</head>
<link rel="stylesheet" href="<?php echo CSS_PATH;?>
/header.css">
<style>
    .logo{
        float: left;
        font-size: 34px;
        color:#fff;
        font-family: "Comic Sans MS", cursive;
    }
    .topright{
        float: right;
    }
    .topright>li{
        float: left;
        color: #fff;
        margin: 0 10px;
    }
    .topright>li>a{
        color: #fff;
        padding:8px 20px;
        transition: all .5s;
        border-radius: 5px;
        border: 1px solid transparent;
    }
    .topright>li>a:hover{
        border: 1px solid #fff;
    }
    .topright>.setshow>a{
        border: 1px solid #fff;
        padding: 10px 25px;
    }
    .topright>.setshow>a:hover{
        background: #333;
        border: 1px solid transparent;
    }
</style>
<?php echo '<script'; ?>
 src="<?php echo JS_PATH;?>
/jquery.js"><?php echo '</script'; ?>
>
<body style="background: #31302E;">
<div class="topbox">
    <div class="top">
        <a href="index.php" class="logo">+Blogs</a>
        <ul class="topright">
            <?php if ($_smarty_tpl->tpl_vars['login']->value != "yes") {?>
            <li><a href="index.php?a=login">登录</a></li>
            <li><a href="index.php?a=zhuce">注册</a></li>
            <?php } else { ?>
            <li>欢迎您！</li>
            <li><a href="index.php?a=geren"><?php echo $_smarty_tpl->tpl_vars['se']->value;?>
</a></li>
            <li><a href="index.php?a=exits">退出</a></li>
            <?php }?>
            <li class="setshow"><a href="index.php?a=setshow">写文章</a></li>
        </ul>
    </div>
</div><?php }
}
