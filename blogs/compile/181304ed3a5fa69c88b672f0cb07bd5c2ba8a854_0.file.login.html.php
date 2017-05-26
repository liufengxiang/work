<?php
/* Smarty version 3.1.30, created on 2017-05-06 03:10:11
  from "C:\wamp\www\blogs\template\admin\login.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_590d2273755377_79395162',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '181304ed3a5fa69c88b672f0cb07bd5c2ba8a854' => 
    array (
      0 => 'C:\\wamp\\www\\blogs\\template\\admin\\login.html',
      1 => 1489022198,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_590d2273755377_79395162 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>login</title>
	</head>
	<link rel="stylesheet" href="<?php echo CSS_PATH;?>
/bootstrap.min.css">
	<link rel="stylesheet" href="<?php echo CSS_PATH;?>
/login.css" />
	<body style="background: url(<?php echo IMG_PATH;?>
/bght.jpg)">
		<div class="box">
			<form action="index.php?m=admin&a=yanzheng" role="form" method="post">
				<p class="logo">+blogs</p>
				<div class="form-group">
					<input type="text" class="form-control" name="user" id="name" placeholder="账户输入">
				</div>
				<div class="form-group">
					<input type="password" name="pass" class="form-control" placeholder="密码输入">
				</div>
				<div class="form-group">
					<input type="text" name="code" id="code" class="form-control" placeholder="验证码">
					<img src="index.php?m=admin&a=code" onclick='this.src="index.php?m=admin&a=code&"+Math.random()' alt="" />
				</div>
				<button type="submit" class="btn btn-default">登录</button>
			</form>
		</div>
	</body>
</html><?php }
}
