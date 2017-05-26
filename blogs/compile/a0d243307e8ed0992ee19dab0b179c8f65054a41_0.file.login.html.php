<?php
/* Smarty version 3.1.30, created on 2017-03-09 03:26:33
  from "C:\wamp\www\ajax\mvc\template\index\login.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_58c0bd59cf6778_66695220',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a0d243307e8ed0992ee19dab0b179c8f65054a41' => 
    array (
      0 => 'C:\\wamp\\www\\ajax\\mvc\\template\\index\\login.html',
      1 => 1489026391,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_58c0bd59cf6778_66695220 (Smarty_Internal_Template $_smarty_tpl) {
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
	<?php echo '<script'; ?>
 src="<?php echo JS_PATH;?>
/jquery.js"><?php echo '</script'; ?>
>
	<body style="background: url(<?php echo IMG_PATH;?>
/bg.jpg)">
		<div class="box">
			<form role="form" action="index.php?f=login&a=yanzheng" method="post">
				<p class="logo">Login</p>
				<div class="form-group">
					<input type="text" class="form-control" name="user" id="name" placeholder="账户输入">
				</div>
				<div class="form-group">
					<input type="password" name="pass" class="form-control" placeholder="密码输入">
				</div>
				<div class="form-group">
					<input type="text" name="code" id="code" class="form-control" placeholder="验证码">
					<img src="index.php?f=login&a=code" onclick='this.src="index.php?f=login&a=code&"+Math.random()' alt="" />
				</div>
				<button type="submit" class="btn btn-default">登录</button>
				<button type="button" onclick="location.assign('index.php?f=login&a=zhuce');" id="btn" class="btn btn-default">注册</button>
				<button type="button" onclick="location.assign('index.php');" class="btn btn-default">返回首页</button>
			</form>
		</div>
	</body>
</html><?php }
}
