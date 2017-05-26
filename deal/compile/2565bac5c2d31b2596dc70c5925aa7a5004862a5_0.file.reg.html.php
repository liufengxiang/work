<?php
/* Smarty version 3.1.30, created on 2017-04-28 17:16:59
  from "C:\wamp\www\deal\template\index\reg.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_59035cebe10543_05492084',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2565bac5c2d31b2596dc70c5925aa7a5004862a5' => 
    array (
      0 => 'C:\\wamp\\www\\deal\\template\\index\\reg.html',
      1 => 1493392617,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_59035cebe10543_05492084 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title>注册</title>
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
    <?php echo '<script'; ?>
 src="<?php echo JS_PATH;?>
/reg.js"><?php echo '</script'; ?>
>
</head>
<body>
<div class="top">
	<a href="<?php echo FILE_URL;?>
">IDLE</a>
	<i>让您的物品使用起来</i>
</div>
<div class="bigbox" style="height: 460px;padding: 40px">
	<form action="index.php?m=index&f=login&a=addReg" method="post" id="form">
		<div class="lable">
		<input type="text" placeholder="请填写您的账号" class="form-control" id="username" name="username" autocomplete="off">
		</div>
		<div class="lable">
		<input type="text" placeholder="请填写您的姓名" class="form-control" id="nickname" name="nickname" autocomplete="off">
		</div>
		<div class="lable">
		<input type="password" placeholder="请输入密码" class="form-control" id="Password1" name="password" autocomplete="off">
		</div>
		<div class="lable">
		<input type="password" placeholder="确认密码" class="form-control" id="Password2" name="password2" autocomplete="off">
		</div>
		<div class="yanzheng lable" id="regs">
			<input type="text" id="code" class="form-control" placeholder="验 证 码" name="code">
			<img src="index.php?m=index&f=login&a=code" alt="验证码" title="点击更换" class="code" onclick="this.src='index.php?m=index&f=login&a=code&'+Math.random()">
		</div>
		<input type="submit" class="btn btn-default" id="dlbtn" value="注册">
		<p>已经有账号？请<a href="index.php?m=index&f=login" class="reg">登录</a></p>
	</form>
</div>		
</body>
</html><?php }
}
