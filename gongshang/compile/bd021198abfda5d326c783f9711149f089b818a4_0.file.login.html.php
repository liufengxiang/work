<?php
/* Smarty version 3.1.30, created on 2017-04-13 12:55:57
  from "E:\wamp\wamp\www\gongshangs1\template\index\login.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_58ef593d860238_82087839',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'bd021198abfda5d326c783f9711149f089b818a4' => 
    array (
      0 => 'E:\\wamp\\wamp\\www\\gongshangs1\\template\\index\\login.html',
      1 => 1492060197,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_58ef593d860238_82087839 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title></title>
    <link rel="stylesheet" href="<?php echo CSS_PATH;?>
/index/login.css">
    <?php echo '<script'; ?>
 src="<?php echo JS_PATH;?>
/jquery-min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo JS_PATH;?>
/jquery.validate.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo JS_PATH;?>
/login.js"><?php echo '</script'; ?>
>
</head>
<body>
<div class="lktop">
	<a href="<?php echo FILE_URL;?>
"><img src="<?php echo INDEX_PATH;?>
/images/logo1.png" title="返回首页" alt=""></a>
</div>
<div class="bigbox">
	<form action="index.php?m=index&f=login&a=onLogin" method="post" id="form">
		<div class="lable">
		<input type="text" placeholder="请输入您的账号" id="username" name="username" autocomplete="off">
		</div>
		<div class="lable">
		<input type="password" placeholder="请输入密码" id="Password1" name="password" autocomplete="off">
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
