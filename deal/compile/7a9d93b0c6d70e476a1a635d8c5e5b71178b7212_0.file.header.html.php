<?php
/* Smarty version 3.1.30, created on 2017-05-11 08:45:46
  from "C:\wamp\www\deal\template\index\header.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5914089a16b3e7_76193266',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7a9d93b0c6d70e476a1a635d8c5e5b71178b7212' => 
    array (
      0 => 'C:\\wamp\\www\\deal\\template\\index\\header.html',
      1 => 1494484830,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5914089a16b3e7_76193266 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>二手交易系统</title>
</head>
<link rel="stylesheet" href="<?php echo CSS_PATH;?>
/default.css">
<link rel="stylesheet" href="<?php echo CSS_PATH;?>
/index.css">
<?php echo '<script'; ?>
 src="<?php echo JS_PATH;?>
/jquery-min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo JS_PATH;?>
/index.js"><?php echo '</script'; ?>
>
<body>
<!--top-->
<div class="topbox">
    <div class="top">
        <div class="topleft"><a href="index.php">IDLE</a><span>让您的物品有用起来</span></div>
        <div class="sousuo">
            <form action="index.php?f=lists&a=sousuo" method="post">
                <input type="text" name="show" id="sousuo" placeholder="请输入您想要的商品">
                <input type="submit" id="sousuobtn" value="搜索">
            </form>
        </div>
        <ul class="topright">
            <?php if (!isset($_smarty_tpl->tpl_vars['indexlogin']->value)) {?>
            <li><a href="index.php?f=login">登录</a>|</li>
            <li><a href="index.php?f=login&a=reg">注册</a></li>
            <?php } else { ?>
            <li><?php echo $_smarty_tpl->tpl_vars['result']->value['nichen'];?>
，欢迎您！</li>
            <li><a href="index.php?f=geren&uid=<?php echo $_smarty_tpl->tpl_vars['result']->value['uid'];?>
" class="geren">个人中心</a></li>
            <li><a href="index.php?f=login&a=tui" class="geren">退出</a></li>
            <?php }?>
            <li><a href="index.php?a=setshow&id=<?php echo $_smarty_tpl->tpl_vars['result']->value['uid'];?>
" class="fabu">发布商品</a></li>
        </ul>
    </div>
</div>
<!--top end-->
<?php }
}
