<?php
/* Smarty version 3.1.30, created on 2017-03-13 06:24:11
  from "C:\wamp\www\ajax\mvc\template\index\header.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_58c62cfb13cdd2_29491054',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '029ad90176dc7ab235e7dd587e313c5a97bbb033' => 
    array (
      0 => 'C:\\wamp\\www\\ajax\\mvc\\template\\index\\header.html',
      1 => 1489382649,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_58c62cfb13cdd2_29491054 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <title>我的博客</title>
</head>
<link rel="stylesheet" href="<?php echo CSS_PATH;?>
/bootstrap.min.css">
<link rel="stylesheet" href="<?php echo CSS_PATH;?>
/header.css">
<?php echo '<script'; ?>
 src="<?php echo JS_PATH;?>
/jQuery.js"><?php echo '</script'; ?>
>
<body>
<div class="topbox">
    <div class="top">
        <a href="index.php" class="logo">+Blogs</a>
        <ul class="topright">
            <?php if ($_smarty_tpl->tpl_vars['login']->value != "yes") {?>
            <li class="login"><a href="index.php?a=login">登录</a></li>
            <li class="zhuce"><a href="index.php?a=zhuce">注册</a></li>
            <?php } else { ?>
            <li style="line-height: 58px;">欢迎您！</li>
            <li class="login"><a href="index.php?a=geren"><?php echo $_smarty_tpl->tpl_vars['se']->value;?>
</a></li>
            <li class="zhuce"><a href="index.php?a=exits">退出</a></li>
            <?php }?>
            <li class="setshow"><a href="index.php?a=setshow">写文章</a></li>
        </ul>
    </div>
</div><?php }
}
